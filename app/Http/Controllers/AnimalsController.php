<?php

namespace App\Http\Controllers;

use App\Models\animalHelper;
use App\Models\helper;
use App\Models\house;
use App\Models\kindAnimal;
use App\Models\kindHouse;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function index()
    {
        $animal = Animal::create([
                'nickname' => 'Raw',
                'kindAnimal_id' => '2',
                'kindHouse_id' => '2',
                'house_id' => '2',
            ]
        );
        Animal::create([
                'nickname' => 'Nil',
                'kindAnimal_id' => '2',
                'kindHouse_id' => '2',
                'house_id' => '2',
            ]
        );
        Animal::create([
                'nickname' => 'Pan',
                'kindAnimal_id' => '1',
                'kindHouse_id' => '2',
                'house_id' => '1',
            ]
        );
        Animal::create([
                'nickname' => 'Bight',
                'kindAnimal_id' => '3',
                'kindHouse_id' => '2',
                'house_id' => '3',
            ]
        );
        dump($animal->nickname);

        $kindCat = kindAnimal::create([
            'kindOfAnimal' => 'cat',
        ]);
        kindAnimal::create([
            'kindOfAnimal' => 'dog',
        ]);
        kindAnimal::create([
            'kindOfAnimal' => 'rabbit',
        ]);
        dump($kindCat->kindOfAnimal);

        $helper = helper::create([
            'name' => 'Helen',
        ]);
        helper::create([
            'name' => 'Aziz',
        ]);
        helper::create([
            'name' => 'Mark',
        ]);
        helper::create([
            'name' => 'John',
        ]);
        helper::create([
            'name' => 'Vasya',
        ]);
        helper::create([
            'name' => 'Mila',
        ]);
        dump($helper->name);

        $house = house::create([
            'number' => '12',
            'kindHouse_id' => '1',
        ]);
        house::create([
            'number' => '15',
            'kindHouse_id' => '2',
        ]);
        house::create([
            'number' => '32',
            'kindHouse_id' => '3',
        ]);
        dump($house->number);

        $kindhouse = kindHouse::create([
            'kindOfHouse' => 'scratching post',
        ]);
        kindHouse::create([
            'kindOfHouse' => 'large cage',
        ]);
        kindHouse::create([
            'kindOfHouse' => 'small cage',
        ]);
        dump($kindhouse->kindOfHouse);


        $animals = Animal::all();
        $helpers = helper::all();
        foreach ($animals as $animal) {
            animalHelper::create([
                'animal_id' => $animal->id,
                'helper_id' => $helpers->random()->id
            ]);
        }

                return view('animals.index');
    }
}
