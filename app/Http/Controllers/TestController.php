<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $owner = Owner::find(1);
        $owner->delete();

        dd($owner);

        //return view('Test.index');
    }

    public function userStore(StoreUser $request)
    {
        dd($request->all());
    }
}
