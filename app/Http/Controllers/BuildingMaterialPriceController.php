<?php

namespace App\Http\Controllers;

use App\Models\BuildingMaterialPrice;
use Illuminate\Http\Request;

class BuildingMaterialPriceController extends Controller
{
    public function index()
    {
        $prices = BuildingMaterialPrice::latest()->get();
        return view('building_material_prices.index', compact('prices'));
    }

    public function create()
    {
        return view('building_material_prices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'percentage_change' => 'required|numeric',
            'trend' => 'required|in:up,down,no_change',
            'date' => 'required|date',
        ]);

        BuildingMaterialPrice::create($request->all());
        return redirect()->route('building_material_prices.index')->with('success', 'Амжилттай нэмлээ!');
    }

    public function edit(BuildingMaterialPrice $buildingMaterialPrice)
    {
        return view('building_material_prices.edit', compact('buildingMaterialPrice'));
    }

    public function update(Request $request, BuildingMaterialPrice $buildingMaterialPrice)
    {
        $request->validate([
            'material_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'percentage_change' => 'required|numeric',
            'trend' => 'required|in:up,down,no_change',
            'date' => 'required|date',
        ]);

        $buildingMaterialPrice->update($request->all());
        return redirect()->route('building_material_prices.index')->with('success', 'Амжилттай шинэчлэгдлээ!');
    }

    public function destroy(BuildingMaterialPrice $buildingMaterialPrice)
    {
        $buildingMaterialPrice->delete();
        return redirect()->route('building_material_prices.index')->with('success', 'Амжилттай устгалаа!');
    }
}