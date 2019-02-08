@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CPU's</div>

                    <div class="card-body">

                        @if(count($cpus))
                            @foreach($cpus as $cpu)
                                <a href="{{ url('cpus/'.$cpu->id) }}">{{$cpu->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no cpu found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection