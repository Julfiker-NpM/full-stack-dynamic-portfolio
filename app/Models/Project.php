<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'icon',
        'tech_tags',
        'category',
        'project_url',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'tech_tags' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}


