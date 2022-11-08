<?php

namespace App\Http\Controllers;

use App\Models\Checkbox;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function store(Request $request)
    {
        $checkbox = new Checkbox;
        $checkbox->name = $request->name;
        $checkbox->category = $request->category;
        $checkbox->save();
        // $input = $request->all();
        // $input['category'] = $request->input('category');
        // Checkbox::create($input);
        return redirect('voter/votingpage/votingahibs');
    }
}
