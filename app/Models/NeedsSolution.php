<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NeedsSolution extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'thumbnail',
        'heading',
        'short_article'
    ];
}
