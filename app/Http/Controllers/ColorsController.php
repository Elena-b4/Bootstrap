<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index()
    {
        $colors = [['color' => 'pink'], ['color' => 'red'], ['color' => 'black'], ['color' => 'gold'],];
        foreach ($colors as $color) {
            Color::create($color);
            dump($color);
        }
        $newColor = ['color' => 'blue'];
        $colorToUpdate = Color::find(2);
        $colorToUpdate->update($newColor);

        $deleteColor = Color::find(4);
        $deleteColor->delete();
        return view('colors.index');
    }
}
