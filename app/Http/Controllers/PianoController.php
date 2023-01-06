<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piano;

class PianoController extends Controller
{
    public function index(Piano $piano)
    {
        return view('pianos/index')->with(['pianos' => $piano->get()]);
    }
    
    public function role()
    {
        return view('events/role');
    }
}
