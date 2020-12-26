<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeaFishUpdateRequest;
use App\Http\Requests\SeafoodCreateRequest;
use App\Models\Seafood;
use Illuminate\Http\Request;

class SeafoodsController extends SeafoodsBaseController
{
    public function index()
    {
        $seafoods = Seafood::all();
        return view('seafoods.index', compact('seafoods'));
    }

    public function store(SeafoodCreateRequest $request)
    {
        $this->service->storeSeafood($request);
        return redirect()->route('seafoods.index');
    }

    public function create()
    {
        return view('seafoods.create');
    }

    public function edit(Seafood $seafood)
    {
        return view('seafoods.edit', compact('seafood'));
    }

    public function update(Seafood $seafood, SeaFishUpdateRequest $request)
    {
        $data = $request->validated();
        $seafood->update($data);
        return redirect()->route('seafoods.show', $seafood->id);
    }

    public function show(Seafood $seafood)
    {
        return view('seafoods.show', compact('seafood'));
    }

    public function destroy(Seafood $seafood)
    {
        $seafood->delete();
        return redirect()->route('seafoods.index');
    }
}
