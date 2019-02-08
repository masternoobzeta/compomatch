@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cpu</div>

                    <div class="card-body">

                        <p>Name: {{$cpu->name}}</p>
                        <p>Product code: {{$cpu->productcode}}</p>
                        <p>Brand: {{$cpu->brand}}</p>
                        <p>Code name: {{$cpu->codename}}</p>
                        <p>Core: {{$cpu->core}}</p>
                        <p>Socket: {{$cpu->socket}}</p>

                        <a href="{{ url('cpus/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection