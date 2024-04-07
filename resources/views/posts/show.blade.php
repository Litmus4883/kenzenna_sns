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
            <p>{{ $post->body }}</p>
            @if($post->images->isNotEmpty())
                <img class="image" src="{{ $post->images->first()->image_path }}" alt="画像" />
            @endif
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
    <!-- 返信機能-->
    <div class="replies">
        <h2>返信する</h2>
        <!-- 返信の投稿-->
        <div class="post_reply">
            <form action="/posts/{{ $post->id }}/reply" method="post" name="reply">
                @csrf
                <input type="hidden" value="{{ $post->id }}" name="post_id" />
                <input type="text" name="reply[body]" placeholder="返信する" /></br>
                <input type="submit" value="送信" />
            </form>
        </div>
        <!-- 返信の表示-->
        <div class="show_replies">
            @foreach($post->replies as $reply)
                <p>{{ $reply->body }}</p>
            @endforeach
        </div>
    </div>
    <a href="{{ route('post_index') }}">タイムラインへ戻る</a>
</x-app-layout>