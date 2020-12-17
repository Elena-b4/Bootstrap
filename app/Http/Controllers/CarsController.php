<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Color;
use App\Models\Type;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        foreach ($cars as $car) {
            dump($car->type->type);
        }
        return view('cars.index');
    }

    public function update()
    {
        $updateCar = Car::all()->random();
        $newCar = [
            'brand' => 'opel',
            'is_new' => '1',
            'color_id' => 2,
            'type_id' => 3
        ];
        $updateCar->update($newCar);
    }

    public function destroy()
    {
        $deleteCar = Car::all()->random();
        $deleteCar->delete();
    }

    public function store()
    {
        $colors = Color::all();
        $types = Type::all();
        $cars = [
            [
                'brand' => 'opel',
                'is_new' => '1',
                'color_id' => $colors->random()->id,
                'type_id' => $types->random()->id
            ],
            [
                'brand' => 'opel',
                'is_new' => '2',
                'color_id' => $colors->random()->id,
                'type_id' => $types->random()->id
            ],
            [
                'brand' => 'opel',
                'is_new' => '1',
                'color_id' => $colors->random()->id,
                'type_id' => $types->random()->id
            ],
        ];
        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
