@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hard drive</div>

                    <div class="card-body">

                        <p>Name: {{$harddrive->name}}</p>
                        <p>Product code: {{$harddrive->productcode}}</p>
                        <p>Brand: {{$harddrive->brand}}</p>
                        <p>Type: {{$harddrive->type}}</p>
                        <p>Size: {{$harddrive->size}}</p>
                        <p>Storage: {{$harddrive->storage}}</p>

                        <a href="{{ url('harddrives/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection