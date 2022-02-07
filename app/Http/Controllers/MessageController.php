<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $users = User::select('id','name')->get();
        // $user = Auth::user();
        // $users = User::find(1)->get();
        // dd($users);
        // ログイン者以外のユーザを取得する
        // $users = User::where('id' , $user->id)->get();
        // チャットユーザ選択画面を表示
        return view('message.chat_user_select', compact('users'));
    }
}


