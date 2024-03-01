<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<header>
    <div class="container">
        <div class="header">
            <a href=""><img src="{{ asset('storage/img/logo.png') }}"></a>
            <div class="navbar">
                <a href="">Home</a>
                <a href="">Profielcheck</a>
                <a href="">Inloggen</a>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>