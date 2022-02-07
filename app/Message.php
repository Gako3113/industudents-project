<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $message;
    protected $request;
    
    public function index(Message $message)
    {
        return $message->get();
    }
}
