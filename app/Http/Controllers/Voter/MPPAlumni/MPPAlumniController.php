<?php

namespace App\Http\Controllers\Voter\MPPAlumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPPAlumniController extends Controller
{
    public function index()
    {
        return view('voter.mppalumni.index');
    }
}
