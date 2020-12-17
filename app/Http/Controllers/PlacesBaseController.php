<?php

namespace App\Http\Controllers;

use App\Services\PlacesService;
use Illuminate\Http\Request;

class PlacesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new PlacesService();
    }
}
