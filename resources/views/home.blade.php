<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Single Page Application</title>
</head>
<body>

    <div id="app">
        <app-home></app-home>
    </div>


<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
