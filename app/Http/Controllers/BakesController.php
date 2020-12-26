<?php

namespace App\Http\Controllers;

use App\Http\Requests\BakeCreateRequest;
use App\Http\Requests\BakeUpdateRequest;
use App\Models\Bake;
use Illuminate\Http\Request;

class BakesController extends BakesBaseController
{
    public function index()
    {
        $bakes = Bake::all();
        return view('bakes.index', compact('bakes'));
    }

    public function store(BakeCreateRequest $request)
    {
        $this->service->storeBake($request);
        return redirect()->route('bakes.index');
    }

    public function create()
    {
        return view('bakes.create');
    }

    public function edit(Bake $bake)
    {
        return view('bakes.edit', compact('bake'));
    }

    public function update(Bake $bake, BakeUpdateRequest $request)
    {
        $data = $request->validated();
        $bake->update($data);
        return redirect()->route('bakes.show', $bake->id);
    }

    public function show(Bake $bake)
    {
        return view('bakes.show', compact('bake'));
    }

    public function destroy(Bake $bake)
    {
        $bake->delete();
        return redirect()->route('bakes.index');
    }

}
