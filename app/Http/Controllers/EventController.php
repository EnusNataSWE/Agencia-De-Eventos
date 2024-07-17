<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    use ImageUpload;
    public function index(Request $request)
    {
        $search = $request->search;
        $events =
            $request->has('search') ?
            Event::where('title', 'like', '%' . $search . '%')->get() :
            Event::all();

        return view('event.index', compact('events', 'search'));
    }

    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(StoreEventRequest $request, Event $event)
    {
        $event->fill(
            $request->safe()->except('image')
        );

        $event->image = $this->storageTreatment($request->image);
        $event->user_id = Auth::user()->getAuthIdentifier();

        $event->save();

        return redirect()
            ->route('index')
            ->with(['success' => 'Evento criado com sucesso']);
    }

    public function dashboard()
    {
        $events = Auth::user()->myEvents;

        foreach (Auth::user()->participatingEvents as $participatingEvent) {
            $events->push($participatingEvent);
        }
        return view('event.dashboard', compact('events'));
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return back()
            ->with(['success' => 'Evento deletado com sucesso']);
    }

    public function edit(Event $event)
    {
        return view('event.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {

        $data = $request->safe()->except('image');

        if ($request->image) {
            $data['image'] = $this->storageTreatment($request->image);
        }

        $event->update($data);

        return redirect()
            ->route('index')
            ->with(['success' => 'Evento atualizado com sucesso']);
    }

    public function participate(Event $event)
    {
        $event->participants()
            ->attach(Auth::user()->getAuthIdentifier());

        return back()
            ->with(['success' => 'Sua presença foi confirmada no evento']);
    }

    public function leave(Event $event)
    {
        $event->participants()
            ->detach(Auth::user()->getAuthIdentifier());

        return back()
            ->with(['success' => 'Sua presença foi removida do evento']);
    }
}