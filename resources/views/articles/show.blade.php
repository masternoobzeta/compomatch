@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Article</div>

                    <div class="card-body">

                        @if($article->user_id == auth()->id())
                            <a href="{{ url('articles/'.$article->id."/edit") }}">edit</a><hr>
                        @endif

                        <h3>{{$article->title}}</h3>
                        <strong>Post by: {{$article->user->name}}</strong>
                        <p>Created at: {{$article->created_at->toFormattedDateString()}}</p>
                        <p>Edited at: {{$article->updated_at->toFormattedDateString()}}</p>
                        <p>{{$article->body}}</p>

                        <hr>

                        @if(count($article->comments))

                            @foreach($article->comments as $comment)
                                <strong>{{$comment->created_at->diffForHumans()}} post by: {{$comment->user->name}}</strong>
                                <p>{{$comment->body}}</p>
                            @endforeach

                        @else
                            <p>no comments</p>
                        @endif

                        <hr>

                        <form method="POST" action="/articles/{{$article->id}}/comments">

                            @csrf

                            <textarea name="body" placeholder="comment"></textarea><br>
                            <button type="submit">add comment</button>

                        </form>

                            @if($article->user_id == auth()->id())
                                {!!Form::open(['route' => ['articles.destroy', $article->id], 'method'  => 'DELETE'])!!}
                                {{ Form::submit('delete') }}
                                <br>
                            @endif



                        <a href="{{ url('articles/') }}">return</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection