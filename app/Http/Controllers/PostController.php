<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
    
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('show', compact('post'));
    }
    
    public function admin() {
        return view('admin');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        $path = null;

        if ($request->hasFile('image')) {
            // Hapus "public" kedua dari path
            $path = $request->file('image')->store('images', 'public');
        }

        Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            // 'image' => $path ? str_replace('public/', '', $path) : null, // Simpan path relatif
            'image' => $path,
        ]);
    
        
        // session()->flash('success', 'Post created successfully!');

        // return redirect()->route('posts.index');
        return redirect()->route('admin.dashboard')->with('success', 'Post created successfully!');
    }
}
