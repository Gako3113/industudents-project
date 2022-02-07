<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'send', 'recieve', 'message',
    ];
    
    public function index(Message $message)
    {
        return $message->get();
    }
}
