<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function seafood()
    {
        return $this->belongsTo(Seafood::class, 'seafood_id', 'id');
    }

    public function sea_fish()
    {
        return $this->belongsTo(Sea_fish::class, 'sea_fish_id', 'id');
    }

    public function river_fish()
    {
        return $this->belongsTo(River_fish::class, 'river_fish_id', 'id');
    }

    public function bake()
    {
        return $this->belongsTo(Bake::class, 'bake_id', 'id');
    }

    public function algae()
    {
        return $this->belongsTo(Algae::class, 'algae_id', 'id');
    }
}
