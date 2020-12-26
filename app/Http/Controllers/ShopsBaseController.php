<?php

namespace App\Http\Controllers;

use App\Services\ShopsService;
use Illuminate\Http\Request;

class ShopsBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new ShopsService();
    }
}
