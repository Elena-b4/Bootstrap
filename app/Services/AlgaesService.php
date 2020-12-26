<?php


namespace App\Services;


use App\Http\Requests\AlgaeCreateRequest;
use App\Models\Algae;

class AlgaesService
{
    public function storeAlgae(AlgaeCreateRequest $request)
    {
        $data = $request->validated();
        Algae::create($data);
    }

}
