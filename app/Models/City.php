<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function directions()
    {
        return $this->belongsToMany(Direction::class, 'city_directions', 'city_id', 'direction_id');
    }

    public function trains()
    {
        return $this->belongsTo(Train::class, 'train_id', 'id');
    }

}
