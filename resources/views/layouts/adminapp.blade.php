<html>
<head>
    <title>Line Booking Engine Admin @yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
</head>
<body class="app">

@include('layouts.sidebar')

<div class="page-container">

    @include('layouts.header')

    @yield('content')

</div>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>