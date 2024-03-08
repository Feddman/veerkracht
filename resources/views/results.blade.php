@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>Resultaten overzicht</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $user->salutation }} {{ $user->name }} {{ $user->last_name }}</h2>
                <p>{{ $user->email }}</p>
            </div>
            <div class="card-body">
                <div class="dropdown">
                    <div class="questions"{{ $user->id }}">
                        @foreach($answers->where('user_id', $user->id) as $answer)
                            <div class="question-block">
                                <p class="question">{{ $answer->question->title }}</p>
                                <p class="bold color-{{ $answer->score }}">{{ $answer->score }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="body-blok1-content">
                
                <div class="body-blok1-content-rechts">
                    <h1 class="body-blok1-title">Voorstel</h1>

                    <p class="body-blok1-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        <br><br>
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="body-blok1-content-links"  style="text-align: center">
                    <img src="{{ asset('storage/img/IPH-model.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const questions = document.querySelectorAll('.question');
        
            questions.forEach(function(question) {
                question.addEventListener('click', function() {
                    // Dit toggelt de zichtbaarheid van het antwoord
                    this.nextElementSibling.classList.toggle('show-answer');
                });
            });
        });
    </script>
@endsection