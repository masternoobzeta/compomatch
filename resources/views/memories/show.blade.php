@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Memory</div>

                    <div class="card-body">

                        <p>name: {{$memory->name}}</p>
                        <p>product code: {{$memory->productcode}}</p>
                        <p>Brand: {{$memory->brand}}</p>
                        <p>Size: {{$memory->size}}</p>
                        <p>Storage: {{$memory->storage}}</p>
                        <p>Speed: {{$memory->speed}}</p>

                        <a href="{{ url('memories/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection