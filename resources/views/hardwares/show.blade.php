@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">hardware</div>

                    <div class="card-body">

                        <p>name: {{$hardware->name}}</p>
                        <p>motherboard: <a href="{{ url('motherboards/'.$hardware->motherboard_id) }}">{{$hardware->motherboard->name}}</a></p>
                        <p>tower: <a href="{{ url('towers/'.$hardware->tower_id) }}">{{$hardware->tower->name}}</a></p>
                        <p>powersupply: <a href="{{ url('powersupplies/'.$hardware->powersupply_id) }}">{{$hardware->powersupply->name}}</a></p>

                        <hr>

                        @if(count($hardware->hardwarecomments))

                            @foreach($hardware->hardwarecomments as $hardwarecomment)
                                <strong>{{$hardwarecomment->created_at->diffForHumans()}} post by: {{$hardwarecomment->user->name}}</strong>
                                <p>{{$hardwarecomment->body}}</p>
                            @endforeach

                        @else
                            <p>no comments</p>
                        @endif

                        <a href="{{ url('hardwares/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection