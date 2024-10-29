<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('home.index')->with(['profiles' => $profiles]);
    }

    public function show(Request $request)
    {
        $slug = $request->slug;
        $profile = Profile::where('slug', $slug)->first();
        return view('home.music')->with([
            'profile' => $profile ?? null,
        ]);
    }

    public function search(Request $request)
    {
        $slug = $request->slug;

        $profile = Profile::where('slug', $slug)->first();
        return view('home.search')->with([
            'profile' => $profile ?? null,
        ]);
    }
}
