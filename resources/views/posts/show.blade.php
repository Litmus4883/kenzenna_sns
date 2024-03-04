<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        詳細画面
    </x-slot>
    
    <!-- post-->
    <article>
        <div class="post">
            <h2 class="name">{{ $post->user->name }}</h2>
            <h2>本文</h2>
            <h2>{{ $post->body }}</h2>
        </div>
    </article>
    
    <!-- 投稿の操作 -->
    <div class="post_control">
        <a href="{{ route('post_edit', $post) }}">編集する</a>
        <form onsubmit="return confirm('本当に削除しますか？')" action="/posts/{{ $post->id }}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="削除する" />
        </form>
        <a href="{{ route('post_index') }}">タイムラインへ戻る</a>
    </div>
</x-app-layout>