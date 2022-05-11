<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'cover_photo',
        'client',
        'location',
        'completed_date',
        'body',
    ];
}
