<?php

namespace App\Http\Controllers;

use App\Services\SeaFishesService;
use Illuminate\Http\Request;

class SeaFishesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new SeaFishesService();
    }
}
