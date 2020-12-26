<?php

namespace App\Http\Controllers;

use App\Services\AlgaesService;
use Illuminate\Http\Request;

class AlgaesBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new AlgaesService();
    }
}
