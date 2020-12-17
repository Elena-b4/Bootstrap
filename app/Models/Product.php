<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function places()
    {
        return $this->belongsToMany(Place::class, 'place_products', 'product_id', 'place_id');
    }

    public function typeOfFood()
    {
        return $this->belongsTo(TypeOfFood::class, 'typeOfFood_id', 'id');
    }
}
