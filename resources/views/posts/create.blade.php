
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <title>求人登録</title>
    <body>
        <div class="album py-5 bg-light ">
            <div class="container">
                <h1>求人登録</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" value="{{ old('post.title') }}" placeholder="○○な学生求めてます！"/><br>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>作業内容</h2>
                <textarea name="post[body]" value="{{ old('body.body') }}" placeholder="このアルバイトは○○なアルバイトです・・"></textarea><br>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="place">
                <h2>場所</h2>
                <textarea name="post[place]" value="{{ old('body.place') }}" ></textarea><br>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            <div class="image">
                <h2>画像</h2>
                <textarea name="post[image]" value="{{ old('body.image') }}" ></textarea><br>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            <input type="submit" value="登録"/>
            <div class="back">
                [<a href="/">戻る</a>]
            </div>
        </form>
            </div>
        </div>
    </body>　　　　　　　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
@endsection

