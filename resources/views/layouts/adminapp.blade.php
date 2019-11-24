<html>
<head>
    <title>App Name - @yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
</head>
<body class="app">

@extends('layouts.sidebar')

<div class="page-container">

    @extends('layouts.header')

    @yield('content')

</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>