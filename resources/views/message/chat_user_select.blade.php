@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
 
        </div>
    </div>
    <h1>メッセージ一覧</h1>
    {{--  チャット可能ユーザ一覧  --}}
    <table class="table">
        <thead>
            <tr>
                <th>番号</th>
                <th>名前</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$user->name}}</td>
                <td><a href="/chat/{{$user->id}}"><button type="button" class="btn btn-primary">話す</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</div>
@endsection