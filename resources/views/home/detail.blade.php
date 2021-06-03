@extends('home.app')

@section('title', 'Detail')

@section('container')

    <div class="row py-5 px-5">
        <div class="col-lg-12">
            <div class="card">
                <img src="{{asset('img/bestseller.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                          <h5 class="card-title">Card title</h5>
                        </div>
                        <div class="col-lg-6">
                          <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="float-right">
                            <a href="" class="btn btn-primary  ">Go somewhere</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection