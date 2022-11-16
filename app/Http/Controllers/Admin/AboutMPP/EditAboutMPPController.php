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

    public function edit($id)
    {
        $about = AboutUs::find($id);
        return view('admin.aboutmpp.edit.index', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = AboutUs::find($id);
        $about->content= $request->input('content');
        $about->update();
        return redirect('adminpanel/aboutmpp')->with('status', "About Us Updated Successfully");
    }
}
