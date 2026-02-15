<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_us',
        'why_us',
        'goal',
        'vision',
        'about_footer',
        'ads_text',
        'activities_text',
        'persons_text',
        'contact_us_text',
        'terms_text',
        'activity_terms',
        'counter1_name',
        'counter1_count',
    ];

    protected $casts = [
        'counter1_count' => 'integer',
    ];
}
