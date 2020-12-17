<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'place_products', 'place_id', 'product_id');
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'place_sellers', 'place_id', 'seller_id');
    }


}
