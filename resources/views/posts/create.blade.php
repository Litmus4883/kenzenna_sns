<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        新規作成
    </x-slot>
    
    <!-- 作成フォーム-->
    <h1>投稿作成</h1>
    <div class="post_create">
        <form action="/posts" method="POST">
            @csrf
            <h2>本文</h2>
            <textarea type="text" name="post[body]" placeholder="本文"></textarea>
            <input type="submit" value="保存" />
        </form>
    </div>
</x-app-layout>