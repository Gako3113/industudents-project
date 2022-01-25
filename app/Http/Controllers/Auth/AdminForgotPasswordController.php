<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class AdminForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email')->with(
            ['authgroup' => 'admin']
        );
    }

    protected function broker()
    {
        return Password::broker('admins');
    }
}
