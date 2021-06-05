<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function ticket(){
        return view('admin.ticket');
    }

    public function list(){
        return view('admin.list');
    }

    public function user(){
        return view('admin.user');
    }

        public function create(){
        return view('admin.create');
    }

    public function store (Request $request)
    {
        $ambil = $request->pict;
        $gambarbaru = time() . rand(100, 999) . "." . $ambil->getClientOriginalExtension();

        $tanggal =  date('y-m-d', strtotime($request->date));
        
        $ticket = new Ticket;
        $ticket->name = $request->name;
        $ticket->day = $request->day;
        $ticket->date = $tanggal;
        $ticket->jam_mulai = $request->jam_mulai;
        $ticket->jam_selesai = $request->jam_selesai;
        $ticket->price = $request->price;
        $ticket->discount = $request->discount;
        $ticket->stock = $request->stock;
        $ticket->desc = $request->desc;
        $ticket->pict = $gambarbaru;
        $ambil->move(public_path() . '/img/ticket', $gambarbaru);
        $ticket->save();

        return redirect ('/ticket');
    }

    public function edit(){
        return view('admin.edit');
    }
}
