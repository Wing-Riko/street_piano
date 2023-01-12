<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piano;
use App\Models\Event;

class EventController extends Controller
{
    public function events_role()
    {
        return view('events/events_role');
    }
    
    public function events_role_piano(Request $request, Piano $piano)
    {
        //dd($request['role']);
        if ($request['role'] == 0) { 
            return view('events/events_player_piano')->with(['pianos' => $piano->get()]);
        }else{
            return view('events/events_listener_piano')->with(['pianos' => $piano->get()]);
        }
    }
    
    public function events_role_piano_datetime(Request $request)
    {
        return view('events/events_role_piano_datetime');
    }
    
    public function recorded()
    {
        return view('events/recorded');
    }
    
}
