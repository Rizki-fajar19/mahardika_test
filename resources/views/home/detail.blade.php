@extends('home.app')

@section('title', 'Detail')

@section('container')

    <div class="row py-5 px-5">
        <div class="col-lg-12">
            <div class="card">
                <img src="{{ asset('img/ticket/'.$ticket->pict)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                          <h5 class="card-title">{{$ticket->name}}</h5>
                          <p><strong>{{$ticket->day}}</strong> {{$ticket->date}}</p>
                          <p><strong>{{$ticket->jam_mulai}} - {{$ticket->jam_selesai}}</strong></p>
                        </div>
                        <div class="col-lg-6">
                          <h5 class="card-title text-decoration-line-through orange text-end">{{number_format($ticket->price)}}</h5>
                          <h3 class="text-end text-right"><strong>{{number_format($ticket->discount)}}</strong></h3>
                        </div>
                    </div>
                    <p class="card-text">{{$ticket->desc}}</p>
                        <div class="float-right">
                            <a href="" class="btn btn-success  ">Booking Ticket</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection