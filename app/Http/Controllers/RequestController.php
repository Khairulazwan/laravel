<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRequest;
use Illuminate\Http\Request;
use Gate;

class RequestController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('requestEvent.index',compact('events'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function create(Event $event)
    {
        return view('requestEvent.create',compact('event'));
    }

    public function store(Request $request)
    {
        $request->input('eveId');
        $request->input('name');
        $request->input('email');
        $request->input('eveName');
        $request->input('eveLocation');
        $request->input('eveType');
        $request->input('eveDate');
        $request->input('eveStartAt');
        $request->input('eveEndAt');
        $request->input('eveOrganizer');
        $request->input('eveStatus');

        EventRequest::create($request->all());

        return redirect()->route('requestEvent.index')->with('success','You have joined successfully.');
    }

    public function show(Event $event)
    {
        return view('requestEvent.show',compact('event'));
    }

    public function viewRequest()
    {
        $event_request = EventRequest::latest()->paginate(10);
        return view('requestEvent.viewRequest',compact('event_request'))->with('i',(request()->input('page',1)-1)*10);
        
    }

    public function edit(Event $event)
    {
        return view('requestEvent.edit',compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([

            ]);
    
            $event->update($request->all());
    
            return redirect()->route('requestEvent.index')->with('success','Event updated successfully');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('requestEvent.index')->with('success','Event deleted successfully');
    }
}
