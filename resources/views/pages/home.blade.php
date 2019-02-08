@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <main class="col-md-8">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </main>
        </div>
    </div>
@endsection