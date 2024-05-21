<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Store a newly created city in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cities,slug',
        ]);

        $city = City::create([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);

        return response()->json(['message' => 'City created successfully', 'city' => $city], 201);
    }

    /**
     * Remove the specified city from storage.
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();

        return response()->json(['message' => 'City deleted successfully'], 200);
    }
}
