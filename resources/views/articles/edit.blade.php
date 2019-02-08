
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Articles</div>

                    <div class="card-body">

                        {!! Form::model($article, ['method'=>'PUT','route' => ['articles.update', $article->id]]) !!}

                        {{Form::label('title', 'Title:')}}
                        {{Form::text('title', old('title'))}}
                        <br>

                        {{Form::label('body', 'Content:')}}
                        {{Form::textarea('body', old('body'))}}
                        <br>

                        {{Form::submit('save')}}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection