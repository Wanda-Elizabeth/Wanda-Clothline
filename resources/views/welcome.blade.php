<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/assets/images/wanda_logo.png')}}" type="image/x-icon"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wanda's Cute Clothesline</title>
</head>
<body>
<div id="app"></div>
<div id="modal"></div>
<div id="notification" style="position:fixed; top:60px; right:5px; z-index: 10"></div>
<div id="user-notification" style="position:fixed; bottom:10px; left:5px; z-index: 10"></div>


@vite('resources/js/app.js')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</body>
</html>
