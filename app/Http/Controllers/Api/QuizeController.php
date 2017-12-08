<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quize;

class QuizeController extends Controller
{
    public function index()
    {
        //$quize = (new Quize())->createQuize();


        $quize = (new Quize())->where('id',2)->first();
        return $quize->getForJson()->toArray();
    }

}
