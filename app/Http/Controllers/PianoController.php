<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piano;

class PianoController extends Controller
{
    public function pianos(Piano $piano)
    {
        dd($piano::count());
        return view('pianos/pianos')->with(['pianos' => $piano->get()]);
    }
    
}
