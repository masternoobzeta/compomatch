@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Motherboards</div>

                    <div class="card-body">

                        @if(count($motherboards))
                            @foreach($motherboards as $motherboard)
                                <a href="{{ url('motherboards/'.$motherboard->id) }}">{{$motherboard->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no motherboard found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection