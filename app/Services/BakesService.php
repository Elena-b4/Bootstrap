<?php


namespace App\Services;


use App\Http\Requests\BakeCreateRequest;
use App\Models\Bake;

class BakesService
{
    public function storeBake(BakeCreateRequest $request)
    {
        $data = $request->validated();
        Bake::create($data);
    }
}
