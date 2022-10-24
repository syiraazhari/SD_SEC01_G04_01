<?php

namespace App\Http\Controllers\Admin\AboutMPP;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutMPPController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('admin.aboutmpp.index', compact('about'));
    }
}
