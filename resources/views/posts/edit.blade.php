<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        投稿編集
    </x-slot>
    
    <!-- 作成フォーム-->
    <h1>投稿編集</h1>
    <div class="post_edit">
        <form action="/posts/{{ $post->id }}" method="post">
            @method('put')
            @include('posts.form')
            <input type="submit" value="更新する" />
            <a href="{{ route('index') }}">タイムラインへ戻る</a>
        </form>
    </div>
</x-app-layout>