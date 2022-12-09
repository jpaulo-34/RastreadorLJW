<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localization;

class LocalizationController extends Controller
{
    public function index()
    {
        return Localization::all();
    }


    public function store(Request $request)
    {
        Localization::create($request->all());
    }


    public function show($id)
    {
        return Localization::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
        $car = Localization::findOrFail($id);
        $car->update($request->all());
    }


    public function destroy($id)
    {
        $car = Localization::findOrFail($id);
        $car->delete();
    }
}
