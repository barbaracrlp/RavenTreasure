<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', "Raven's Treasure") }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/iconoRaven.png') }}">

    <!-- Include any CSS or JavaScript libraries here -->
</head>
<body>
    @include('layouts.nav') <!-- Include the navigation view -->
    
    <div class="container">
        @yield('content') <!-- This will be replaced by the content of specific views -->
    </div>

    <!-- Include any JavaScript files at the end of the body -->
</body>
</html>
