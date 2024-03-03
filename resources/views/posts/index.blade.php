<!-- x-プレフィックスはコンポーネントの使用-->
<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        タイムライン
    </x-slot>
    
    <!-- 本文-->
    <!-- 投稿一覧-->
    <div class="posts">
        @foreach($posts as $post)
            <!-- post-->
            <article>
                <div class="post">
                    <h2 class="name">{{ $post->user->name }}</h2>
                    <h2 class="body">{{ $post->body }}</h2>
                    <!-- 第2引数に変数名（ルートセグメント名）を指定する-->
                    <a href="{{ route('show', $post) }}">投稿の詳細を見る</a>
                </div>
            </article>
        @endforeach
    </div>
    <div class="paginate">{{ $posts->links('vendor.pagination.custom_pagination') }}</div>
</x-app-layout>