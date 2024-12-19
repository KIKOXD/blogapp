<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    // Upload Logo Admin
    public function uploadLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpg,png,gif,jpeg,webp|max:2048',
        ]);

        // Ambil nama asli file
        $originalFilename = $request->file('logo')->getClientOriginalName();

        // Simpan file ke folder public/uploads/logos dengan nama asli
        $path = $request->file('logo')->storeAs('uploads/logos', $originalFilename, 'public');

        return redirect()->back()->with('success', 'Logo uploaded successfully!');
    }

}
