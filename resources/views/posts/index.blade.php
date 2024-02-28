<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        タイムライン
    </x-slot>
    
    <!-- Body-->
    <!-- 投稿一覧-->
    <div class="posts">
        @foreach($posts as $post)
            <!-- post-->
            <div class="post">
                <h2 class="name">{{ $post->user->name }}</h2>
                <h2 class="body">{{ $post->body }}</h2>
            </div>
        @endforeach
    </div>
</x-app-layout>