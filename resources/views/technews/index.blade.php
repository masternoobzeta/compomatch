
@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Technews</div>

                    <div class="card-body">

                        @if(count($techarticles))
                            @foreach($techarticles as $techarticle)
                                <a href="{{ url('technews/'.$techarticle->id) }}">{{$techarticle->title}}</a><hr>
                            @endforeach
                        @else
                            <h3>no technews found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection