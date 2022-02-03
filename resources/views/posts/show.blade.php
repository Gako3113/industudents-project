@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<body>
    <title>求人一覧</title>
    <div class="container">
      <div class="title">
        <h1>{{ $post->title }}</h1>
      </div>
      <div class="image_path">
        @if ($post->image_path)
        <!-- 画像を表示 -->
          <div class="bd-placeholder-img img-top" width="60%" height="225">
            <img src="{{ $post->image_path }}">
          </div>
        @endif
      </div>
      <div class="body">
        <h1>作業内容</h1>
        <h5>{{ $post->body }}</h5>
      </div>
      <div class="place">
        <h1>場所</h1>
        <h5>{{ $post->place }}</h5>
      </div>
      <div class="start_datetime">
        <h1>開始日</h1>
        <h5>{{ $post->start_datetime }}</h5>
      </div>
      <div class="end_datetime">
        <h1>終了日</h1>
        <h5>{{ $post->end_datetime }}</h5>
      </div>
      <div class="salary">
        <h1>給料</h1>
        <h5>{{ $post->salary }} 万円</h5>
      </div>
      <div class="daadline">
        <h1>締切日</h1>
        <h5>{{ $post->daadline }}</h5>
      </div>
      <div class="back">
        [<a href="/">戻る</a>]
      </div>
    </div>
</body>
@endsection
