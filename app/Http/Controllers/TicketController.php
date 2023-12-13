<?php

namespace App\Http\Controllers;
// TicketController.php
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
{
    $tickets = Ticket::all();
    return view('tickets.index', compact('tickets'));
}

public function create()
{
    return view('tickets.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'destination' => 'required',
        'price' => 'required',
    ]);

    Ticket::create($request->all());

    return redirect()->route('tickets.index')
        ->with('success', 'Ticket created successfully');
}
}

