<?php

namespace App\Http\Controllers;

use App\Http\Requests\RiverFishCreateRequest;
use App\Http\Requests\RiverFishUpdateRequest;
use App\Models\River_fish;
use App\Models\Seafood;
use Illuminate\Http\Request;

class RiverFishesController extends RiverFishesBaseController
{
    public function index()
    {
        $riverFishes = River_fish::all();
        return view('riverFishes.index', compact('riverFishes'));
    }

    public function store(RiverFishCreateRequest $request)
    {
        $this->service->storeRiverFish($request);
        return redirect()->route('riverFishes.index');
    }

    public function create()
    {
        return view('riverFishes.create');
    }

    public function edit(River_fish $riverFish)
    {
        return view('riverFishes.edit', compact('riverFish'));
    }

    public function update(River_fish $riverFish, RiverFishUpdateRequest $request)
    {
        $data = $request->validated();
        $riverFish->update($data);
        return redirect()->route('riverFishes.show', $riverFish->id);
    }

    public function show(River_fish $riverFish)
    {
        return view('riverFishes.show', compact('riverFish'));
    }

    public function destroy(River_fish $riverFish)
    {
        $riverFish->delete();
        return redirect()->route('riverFishes.index');
    }

}
