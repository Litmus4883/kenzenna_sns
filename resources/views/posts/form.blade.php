@csrf
<h2>本文</h2>
<div class="post_body">
    @if($post->doesntExist())
        <textarea type="text" name="post[body]" placeholder="今日はどんな天気でしたか？"></textarea><br/>
    @else
        <textarea type="text" name="post[body]" placeholder="今日はどんな天気でしたか？">{{ old('body', $post) }}</textarea><br/>
    @endif
        <p class="body_error red">{{ $errors->first('post.body') }}</p>
</div>
<div class="post_image">
    <input type="file" name="image" />
</div>
        