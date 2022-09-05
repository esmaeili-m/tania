<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    protected $fillable=[
        'title',
        'image',
        'status',
        'description',
        'position',
    ];
    use SoftDeletes;
    use HasFactory;
}
