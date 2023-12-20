<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Task List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3a28319862.css" crossorigin="anonymous">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
<body>
    <div class="taskList">
        <h1>@yield('title')</h1>
        <div>
            @yield('content')
        </div>
    </div>
@if(session()->has('success'))
    <div class="toast success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
