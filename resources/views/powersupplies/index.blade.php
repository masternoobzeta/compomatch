@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Power supplies</div>

                    <div class="card-body">

                        @if(count($powersupplies))
                            @foreach($powersupplies as $powersupply)
                                <a href="{{ url('powersupplies/'.$powersupply->id) }}">{{$powersupply->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no power supply found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection