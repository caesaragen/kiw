<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    // store a new sponsor
    public function store ($request){
        Sponsor::store($request);
    }
}
