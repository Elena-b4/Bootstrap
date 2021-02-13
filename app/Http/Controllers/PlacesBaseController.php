<?php

namespace App\Http\Controllers;

use App\Services\PlacesService;

class PlacesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new PlacesService();
    }
}
