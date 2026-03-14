<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'text',
        'phone',
        'status',
        'user_id',
        'domain_id',
    ];
}
