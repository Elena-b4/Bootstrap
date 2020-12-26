<?php


namespace App\Services;


use App\Http\Requests\RiverFishCreateRequest;
use App\Models\River_fish;

class RiverFishesService
{
    public function storeRiverFish(RiverFishCreateRequest $request)
    {
        $data = $request->validated();
        River_fish::create($data);
    }
}
