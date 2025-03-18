<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapedData extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'retailer_id',
        'title',
        'description',
        'price',
        'stock_count',
        'images',
        'rating',
        'avg_rating',
        'scraped_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function retailer()
    {
        return $this->belongsTo(Retailer::class);
    }
}