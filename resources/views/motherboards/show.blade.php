@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Motherboard</div>

                    <div class="card-body">

                        <p>Name: {{$motherboard->name}}</p>
                        <p>Product code: {{$motherboard->productcode}}</p>
                        <p>Brand: {{$motherboard->brand}}</p>
                        <p>Socket: {{$motherboard->socket}}</p>
                        <p>Chipset: {{$motherboard->chipset}}</p>
                        <p>Size: {{$motherboard->size}}</p>

                        <a href="{{ url('motherboards/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection