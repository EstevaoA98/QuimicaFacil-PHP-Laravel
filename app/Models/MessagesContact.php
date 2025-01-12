<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesContact extends Model
{
    protected $table = "homes";

    protected $fillable = ['name', 'email', 'subject', 'message', 'phone'] ;
}
