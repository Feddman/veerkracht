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
                <a href="/">Home</a>
                <a href="/profielcheck">Profielcheck</a>
                <a href="/dashboard">Dashboard</a>
                <a href="/inloggen">Inloggen</a>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="content">
        @yield('content')
    </div>
</body>
<footer>
    <div class="container">
        <div class="contact">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>CONTACT</h2>
                    <div class="contact-email">
                        <img class="email-png" src="{{ asset('storage/img/mail.png') }}">
                        <p>veerkracht@gmail.com</p>
                    </div>
                    <div class="contact-telefoon">
                        <img class="tel-png" src="{{ asset('storage/img/tel.png') }}">
                        <p>06 25 839954</p>
                    </div>
                </div>
                <div class="social-icons">
                    <img src="{{ asset('storage/img/x-logo.png') }}" alt="">
                    <img src="{{ asset('storage/img/insta-logo.png') }}" alt="">
                    <img src="{{ asset('storage/img/facebook-logo.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
</html>