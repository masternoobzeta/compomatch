@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Videocards</div>

                    <div class="card-body">

                        @if(count($videocards))
                            @foreach($videocards as $videocard)
                                <a href="{{ url('videocards/'.$videocard->id) }}">{{$videocard->name}}</a><hr>
                            @endforeach
                        @else
                            <h3>no videocard found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection