@extends('home.app')

@section('title', 'Mahardika Ticket')

@section('container')

<style>
    .bg-head{
        background-image: url('img/header.jpg');
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover; 
    }
</style>


<!-- Best Sell -->
<div class="bg-head pt-5 pb-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="best text-center pb-3">Best Seller</h1>
            </div>
            @foreach ($random as $acak)
            <div class="col-4">
                <img src="{{ asset('img/ticket/'.$acak->pict)}}" width="300" alt="Best Seller">
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Content -->

@foreach ($tickets as $ticket)
<div class="container mb-4">
    <div class="card">
        <div class="row">
            <div class="col-lg-3">
                <img class="card-img" src="{{ asset('img/ticket/'.$ticket->pict)}}" width="300" alt="Ticket">
            </div>
            <div class="col-lg-6">
                <a href="{{url('detail')}}/{{$ticket->id}}">
                    <h1 class="title"><strong>{{$ticket->name}}</strong></h1>
                </a>
                <p class="jadwal"><strong class="orange">{{$ticket->day}}</strong> {{$ticket->date}}</p>
                <p class="orange"><strong>{{$ticket->jam_mulai}} - {{$ticket->jam_selesai}}</strong></p>
            </div>
            <div class="col-lg-3">
                <p class="text-decoration-line-through orange text-end"><strong>{{number_format($ticket->price)}}</strong></p>
                <h3 class="text-end"><strong>{{number_format($ticket->discount)}}</strong></h3>
            </div>
        </div>
    </div>
</div>
@endforeach






@endsection