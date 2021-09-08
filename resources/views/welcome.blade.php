<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <script src="{{asset('my_js/bootstrap.js')}}"></script>
    <script src="{{asset('my_js/jquery-3.4.1.js')}}"></script>
</head>

<body>
    <div id="app">

    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>