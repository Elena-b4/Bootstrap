<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Direction;
use App\Models\Train;
use Illuminate\Http\Request;

class DirectionsController extends Controller
{
    public function store()
    {
        $cities = [
            [
                'name' => 'Казань'
            ],
            [
                'name' => 'Нижний Новгород'
            ],
            [
                'name' => 'Москва'
            ],
            [
                'name' => 'Великий Новгород'
            ],
            [
                'name' => 'Санкт-Петербург'
            ],
            [
                'name' => 'Хабаровск'
            ],
            [
                'name' => 'Сургут'
            ],
            [
                'name' => 'Красноярск'
            ],
            [
                'name' => 'Тюмень'
            ],
            [
                'name' => 'Брянск'
            ],
            [
                'name' => 'Саратов'
            ],
            [
                'name' => 'Сочи'
            ],
            [
                'name' => 'Минск'
            ],
            [
                'name' => 'Мурманск'
            ],
            [
                'name' => 'Курск'
            ],
            [
                'name' => 'Магнитогорск'
            ],
            [
                'name' => 'Иркутск'
            ],
            [
                'name' => 'Пенза'
            ],
            [
                'name' => 'Псков'
            ],
            [
                'name' => 'Уфа'
            ],
            [
                'name' => 'Челябинск'
            ],
            [
                'name' => 'Ярославль'
            ],
        ];
        foreach ($cities as $city) {
            City::create($city);
        }
        $directions = [
            [
                'directionName' => 'Москва - Санкт-Петербург',
                'with_change' => 2,
            ],
            [
                'directionName' => 'Москва - Хабаровск',
                'with_change' => 2,
            ],
            [
                'directionName' => 'Казань - Нижний Новгород',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Великий Новгород - Сургут',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Красноярск - Брянск',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Тюмень - Саратов',
                'with_change' => 2,
            ],
            [
                'directionName' => 'Сочи - Минск',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Мурманск - Курск',
                'with_change' => 2,
            ],
            [
                'directionName' => 'Магнитогорск - Ярославль',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Иркутск - Челябинск',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Пенза - Уфа',
                'with_change' => 1,
            ],
            [
                'directionName' => 'Псков - Москва',
                'with_change' => 2,
            ],
            [
                'directionName' => 'Санкт-Петербург - Красноярск',
                'with_change' => 1,
            ],
        ];
        foreach ($directions as $direction) {
            Direction::create($direction);
        }
        $trains = [
            [
                'number' => 111,
                'direction_id' => 13,
            ],
            [
                'number' => 112,
                'direction_id' => 1,
            ],
            [
                'number' => 113,
                'direction_id' => 12,
            ],
            [
                'number' => 114,
                'direction_id' => 2,
            ],
            [
                'number' => 115,
                'direction_id' => 11,
            ],
            [
                'number' => 116,
                'direction_id' => 3,
            ],
            [
                'number' => 117,
                'direction_id' => 10,
            ],
            [
                'number' => 118,
                'direction_id' => 4,
            ],
            [
                'number' => 119,
                'direction_id' => 9,
            ],
            [
                'number' => 120,
                'direction_id' => 5,
            ],
            [
                'number' => 121,
                'direction_id' => 8,
            ],
            [
                'number' => 122,
                'direction_id' => 6,
            ],
            [
                'number' => 123,
                'direction_id' => 5,
            ],
        ];
        foreach ($trains as $train) {
            Train::create($train);
        }
        dump('created');
    }

    public function index()
    {
        $trains = Train::all();
        $cities = City::all();
        $directions = Direction::all();
        foreach ($trains as $train) {
            dump($train->number);
        }
        foreach ($cities as $city) {
            dump($city->name);
        }
        foreach ($directions as $direction) {
            dump($direction->directionName);
        }
    }

    public function show(Direction $direction)
    {
//        dd($direction->directionName);
        $cities = $direction->cities;

        dd($cities->count());
        foreach ($cities as $city) {

        }
        dd($direction->directionName);
    }

    public function update(Direction $direction)
    {
        $directionUpdated =
            [
                'directionName' => 'Уфа - Красноярск',
                'with_change' => 2,
            ];
        $direction->update($directionUpdated);
        dump('updated');
    }

    public function destroy(Direction $direction)
    {
        $direction->delete();
        dump('destroyed');
    }

}
