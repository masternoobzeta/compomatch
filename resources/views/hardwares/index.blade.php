@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hardwares</div>

                    <div class="card-body">

                        @if(count($hardwares))
                            @foreach($hardwares as $hardware)
                                <a href="{{ url('hardwares/'.$hardware->id) }}">{{$hardware->name}}</a>
                                <p>Made by {{$hardware->user->name}}</p><hr>
                            @endforeach
                        @else
                            <h3>no hardware found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection