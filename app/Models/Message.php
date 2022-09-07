<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'name',
        'message',
        'country',
        'device',
        'ip',
        'email'
    ];
    protected $casts=['country'=>'array'];
    use HasFactory;
}
