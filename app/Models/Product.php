<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'manufacturer_part_number',
        'pack_size_id',
        'user_id',
        'images',
    ];

    public function retailers()
    {
        return $this->belongsToMany(Retailer::class, 'product_retailer');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function packSize()
    {
        return $this->belongsTo(PackSize::class, 'pack_size_id');
    }

    public function scrapedData()
    {
        return $this->hasMany(ScrapedData::class);
    }
   
}