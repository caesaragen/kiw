<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class HomeController extends Controller
{
    public function index() 
    {

        $sponsors = Sponsor::all();
        // dd($sponsors);
        return view('home')->with('sponsors', $sponsors);
    }
}
