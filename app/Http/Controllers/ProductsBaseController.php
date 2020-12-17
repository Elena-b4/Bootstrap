<?php

namespace App\Http\Controllers;

use App\Services\ProductsService;
use Illuminate\Http\Request;

class ProductsBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new ProductsService();
    }
}
