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
            <div class="col-4">
                <img src="{{asset('img/bestseller.jpg')}}" width="300" alt="sdaasdsad">
            </div>
            <div class="col-4">
                <img src="{{asset('img/bestseller.jpg')}}" width="300" alt="sdaasdsad">
            </div>
            <div class="col-4">
                <img src="{{asset('img/bestseller.jpg')}}" width="300" alt="sdaasdsad">
            </div>
        </div>
    </div>
</div>

<!-- Content -->

<div class="container mb-4">
    <div class="card">
        <div class="row">
            <div class="col-lg-3">
                <img class="card-img" src="{{asset('img/bestseller.jpg')}}" width="300" alt="">
            </div>
            <div class="col-lg-6">
                <h1>Vehicula ut at.</h1>
                <p><strong>Senin</strong> 15-12-2020</p>
                <p><strong>18 : 00 - 23 : 00</strong> </p>
            </div>
            <div class="col-lg-3 justify-content-end">
                <p class="text-decoration-line-through text-end"><strong>Rp. 50.000,-</strong></p>
                <h5 class="text-end"><strong>Rp. 20.000,-</strong></h5>
            </div>
        </div>
    </div>
</div>






@endsection