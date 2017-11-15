<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThiefStore;
use App\Models\Thief;
use Illuminate\Http\Request;

class ThievesController extends Controller
{
    public function index()
    {
        $thieves = Thief::all();

        return view('Thieves.index',[
            'thieves'=>$thieves
        ]);
    }

    public function create()
    {
        return view('Thieves.create');
    }

    public function update(Thief $thief)
    {
        return view('Thieves.create',[
            'thief'=>$thief
        ]);
    }

    public function store(ThiefStore $request)
    {
        $thief = new Thief();
        $thief->name = $request->get('name');
        $thief->save();

        return redirect(route('thievesIndex'));
    }
}
