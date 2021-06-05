<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class HomeController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $random = Ticket::all()->random(3);

        return view ('home.index', compact('random', 'tickets'));
    }

    public function detail($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        return view ('home.detail', compact('ticket'));
    }
}
