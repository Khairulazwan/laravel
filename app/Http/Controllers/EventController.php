<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRequest;
use Illuminate\Http\Request;
use Gate;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('events.index',compact('events'))->with('i',(request()->input('page',1)-1)*10);
    }
    
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'eveName'=>'required',
            'eveLocation'=>'required',
            'eveType'=>'required',
            'eveDate'=>'required',
            'eveStartAt'=>'required',
            'eveEndAt'=>'required',
            'eveOrganizer'=>'required',
            'eveStatus'=>'required',
        ]);

        Event::create($request->all());

        return redirect()->route('events.index')->with('success','Events created successfully.');
    }

    public function show(Request $request, Event $event)
    {
        $event_request = EventRequest::where('eveId', $event->id)->get();
        return view('events.show',compact('event_request'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function accept(Event $event)
    {
        $event_request = EventRequest::where('id', $event->id)->get();
        return view('events.accept',compact('event_request'));
    }

    public function acceptConfirm(Request $request, Event $event)
    {
        $event_request = EventRequest::where('id', $event->id)->update(array('accessStatus' => "ACCEPTED"));
    
        return redirect()->route('events.index')->with('success','User has been accepted successfully');
    }


    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([

            ]);
    
            $event->update($request->all());
    
            return redirect()->route('events.index')->with('success','Event updated successfully');
    }


    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success','Event deleted successfully');
    }
}
