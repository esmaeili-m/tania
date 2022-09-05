<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSlider extends Model
{
    protected $fillable = [
        'title',
        'image',
        'image',
        'status'
    ];
    use SoftDeletes;
    use HasFactory;
}
