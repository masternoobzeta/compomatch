@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Articles</div>

                    <div class="card-body">

                        @if(auth())
                            <a href="articles/create">post a article</a><hr>
                        @else
                            <p><a href="login">login</a> to post an article </p>
                        @endif

                        @if(count($articles))
                            @foreach($articles as $article)
                                <a href="{{ url('articles/'.$article->id) }}">{{$article->title}}</a><br>
                                <p>Post by {{ $article->user->name }}</p>
                            @endforeach
                        @else
                            <h3>no article found</h3>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection