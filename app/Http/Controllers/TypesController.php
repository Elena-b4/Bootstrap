<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    public function index()
    {
        $types = [
            ['type' => 'insignia'],
            ['type' => 'astra'],
            ['type' => 'movano'],
            ['type' => 'corsa'],
            ];
        foreach ($types as $type) {
            Type::create($type);
            dump($type);
        }
$typeToUpdate = Type::find(3);
        $newType = ['type' => 'vectra'];
        $typeToUpdate->update($newType);

        $deleteType = Type::find(4);
        $deleteType->delete();
        return view('types.index');
    }
}
