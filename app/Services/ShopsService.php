<?php


namespace App\Services;


use App\Http\Requests\ShopCreateRequest;
use App\Models\Shop;

class ShopsService
{
    public function storeShops(ShopCreateRequest $request)
    {
        $data = $request->validated();
        Shop::create($data);
    }
}
