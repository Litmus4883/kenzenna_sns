<x-app-layout><!---->
    <!-- ヘッダー-->
    <x-slot name="header">
        詳細画面
    </x-slot>
    
    <!-- post-->
    <div class="post">
        <h2>本文</h2>
        <h2>{{ $post->body }}</h2>
    </div>
</x-app-layout>