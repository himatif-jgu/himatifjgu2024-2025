<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Alumni;
use App\Models\Gallery;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $alumni = Alumni::orderBy('created_at', 'ASC')->take(4)->get();
        $gallery = Gallery::orderBy('created_at', 'DESC')->take(9)->get();
        return view('welcome', [
            'posts' => $posts,
            'alumni' => $alumni,
            'gallery' => $gallery
        ]);
    }

    public function blog()
    {
        $posts = Post::all();
        return view('landing.index', [
            'posts' => $posts
        ]);
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view('landing.gallery', [
            'gallery' => $gallery
        ]);
    }

    public function alumni()
    {
        $alumni = Alumni::all();
        return view('landing.alumni', [
            'alumni' => $alumni
        ]);
    }

    public function sejarah()
    {
        $gallery = Gallery::all();
        return view('landing.sejarah', [
            'gallery' => $gallery
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('landing.post', [
            'posts' => Post::all(),
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
