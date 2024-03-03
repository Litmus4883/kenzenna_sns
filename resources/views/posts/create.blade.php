<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        新規作成
    </x-slot>
    
    <!-- 作成フォーム-->
    <h1>投稿作成</h1>
    <div class="post_create">
        <form action="/posts" method="post">
            @include('posts.form')
            <input type="submit" value="保存" />
            <a href="{{ route('index') }}">タイムラインへ戻る</a>
        </form>
    </div>
</x-app-layout>