<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends ProductsBaseController
{
    public function store()
    {
        $this->service->storeProduct($this->getProducts());
        dd('created');
    }

    public function update(Product $product)
    {
        $this->service->updateProduct($product);
        dump('updated');
    }

    public function destroy(Product $product)
    {
        $this->service->destroyProduct($product);
        dump('destroyed');
    }

    public function show(Product $product)
    {
        $this->service->showProduct($product);
    }

    public function getProducts()
    {
        return [
            [
                'name' => 'Кола',
                'typeOfFood_id' => 2,
            ],
            [
                'name' => 'Шаурма',
                'typeOfFood_id' => 1,
            ],
            [
                'name' => 'Пончик',
                'typeOfFood_id' => 3,
            ],
            [
                'name' => 'Чизкейк',
                'typeOfFood_id' => 3,
            ],
            [
                'name' => 'Какао',
                'typeOfFood_id' => 2,
            ],
            [
                'name' => 'Пицца',
                'typeOfFood_id' => 1,
            ],
        ];
    }
}
