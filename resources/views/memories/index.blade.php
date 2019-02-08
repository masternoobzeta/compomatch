@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Memories</div>

                    <div class="card-body">

                        @if(count($memories))
                            @foreach($memories as $memory)
                                <a href="{{ url('memories/'.$memory->id) }}">{{$memory->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no memory found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection