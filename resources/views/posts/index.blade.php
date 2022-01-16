@extends('layouts.app')

@section('content')
<title>求人情報</title>
    <body>
        <p class="create">[<a href='/posts/create'>求人登録</a>]</p>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <h2 class="title">
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class="body">{{$post->body}}</p>
                </div>
                @if ($post->image_path)
                  <!-- 画像を表示 -->
                  <img src="{{ $post->image_path }}">
                @endif
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button> 
                </form>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </body>
@endsection

