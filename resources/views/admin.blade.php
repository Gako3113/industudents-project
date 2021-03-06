@extends('layouts.app', ['authgroup'=>'admin'])

@section('content')
<body>
    <div class="container">
        <div class="job_posts">
            <h1>求人を出す</h1>
            <h3>学生に対し、アルバイトの求人を出します。<br>
                「○○な学生求めています！」と学生に問いかけてみましょう。<br>
                その後、学生からの応募を待ちましょう。
            </h3>
            <a href="/posts/create" class="btn btn-primary">出す</a>
        </div>
        <div class="job_talk">
            <h1>学生と話す</h1>
            <h3>学生と話し、今後のアルバイトの予定や、詳細情報などを送りましょう。</h3>
            <a href="/users" class="btn btn-primary">話す</a>
        </div>
        <div class="job_see">
            <h1>求人履歴</h1>
            <h3>出した求人を確認することが出来ます。求人の編集や応募者の確認が出来ます。</h3>
            <a href="/posts/log" class="btn btn-primary">見る</a>
        </div>
    </div>
</body>
@endsection
