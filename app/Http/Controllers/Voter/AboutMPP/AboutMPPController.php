<?php

namespace App\Http\Controllers\Voter\AboutMPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutMPPController extends Controller
{
    public function index()
    {
        return view('voter.aboutmpp.index');
    }
}
