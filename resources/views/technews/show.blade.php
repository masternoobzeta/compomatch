@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Technews</div>

                    <div class="card-body">

                        <h3>{{$techarticle->title}}</h3>
                        <p>Post by: <strong>{{$techarticle->poster}}</strong></p>
                        <p>Created at: {{$techarticle->created_at->toFormattedDateString()}}</p>
                        <p>Edited at: {{$techarticle->updated_at->toFormattedDateString()}}</p>
                        <p>{{$techarticle->body}}</p>

                        <hr>

                        @if(count($techarticle->techcomments))

                            @foreach($techarticle->techcomments as $techcomment)
                                <strong>{{$techcomment->created_at->diffForHumans()}} post by: {{$techcomment->user->name}}</strong>
                                <p>{{$techcomment->body}}</p>
                            @endforeach

                        @else
                            <p>no comments</p>
                        @endif

                        <a href="{{ url('technews/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection