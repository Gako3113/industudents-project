@extends('layouts.app')

@section('content')
    <body>
        <h1>求人履歴</h1>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="posts">
                    <div class="row">
                        @foreach ($posts as $post)
                        {{ $posts }}
                        <div class="col-md-6">
                            <div class="card m-4 shadow-sm">
                                @if ($post->image_path)
                                    <!-- 画像を表示 -->
                                    <div class="bd-placeholder-img card-img-top" width="50%" height="100">
                                        <img src="{{ $post->image_path }}">
                                    </div>
                                @endif
                              　<div class="card-body">
                                    <div class="post">
                                        <h5 class="card-title title">{{ $post->title }}</h5>
                                        <p class="card-text body">{{ $post->body }}</p>
                                        <a href="#" class="btn btn-primary">編集する</a>
                                    </div>
                              　</div>
                            </div>
                    　　</div>
                    　　@endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
    </body>
@endsection

