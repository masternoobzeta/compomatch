<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

        @yield('content')@extends('layouts.default')
        @section('content')
            i am the contact page
        @stop

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
