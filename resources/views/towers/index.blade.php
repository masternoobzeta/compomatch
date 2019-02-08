@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Towers</div>

                    <div class="card-body">

                        @if(count($towers))
                            @foreach($towers as $tower)
                                <a href="{{ url('towers/'.$tower->id) }}">{{$tower->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no tower found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection