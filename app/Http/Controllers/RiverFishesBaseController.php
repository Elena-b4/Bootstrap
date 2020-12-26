<?php

namespace App\Http\Controllers;

use App\Services\RiverFishesService;
use Illuminate\Http\Request;

class RiverFishesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new RiverFishesService();
    }
}
