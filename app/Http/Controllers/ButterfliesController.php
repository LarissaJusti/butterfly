<?php

namespace App\Http\Controllers;
use App\Models\Butterfly;
use Illuminate\Http\Request;

class ButterfliesController extends Controller
{
    public function index ()
    {
        $butterflies = Butterfly::all();
        return view('butterflies.index', compact('butterflies'));
    }
}
