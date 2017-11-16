<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThiefStore;
use App\Models\Thief;
use Illuminate\Http\Request;

class ThievesController extends Controller
{
    public function index(Request $request)
    {
        dd($request->get('term'));

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

    public function store(ThiefStore $request,Thief $thief = null)
    {
        if (!$thief) {
            $thief = new Thief();
        }
        $thief->name = $request->get('name');
        $thief->save();

        return redirect(route('thievesIndex'));
    }
}
