@csrf
<h2>本文</h2>
            <textarea type="text" name="post[body]" placeholder="今日はどんな天気でしたか？">{{ old('body', $post) }}</textarea><br/>
            <p class="body_error red">{{ $errors->first('post.title') }}</p>