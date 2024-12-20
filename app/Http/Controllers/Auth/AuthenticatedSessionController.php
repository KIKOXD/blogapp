<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));

        if (auth()->user()->is_admin) {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            return redirect()->intended(route('user.dashboard'));
        }
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        // Logout user
        Auth::logout();

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/login')->with('success', 'You have successfully logged out.');
    }
}
