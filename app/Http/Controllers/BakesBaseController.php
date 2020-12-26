<?php

namespace App\Http\Controllers;

use App\Services\BakesService;
use Illuminate\Http\Request;

class BakesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new BakesService();
    }
}
