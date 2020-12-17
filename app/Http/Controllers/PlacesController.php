<?php

namespace App\Http\Controllers;

use App\Models\Place;


class PlacesController extends PlacesBaseController
{
    public function index()
    {
        $places = Place::all();
        foreach ($places as $place) {
            foreach ($place->products as $product) {
                dd($product->typeOfFood_id);
            }
        }
    }

    public function store()
    {

        $this->service->storePlace($this->getPlaces());
        dd('created');
    }
    public function update(Place $place)
    {
        $this->service->updatePlace($place);

        dd('updated');
    }

    public function show(Place $place)
    {
        $this->service->showPlace($place);
    }

    public function destroy(Place $place)
    {
       $this->service->destroyPlace($place);
        dump('destroyed');
    }

    public function getPlaces()
    {
        return [
            ['address' => 'пр-т Независимости 142'],
            ['address' => 'ТЦ DanaMall'],
            ['address' => 'ТЦ Рига'],
            ['address' => 'ТЦ Галарея'],
            ['address' => 'пр-т Партизанский 192'],
            ['address' => 'ул. Немига 3'],
        ];
    }



}
