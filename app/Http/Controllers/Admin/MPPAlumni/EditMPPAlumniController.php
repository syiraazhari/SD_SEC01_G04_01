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
        $alumni = Alumni::find($id);
        return view('admin.mppalumni.edit.index', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);
        $alumni->content= $request->input('content');
        $alumni->update();
        return redirect('adminpanel/mppalumni')->with('status', "MPP Alumni Updated Successfully");
    }
}
