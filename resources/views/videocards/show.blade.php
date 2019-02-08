@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Videocard</div>

                    <div class="card-body">

                        <p>Name: {{$videocard->name}}</p>
                        <p>Product code: {{$videocard->productcode}}</p>
                        <p>Brand： {{$videocard->brand}}</p>
                        <p>GPU： {{$videocard->gpu}}</p>
                        <p>Serie： {{$videocard->serie}}</p>
                        <p>Memory： {{$videocard->memory}}</p>

                        <a href="{{ url('videocards/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection