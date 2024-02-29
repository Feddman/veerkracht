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
        <div class="banner">
            <div class="container">
                <div class="banner-content">
                    <h1 class="banner-title">Natuurlijke zorg,<br>
                        op maat gemaakt voor jouw! </h1>
                    <p class="banner-text">Ontdek jouw perfecte zorgpakket met onze slimme vragenlijst. Als jouw persoonlijke compagnon begeleiden we je naar de ideale zorginstellingen die passen bij jouw unieke behoeften. Welkom bij een zorgervaring die echt om jou draait.</p>
                </div>
            </div>
        </div>
    </body>
</html>