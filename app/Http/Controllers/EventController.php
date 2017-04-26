<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Event;

use Illuminate\Support\Collection;

class EventController extends Controller
{
    
    public function allEvents(Request $request)
    {
        $events = Event::all();
        foreach  ($events as $event) {
            $user = User::where('id', $event->user_id)->first();
            $event->user = $user;
        }
        return view('events', compact('events'));
    }
    
    public function newEvent(Request $request)
    {
        
        if (\Auth::user())
        {
            return view('new-event');
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function goToEditEvent(Request $request, Event $event)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $event->user_id || \Auth::user()->isAdmin()))
        {
            return view('edit-event', compact('event'));
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function editEvent(Request $request, Event $event)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $event->user_id || \Auth::user()->isAdmin()))
        {
            if (strlen($request->title) > 0) {
                $event->title = $request->title;
            }
            
            if (strlen($request->description) > 0) {
                $event->description =  $request->description;
            }
            
            if (strlen($request->date) > 0) {
                $event->date =  $request->date;
            }

            if (strlen($request->time) > 0) {
                $event->time =  $request->time;
            }
            
            if (strlen($request->location) > 0) {
                $event->location =  $request->location;
            } 
            
            $event->save();
            
            return redirect('events');
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function addEvent(Request $request)
    {
        
        $event = new Event;
        
        if(\Auth::user())
        {

            if (strlen($request->title) > 0) {
                $event->title = $request->title;
            }
            
            if (strlen($request->description) > 0) {
                $event->description =  $request->description;
            }
            
            if (strlen($request->date) > 0) {
                $event->date =  $request->date;
            }

            if (strlen($request->time) > 0) {
                $event->time =  $request->time;
            }
            
            if (strlen($request->location) > 0) {
                $event->location =  $request->location;
            } 
            
            $event->user_id = \Auth::user()->id;
            
            $event->save();
            
            return redirect('events');
        }
        else
        {
            return redirect('access-denied');
        }
        
    }

}
