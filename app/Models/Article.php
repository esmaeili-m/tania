<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    public $fillable=[
      'title',
      'description',
      'category',
      'subcategory',
      'star',
      'date',
      'status',
      'image',
      'image2',
    ];
    use SoftDeletes;
    use HasFactory;
}
