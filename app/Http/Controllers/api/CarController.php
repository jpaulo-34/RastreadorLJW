<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{

    public function index()
    {
        return Car::all();
    }


    public function store(Request $request)
    {
        Car::create($request->all());
    }


    public function show($id)
    {
        return Car::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
    }


    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
    }
}
