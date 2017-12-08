<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quize;
use Illuminate\Http\Request;

class QuizeController extends Controller
{
    public function index()
    {
        //$quize = (new Quize())->createQuize();


        $quize = (new Quize())->where('id',2)->first();
        return new \App\Http\Resources\Quize($quize);
    }

    public function result(Quize $quize,Request $request)
    {
        return $quize->getResult($request->get('ids'));
    }
}
