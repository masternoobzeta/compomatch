<html>
<head>
    <meta charset="utf-8">
    <title>Compomatch.com TCR Nederland</title>
    <link rel="icon" href="{{asset('img/title-logo.png')}}">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>