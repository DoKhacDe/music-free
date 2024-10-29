<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('home.index')->with(['customers' => $customers]);
    }

    public function show(Request $request)
    {
        $slug = $request->slug;
        $profile = Customer::where('slug', $slug)->first();
        return view('home.music')->with([
            'profile' => $profile ?? null,
        ]);
    }

    public function search(Request $request)
    {
        $slug = $request->slug;

        $profile = Customer::where('slug', $slug)->first();
        return view('home.search')->with([
            'profile' => $profile ?? null,
        ]);
    }
}
