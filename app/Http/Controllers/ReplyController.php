<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(Post $post, Reply $reply, Request $request)
    {
        $input = $request->input('reply');
        $input['user_id'] = Auth::id();
        $input['post_id'] = $request->input('post_id');
        $reply->fill($input)->save();
        return redirect('/posts/'. $post->id);
    }
}
