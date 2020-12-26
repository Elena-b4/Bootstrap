<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopCreateRequest;
use App\Http\Requests\ShopUpdateRequest;
use App\Models\Algae;
use App\Models\Bake;
use App\Models\River_fish;
use App\Models\Sea_fish;
use App\Models\Seafood;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopsController extends ShopsBaseController
{
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }

    public function store(ShopCreateRequest $request)
    {
        $this->service->storeShops($request);
        return redirect()->route('shops.index');
    }

    public function create()
    {
        $shops = Shop::all();
        return view('shops.create', compact('shops'));
    }

    public function edit(Shop $shop)
    {
        $seafoods = Seafood::all();
        $bakes = Bake::all();
        $seaFishes = Sea_fish::all();
        $riverFishes = River_fish::all();
        $algaes = Algae::all();
        $shops = Shop::all();
        return view('shops.edit', compact('shop', 'seafoods', 'bakes', 'seaFishes', 'riverFishes', 'algaes', 'shops'));
    }

    public function update(Shop $shop, ShopUpdateRequest $request)
    {
        $data = $request->validated();
        $shop->update($data);
        return redirect()->route('shops.index', $shop->id);
    }

    public function show(Shop $shop)
    {
        return view('shops.show', compact('shop'));
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shops.index');
    }

}
