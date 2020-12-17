<?php


namespace App\Services;


use App\Models\Product;

class ProductsService
{
    public function storeProduct($products)
    {
        foreach ($products as $product) {
            Product::create($product);
        }
    }

    public function destroyProduct(Product $product)
    {
        $product->delete();
    }

    public function updateProduct(Product $product)
    {
        $product->update([
            'name' => 'Фанта',
            'typeOfFood_id' => 2,
        ]);
    }

    public function showProduct(Product $product)
    {
        dump($product->name);
    }
}
