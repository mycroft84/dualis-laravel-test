<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStore;
use App\Http\Requests\ThiefStore;
use App\Models\Car;
use App\Models\Thief;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->get('term');
        $orderDir = $this->getOrderDir($request->get('orderDir'));

        $thieves = $this->searchCars($term,$request->get('orderDir'),$request->get('order','name'));

        return view('Cars.index',[
            'cars'=>$thieves,
            'term'=>$term,
            'orderDir'=>$orderDir
        ]);
    }

    protected function getOrderDir($dir)
    {
        if (!$dir) return 'asc';

        return ($dir == 'asc') ? 'desc' : 'asc';
    }

    protected function searchCars($term,$orderDir,$order)
    {
        if (!$term) return Car::orderBy($order,$orderDir)->with('thief')->get();

        return Car::where('name','LIKE','%'.$term.'%')->with('thief')->orderBy($order,$orderDir)->get();
    }

    public function create()
    {
        return view('Cars.create',[
            'thieves'=>$this->getThieves()
        ]);
    }

    public function update(Car $car)
    {
        return view('Cars.create',[
            'car'=>$car,
            'thieves'=>$this->getThieves()
        ]);
    }

    public function getThieves()
    {
        return Thief::all();
    }

    public function store(CarStore $request,Car $car = null)
    {
        if (!$car) {
            $car = new Car();
        }
        $car->name = $request->get('name');
        $car->thief_id = $request->get('thief_id');
        $car->save();

        return redirect(route('carsIndex'));
    }

    public function delete(Car $car)
    {
        $car->delete();

        return ['error'=>false];
    }
}
