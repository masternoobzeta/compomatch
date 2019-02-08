@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tower</div>

                    <div class="card-body">

                        <p>Name: {{$tower->name}}</p>
                        <p>Product code: {{$tower->productcode}}</p>
                        <p>Brand: {{$tower->brand}}</p>
                        <p>Color: {{$tower->color}}</p>
                        <p>Width: {{$tower->width}}</p>
                        <p>Height: {{$tower->height}}</p>
                        <p>Depth: {{$tower->depth}}</p>

                        <a href="{{ url('towers/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection