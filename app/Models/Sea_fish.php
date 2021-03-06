<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sea_fish extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function shops()
    {
        return $this->hasMany(Shop::class, 'shop_id', 'id');
    }
}
