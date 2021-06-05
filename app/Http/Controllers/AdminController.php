<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function ticket(){

        $i = 0;
        $i++;
        $tickets = Ticket::paginate(10);
        return view ('admin.ticket', compact('tickets','i'));
    }

    public function list(){
        return view('admin.list');
    }

    public function user(){
        $i = 0;
        $i++;
        $users = User::paginate(10);
        return view ('admin.user', compact('users','i'));
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

    public function edit($id){
        $ticket = Ticket::find($id);
        return view('admin.edit', compact('ticket'));
    }

    public function update (Request $request, $id)
    {
        $update = Ticket::findorfail($id);
        $gambar = $update->gambar;
        if ($request['pict'] != null) {

            $request->pict->move(public_path() . '/img/ticket', $gambar);
        }

        $ticket = [
            'name' => $request['name'],
            'day' => $request['day'],
            'date' => $request['date'],
            'jam_mulai' => $request['jam_mulai'],
            'jam_selesai' => $request['jam_selesai'],
            'price' => $request['price'],
            'discount' => $request['discount'],
            'stock' => $request['stock'],
            'desc' => $request['desc'],
            'pict' => $gambar,

        ];
        $update->update($ticket);
        return redirect ('/ticket');
    }

    public function hapusdata($id)
    {
        $Ticket = Ticket::find($id);
        $Ticket->delete();
        return redirect('/ticket');
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
