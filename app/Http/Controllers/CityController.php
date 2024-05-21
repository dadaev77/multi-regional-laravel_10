<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function redirectToCity(Request $request)
    {
        $city = session('city');
        if ($city) {
            return redirect("/$city", 301);
        }

        $cities = City::all();
        return view('select_city', compact('cities'));
    }

    public function selectCity($slug, Request $request)
    {
        $city = City::where('slug', $slug)->firstOrFail();
        session(['city' => $city->slug]);
        return redirect("/{$city->slug}");
    }

    public function showCity($slug, Request $request)
    {
        $city = City::where('slug', $slug)->firstOrFail();
        session(['city' => $city->slug]);

        $cities = City::all();
        return view('home', compact('cities', 'city'));
    }
}
