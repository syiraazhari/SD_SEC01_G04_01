<?php

namespace App\Http\Controllers\Candidate\MPPAlumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPPAlumniController extends Controller
{
    public function index()
    {
        return view('candidate.mppalumni.index');
    }
}
