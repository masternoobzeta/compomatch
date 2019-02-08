@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post an article</div>

                    <div class="card-body">

                        {!! Form::open(['route' => 'articles.store']) !!}

                        {{Form::label('title', 'Title:')}}
                        {{Form::text('title')}}
                        <br>

                        {{Form::label('body', 'Content:')}}
                        {{Form::textarea('body')}}
                        <br>

                        {{Form::submit('save')}}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection