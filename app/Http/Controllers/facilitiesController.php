<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facilitiesController extends Controller
{
    public function index()
    {
        return view('facilities');
    }
}