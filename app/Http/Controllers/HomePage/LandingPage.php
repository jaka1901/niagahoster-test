<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Packages;

class LandingPage extends Controller
{
    public function index(){
        $data = Packages::all();
        // return $data;

        return view('landing-page/home', compact('data'));
    }
}
