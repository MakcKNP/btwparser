<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'currency',
        'logo',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_retailer');
    }

    public function scrapedData()
    {
        return $this->hasMany(ScrapedData::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_retailer');
    }
}
