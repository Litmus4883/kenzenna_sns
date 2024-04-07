<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
# PostRequestは、バリデーションのために生成したクラス
use App\Http\Requests\PostRequest;
use Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    # 投稿一覧画面を返すメソッド
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    # 投稿作成画面を返すメソッド
    public function create(Post $post)
    {
        return view('posts.create')->with([ 'post' => $post]);
    }
    # 新規投稿を保存するメソッド
    public function store(Image $image, Post $post, PostRequest $request)
    {
        $inputPost = $request->input('post');
        $inputPost['user_id'] = Auth::id();
        $post->fill($inputPost)->save();
        
        if($request->file('image')) {
            $uploadedFileUrl['image_path'] = Cloudinary::uploadFile($request->file('image')
                ->getRealPath())->getSecurePath();
            $uploadedFileUrl['post_id'] = $post->id;
            $image->fill($uploadedFileUrl)->save();
        }
        
        # redirectメソッドにURLを渡す
        return redirect('/posts');
    }
    # 投稿詳細画面を返すメソッド
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    # 投稿編集画面を返すメソッド
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    # 投稿をupdateするメソッド
    public function update(Request $request, Post $post)
    {
        $input = $request->input('post');
        $input['user_id'] = Auth::id();
        $post->fill($input)->save();
        return redirect('/posts');
    }
    # 投稿を削除するメソッド
    public function destory(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
