<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function about(Request $request, $slug = null)
    {
        $slug = $slug ?: Session::get('city');
        $city = City::where('slug', $slug)->firstOrFail();
        return view('about', compact('city'));
    }

    public function news(Request $request, $slug = null)
    {
        $slug = $slug ?: Session::get('city');
        $city = City::where('slug', $slug)->firstOrFail();
        return view('news', compact('city'));
    }
}
