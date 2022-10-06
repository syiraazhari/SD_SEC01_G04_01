<?php

namespace App\Http\Controllers\Admin\MPPAlumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPPAlumniController extends Controller
{
    public function index()
    {
        return view('admin.mppalumni.index');
    }
}
