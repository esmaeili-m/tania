<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soical extends Model
{
    protected $fillable = [
        'instagram',
        'telegram',
        'whatsapp',
        'linkedin',
        'pinterest',
        'email',
        'phone',
        'status',
    ];
    use HasFactory;
}
