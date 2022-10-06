<?php

namespace App\Http\Controllers\Candidate\AboutMPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutMPPController extends Controller
{
    public function index()
    {
        return view('candidate.aboutmpp.index');
    }
}
