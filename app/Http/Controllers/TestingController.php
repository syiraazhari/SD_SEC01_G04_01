<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestingController extends Controller
{
    public function index()
    {
        return view('layouts.testing');
    }
}
