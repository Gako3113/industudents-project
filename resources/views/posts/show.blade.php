@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<body>
　<title>求人一覧</title>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%">Image cap</text></svg>
              <div class="card-body">
                <h5 class="card-title title">{{ $post->title }}</h5>
                <p class="card-text body">{{ $post->body }}</p>
                <a href="">{{ $post->category->name }}</a>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <a href="#" class="btn btn-primary">詳細を見る</a>
                @foreach ($posts as $post)
                    <div class='post'>
                      <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                      </h2>
                    </div>
                @endforeach
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
