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
    <a href="{{ route('edit', $post) }}">編集する</a>
    <a href="{{ route('index') }}">タイムラインへ戻る</a>
</x-app-layout>