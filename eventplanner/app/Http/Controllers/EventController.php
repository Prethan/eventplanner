<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        return view('event.index');
    }

    public function show(Event $event)
    {
        return view('event.show', [
            'event' => $event
        ]);
    }

    public function reservation(event $event)
    {
        return view('event.reservation', [
            'event' => $event
        ]);
    }
}
