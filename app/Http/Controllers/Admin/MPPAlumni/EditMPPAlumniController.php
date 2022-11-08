<?php

namespace App\Http\Controllers\Admin\MPPAlumni;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditMPPAlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();
        return view('admin.mppalumni.edit.index', compact('alumni'));
    }

    public function edit($id)
    {
        $about = Alumni::find($id);
        return view('admin.aboutmpp.edit.index', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = Alumni::find($id);
        $about->content= $request->input('content');
        $about->update();
        return redirect('adminpanel/mppalumni')->with('status', "About Us Updated Successfully");
    }
}
