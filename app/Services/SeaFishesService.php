<?php


namespace App\Services;


use App\Http\Requests\SeaFishCreateRequest;
use App\Models\Sea_fish;

class SeaFishesService
{
    public function storeSeaFish(SeaFishCreateRequest $request)
    {
        $data = $request->validated();
        Sea_fish::create($data);
    }
}
