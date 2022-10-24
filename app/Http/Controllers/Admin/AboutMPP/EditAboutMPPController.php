<?php

namespace App\Http\Controllers\Admin\AboutMPP;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class EditAboutMPPController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('admin.aboutmpp.edit.index', compact('about'));
    }

    public function edit(Request $request)
    {
        $about = new AboutUs;
        $about->content = $request->content;
        $about->save();
        return redirect('adminpanel/aboutmpp');
    }
}
