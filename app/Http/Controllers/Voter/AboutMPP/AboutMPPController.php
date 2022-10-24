<?php

namespace App\Http\Controllers\Voter\AboutMPP;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMPPController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('voter.aboutmpp.index', compact('about'));
    }
}
