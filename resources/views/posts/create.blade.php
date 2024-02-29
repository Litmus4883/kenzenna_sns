<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        新規作成
    </x-slot>
    
    <!-- 作成フォーム-->
    <h1>投稿作成</h1>
    <div class="post_create">
        <form action="/posts" method="post">
            @csrf
            <h2>本文</h2>
            <textarea type="text" name="post[body]" placeholder="今日はどんな天気でしたか？" value="{{ old('post.body') }}"></textarea><br/>
            <p class="body_error red">{{ $errors->first('post.title') }}</p>
            <input type="submit" value="保存" />
        </form>
    </div>
    <a href="{{ route('index') }}">タイムラインへ戻る</a>
</x-app-layout>