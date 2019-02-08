@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hard drives</div>

                    <div class="card-body">

                        @if(count($harddrives))
                            @foreach($harddrives as $harddrive)
                                <a href="{{ url('harddrives/'.$harddrive->id) }}">{{$harddrive->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no harddrive found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection