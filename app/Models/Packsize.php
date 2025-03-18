<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packsize extends Model
{
    /** @use HasFactory<\Database\Factories\PacksizeFactory> */
    use HasFactory;
    protected $fillable = [
        'name',  
    ];
}
