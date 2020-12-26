<?php

namespace App\Http\Controllers;

use App\Services\SeafoodsService;
use Illuminate\Http\Request;

class SeafoodsBaseController extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new SeafoodsService();
    }
}
