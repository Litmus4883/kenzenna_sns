<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    # 投稿一覧画面を返すメソッド
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    # 投稿作成画面を返すメソッド
    public function create()
    {
        return view('posts.create');
    }
    # 新規投稿を保存するメソッド
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        # redirectメソッドにURLを渡す
        return redirect('/posts');
    }
    # 投稿詳細画面を返すメソッド
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
}
