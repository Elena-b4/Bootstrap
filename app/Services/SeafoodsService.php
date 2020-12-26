<?php


namespace App\Services;


use App\Http\Requests\SeafoodCreateRequest;
use App\Models\Seafood;

class SeafoodsService
{
    public function storeSeafood(SeafoodCreateRequest $request)
    {
        $data = $request->validated();
        Seafood::create($data);
    }
}
