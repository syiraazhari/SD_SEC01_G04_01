<?php

namespace App\Http\Controllers\Admin\MPPAlumni;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Illuminate\Http\Request;

class MPPAlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('admin.mppalumni.index', compact('alumni'));
    }
}
