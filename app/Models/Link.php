<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\HttpCache\Ssi;

class Link extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'url',
        'description',
    ];
}
