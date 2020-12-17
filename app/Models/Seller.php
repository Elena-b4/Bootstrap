<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function places()
    {
        return $this->belongsToMany(Place::class, 'place_sellers', 'seller_id', 'place_id');
    }
}
