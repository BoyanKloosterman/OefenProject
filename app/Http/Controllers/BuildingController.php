<?php

namespace App\Http\Controllers;
use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function dashboard()
    {
        $buildings = Building::all();
        return view('dashboard', ['buildings' => $buildings]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $building = new Building();
        $building->name = $request->name;
        $building->save();
        return redirect()->route('dashboard');
    }
}
