<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Setting;
use App\Models\Experience;
use App\Models\Profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::get()->last();
        $experience = Experience::get();
        $education = Education::get();
        $setting = Setting::first();
        return view('home.index', compact('profile', 'experience', 'education', 'setting'));
    }

}
