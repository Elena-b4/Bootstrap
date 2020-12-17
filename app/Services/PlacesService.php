<?php


namespace App\Services;


use App\Models\Place;

class PlacesService
{
    public function storePlace($places)
    {
        foreach ($places as $place) {
            Place::create($place);
        }
    }

    public function updatePlace(Place $place)
    {
            $placeUpdated =
                [
                    'address' => 'пр-т Держинского 39'
                ];
            $place->update($placeUpdated);
    }

    public function destroyPlace(Place $place)
    {
        $place->delete();
    }

    public function showPlace(Place $place)
    {
        foreach ($place->products as $product) {
            dump($product->name);
        }
    }
}
