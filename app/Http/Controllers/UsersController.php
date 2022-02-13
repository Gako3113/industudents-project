<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(User $user)
    {
        // $users = $user->get();
        // dd($users);
        $users = User::find(1)->get();
        dd($users);
        // $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('users.index', compact('users'));
    }
}
