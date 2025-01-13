<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesContact extends Model
{
    protected $table = "messages_contact";

    protected $fillable = ['name', 'email', 'subject', 'message', 'phone'] ;
}
