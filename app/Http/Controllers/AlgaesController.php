<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlgaeCreateRequest;
use App\Http\Requests\AlgaeUpdateRequest;
use App\Models\Algae;
use Illuminate\Http\Request;

class AlgaesController extends AlgaesBaseController
{
    public function index()
    {
        $algaes = Algae::all();
        return view('algaes.index', compact('algaes'));
    }

    public function store(AlgaeCreateRequest $request)
    {
        $this->service->storeAlgae($request);
        return redirect()->route('algaes.index');
    }

    public function create()
    {
        return view('algaes.create');
    }

    public function edit(Algae $algae)
    {
        return view('algaes.edit', compact('algae'));
    }

    public function update(Algae $algae, AlgaeUpdateRequest $request)
    {
        $data = $request->validated();
        $algae->update($data);
        return redirect()->route('algaes.show', $algae->id);
    }

    public function show(Algae $algae)
    {
        return view('algaes.show', compact('algae'));
    }

    public function destroy(Algae $algae)
    {
        $algae->delete();
        return redirect()->route('algaes.index');
    }


}
