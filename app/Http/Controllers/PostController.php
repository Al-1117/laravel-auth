<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  // Index per gli ospiti

  public function index() {

    $posts = Post::all();

    return view('guest.posts.index', compact('posts'));
  }

  // Show per gli ospiti

  public function show(Post $post) {

    return view('guest.posts.show', compact('post'));
  }
}
