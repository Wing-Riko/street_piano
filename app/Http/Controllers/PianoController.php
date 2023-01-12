<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piano;

class PianoController extends Controller
{
    public function pianos(Piano $piano)
    {
        return view('pianos/pianos')->with(['pianos' => $piano->get()]);
    }
    
    public function events_role()
    {
        return view('events/events_role');
    }
    
    public function nextAction(Request $request)
    {
        //dd($request['role']);
        if ($request['role'] == 0) { 
            return view('events/events_player_piano');
        }else{
            return view('events/events_listener_piano');
        }
    }
    
    public function events_player_piano()
    {
        return view('events/events_player_piano'); //->with(['pianos' => $piano->get()]);
    }
    
    public function events_listener_piano()
    {
        return view('events/events_listener_piano');
    }
}
