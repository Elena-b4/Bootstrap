<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Direction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function cities()
    {
        return $this->belongsToMany(City::class, 'city_directions', 'direction_id', 'city_id');
    }

    public function trains()
    {
        return $this->hasMany(Train::class, 'train_id', 'id');
    }

}
