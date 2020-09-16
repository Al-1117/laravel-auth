<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Mail\PostCreateMail;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      $user = Auth::user();

      return view('admin.posts.index', compact('posts', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // if (Auth::check()) {

        $request->validate($this->validateData());

        $data_request = $request->all();

        $path = $request->file('image')->store('images','public');

        $new_post = new Post();
        $new_post->title = $data_request['title'];
        $new_post->content = $data_request['content'];
        $new_post->user_id = Auth::id();
        $new_post->image = $path;
        $new_post->save();

        // Invio una nuova mail

        Mail::to($new_post->user->email)->send(new PostCreateMail);


        return redirect()->route('guest.posts.show', $new_post);
      //   } else {
      //     "Devi essere effettuare l'accesso per creare un nuovo post"
      //   }
      // }
      // endif



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

      return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // FUNCTIONS

    public function validateData(){
      return [
        'title' => 'required|max:255',
        'content' => 'required|min:20',
      ];
    }
}
