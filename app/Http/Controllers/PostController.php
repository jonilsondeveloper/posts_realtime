<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Post;
use App\Events\NewPost;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct(User $user, Post $post) {
        $this->middleware('auth');
        $this->user = $user;
        $this->post = $post;
    }

    public function index() {
        $posts = $this->post->orderBy('data_time', 'desc')->get();

        return view('posts', compact('posts'));
    }

    public function store(Request $request) {
        date_default_timezone_set('America/Fortaleza');
        $date_time = date('Y-m-d H:i:s');

        $post = $this->post->create([
            'text' => $request->new_post,
            'data_time' => $date_time,
            'user_id' => auth()->user()->id
        ]);

        // $post_user = $this->post::find($post->id)->user;

        // $post->user->name;

        // $post_user = DB::table('posts')->where('id', $post->id)->with('user');

        // $post_user = DB::table('posts')
        //                 ->join('users', 'posts.user_id', '=', 'users.id')
        //                 ->select('posts.*', 'users.name')
        //                 ->where('posts.id', $post->id)
        //                 ->get();
        // dd($post_user);


        event(new NewPost($post));

        // if ($post)
        //     return redirect()
        //                 ->route('home')
        //                 ->with('success', 'Sucesso!');

        // return redirect()
        //             ->back()
        //             ->withInput()
        //             ->with('error', 'Ocorreu um erro, tente em instantes!');
    }

    public function show($id) {
        //
    }
}

