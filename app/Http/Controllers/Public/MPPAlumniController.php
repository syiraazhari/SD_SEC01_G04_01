<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPPAlumniController extends Controller
{
    public function index()
    {
        return view('public.mppalumni.index');
    }
}
