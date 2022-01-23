
@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <title>求人登録</title>
    <body>
        <div class="album py-5 bg-light ">
            <div class="container">
                <h1 class="py-5">求人登録</h1>
                <form action="/posts" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="title">
                        <h2>タイトル</h2>
                        <input type="text" class="form-control" name="post[title]" value="{{ old('post.title') }}" placeholder="○○な学生求めてます！"/><br>
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    <div class="body">
                        <h2>作業内容</h2>
                        <input type="text" class="form-control" name="post[body]" value="{{ old('post.body') }}" placeholder="このアルバイトは○○なアルバイトです・・"/><br>
                        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                    <div class="place">
                        <h2>場所</h2>
                        <input type="text" class="form-control" name="post[place]" value="{{ old('post.place') }}"/><br>
                        <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
                    </div>
                    <div class="image_path">
                        <h2>画像</h2>
                        <!-- アップロードフォームの作成 -->
                        <input type="file" name="post[image_path]">
                    </div>
                    <div class="datetime pt-3">
                        <div class="start_datetime">
                            <label for="start_datetime" class="col-form-label">
                                <h2>開始日時</h2>
                            </label>
                            <input type="datetime-local" class="form-control" id="start_datetime" name="post[start_datetime]">
                        </div>
                        <div class="end_datetime pt-3">
                            <label for="end_datetime" class="col-form-label">
                                <h2>終了日時</h2>
                            </label>
                            <input type="datetime-local" class="form-control" id="end_datetime" name="post[end_datetime]">
                        </div> 
                    </div>
                    <div class="salary pt-3">
                        <h2>給料</h2>
                        <input type="text" class="form-control" name="post[salary]" value="{{ old('post.salary') }}" placeholder="日給〇〇円"/><br>
                        <p class="salary__error" style="color:red">{{ $errors->first('post.salary') }}</p>
                    </div>
                    <div class="daadline pb-3">
                        <label for="daadline" class="col-form-label">
                            <h2>締め切り日時</h2>
                        </label>
                        <input type="datetime-local" class="form-control" id="daadline" name="post[deadline]">    
                    </div>
                    <input type="submit" class="btn btn-primary" value="登録"/>
                </form>
                <div class="back">
                    [<a href="/">戻る</a>]
                </div>
            </div>
        </div>
    </body>　　　　　　　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
@endsection

