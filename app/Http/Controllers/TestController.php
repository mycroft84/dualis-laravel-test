<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\Answers;
use App\Models\Car;
use App\Models\Category;
use App\Models\Owner;
use App\Models\Question;
use App\Models\Thief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    public function index(Request $request)
    {
        /*$thief = new Thief();
        $thief->name = 'Thief 1';
        $thief->save();*/

        /*factory(Thief::class, 3)->create()->each(function ($u) {
            $u->cars()->saveMany(factory(Car::class,5)->make());
        });*/

        //$thief = Thief::where('name','LIKE','%Dr.%')->first();
        //$cars = $thief->cars()->orderBy('name')->get();

        factory(Category::class,5)->create()->each(function ($category){
             $category->questions()->saveMany(
                factory(Question::class,5)->create()->each(function ($question){
                    $question->answers()->saveMany(factory(Answers::class,5)->make());
                })
             );
        });

        /*return view('Test.cars',[
            'thief'=>$thief,
            'cars'=>$cars
        ]);*/
    }

    public function userStore(StoreUser $request)
    {
        dd($request->all());
    }
}
