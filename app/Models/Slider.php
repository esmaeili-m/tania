<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'status',
        'image',
        'position'
    ];
    use SoftDeletes;
    use HasFactory;
}
