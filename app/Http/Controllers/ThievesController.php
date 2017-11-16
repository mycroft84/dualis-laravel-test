<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThiefStore;
use App\Models\Thief;
use Illuminate\Http\Request;

class ThievesController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->get('term');
        $orderDir = $this->getOrderDir($request->get('orderDir'));

        $thieves = $this->searchThief($term,$request->get('orderDir'));

        return view('Thieves.index',[
            'thieves'=>$thieves,
            'term'=>$term,
            'orderDir'=>$orderDir
        ]);
    }

    protected function getOrderDir($dir)
    {
        if (!$dir) return 'asc';

        return ($dir == 'asc') ? 'desc' : 'asc';
    }

    protected function searchThief($term,$orderDir)
    {
        if (!$term) return Thief::orderBy('name',$orderDir)->get();

        return Thief::where('name','LIKE','%'.$term.'%')->orderBy('name',$orderDir)->get();
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
