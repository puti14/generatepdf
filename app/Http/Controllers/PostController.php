<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * 
     *  @return View
     */

    public function index(): View
    {
        // Kirim data post ke view
        return view('posts.index');
    }
    public function view()
    {
        return view('posts.view');
    }
    public function edit()
    {
        return view('posts.edit');
    }
    public function login()
    {
        return view('posts.login');
    }
}
