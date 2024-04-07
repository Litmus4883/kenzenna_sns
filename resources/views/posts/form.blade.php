<!-- form.blade.php-->
@csrf
<h2>本文</h2>
<div class="post_body">
    @if($post)
        <input type="text" name="post[body]" placeholder="今日はどんな天気でしたか？">{{ old('body', $post) }}</input><br/>
    @else
        <input type="text" name="post[body]" placeholder="今日はどんな天気でしたか？" /><br/>
    @endif
        <p class="body_error red">{{ $errors->first('post.body') }}</p>
</div>

<div class="post_image">
    <input type="file" name="image" accept="image/*" id="imageInput"/>
    <div id="preview"></div>
</div>