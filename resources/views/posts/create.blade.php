<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        新規作成
    </x-slot>
    
    <!-- 作成フォーム-->
    <h1>投稿作成</h1>
    <div class="post_create">
        <form action="/posts" method="post" enctype="multipart/form-data">
            <!-- フォーム-->
            @include('posts.form')
            <!-- 画面操作-->
            <input type="submit" value="保存" /></br>
            <a href="{{ route('post_index') }}">タイムラインへ戻る</a>
        </form>
    </div>
</x-app-layout>