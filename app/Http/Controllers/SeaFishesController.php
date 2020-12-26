<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeaFishCreateRequest;
use App\Http\Requests\SeaFishUpdateRequest;
use App\Models\Sea_fish;
use Illuminate\Http\Request;

class SeaFishesController extends SeaFishesBaseController
{
    public function index()
    {
        $seaFishes = Sea_fish::all();
        return view('seaFishes.index', compact('seaFishes'));
    }

    public function store(SeaFishCreateRequest $request)
    {
        $this->service->storeSeaFish($request);
        return redirect()->route('seaFishes.index');
    }

    public function create()
    {
        return view('seaFishes.create');
    }

    public function edit(Sea_fish $seaFish)
    {
        return view('seaFishes.edit', compact('seaFish'));
    }

    public function update(Sea_fish $seaFish, SeaFishUpdateRequest $request)
    {
        $data = $request->validated();
        $seaFish->update($data);
        return redirect()->route('seaFishes.show', $seaFish->id);
    }

    public function show(Sea_fish $seaFish)
    {
        return view('seaFishes.show', compact('seaFish'));
    }

    public function destroy(Sea_fish $seaFish)
    {
        $seaFish->delete();
        return redirect()->route('seaFishes.index');
    }

}
