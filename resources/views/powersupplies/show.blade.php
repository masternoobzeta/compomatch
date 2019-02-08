@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Power supply</div>

                    <div class="card-body">

                        <p>Name: {{$powersupply->name}}</p>
                        <p>Product code: {{$powersupply->productcode}}</p>
                        <p>Brand: {{$powersupply->brand}}</p>
                        <p>Wattage: {{$powersupply->wattage}}</p>

                        <a href="{{ url('powersupplies/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection