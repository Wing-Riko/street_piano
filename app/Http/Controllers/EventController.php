<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Piano;
use App\Models\Event;

class EventController extends Controller
{
    public function events(Event $event){
        return view('events/events')->with(['events' => $event->get()]);
    }
    
    
    public function events_role(Request $request)
    {
        return view('events/events_role');
    }
    
    public function events_role_piano(Request $request, Piano $piano)
    {
        $request->session()->put('role', $request['role']);
        if ($request['role'] == 0) { 
            return view('events/events_player_piano')->with(['pianos' => $piano->get(), 'role' => $request['role']]);
        }else{
            return view('events/events_listener_piano')->with(['pianos' => $piano->get(), 'role' => $request['role']]);
        }
    }
    
    public function events_role_piano_datetime(Request $request, Event $event)
    {
        dd($event->where('datetime', '2023-01-22T23:00')->get()->count());
        $request->session()->put('piano_id', $request['piano_id']);
        return view('events/events_role_piano_datetime')->with(['role' => $request['role'], 'piano_id' => $request['piano_id']]);
    }
    
    // public function recorded()
    // {
    //     return view('events/recorded');
    // }
    
    public function events_confirm(Request $request)
    {
        //dd($request['event']);
        $request->session()->put('datetime', $request['datetime']);
        return view('events/events_confirm')->with(['role' => $request['role'], 'piano_id' => $request['piano_id'], 'datetime' => $request['datetime']]);
    }
    
    public function recorded(Request $request, Event $event)
    {
        //$requestTypeChenge['event'] = array('role'=>null, 'piano_id'=>null, 'datetime'=>null);
        //$requestTypeChenge['event']['role'] = intval($request['event']['role']);
        //$requestTypeChenge['event']['piano_id'] = intval($request['event']['piano_id']);
        //$requestTypeChenge['event']['datetime'] = $request['event']['datetime'];
        $value1 = $request->session()->get('role');
        $value2 = $request->session()->get('piano_id');
        $value3 = $request->session()->get('datetime');
        
        $role = intval($value1);
        $event->role=$role;
        
        $piano_id = intval($value2);
        $event->piano_id=$piano_id;
        
        $event->datetime=$value3;
        $event->user_id = Auth::id();
        //dd($event);
        $event->save();
        
        //dd($request->session()->all());
        // $input = $requestTypeChenge['event'];
        // //dd($requestTypeChenge['event']);
        // $input['user_id'] = Auth::id();
        // //dd($input);
        // $event->fill($input)->save();
        return view('events/recorded');
    }
    
}
