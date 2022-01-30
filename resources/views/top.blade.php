@extends('layouts.app')

@section('content')
<div class="admin">
    <h1>学生の力を集めよう<br>industudentsで</h1>
    <h2>industudentsは、学生の力をアルバイトとして集めるマッチング求人サービスです。</h2>
    <p class="admin">[<a href='/login/admin'>学生の力を求めている方はこちら</a>]</p>
</div>
<div class="users">
    <h1>一次産業に携わろう<br>industudentsで</h1>
    <h2>industudentsは、一次産業に携わってみたい学生向けマッチング求人サービスです。</h2>
    <p class="users">[<a href='/login'>学生の方はこちら</a>]</p>
</div>
@endsection