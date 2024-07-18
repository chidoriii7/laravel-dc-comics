<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){

        $comics = Comics::all();

        return view('layouts.demo.comics', compact('comics'));

    }
}
