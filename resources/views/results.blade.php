@extends('layouts.master')

@section('content')

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    
    {{-- <div class="container">
        <div class="mb-8">
            <h1>Results</h1>
            <p>Here are the results</p>
        </div>

        <div class="result-container">
            <div class="card">
                <div>
                    <h2>Result 1</h2>
                    <p>Some description</p>
                    <p>Email</p>
                </div>
                <div class="icon">
                    <img class="bg-white cursor-pointer p-1 rounded-sm" src="{{ asset('storage/img/chevron_down.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <h1>Resultaten overzicht</h1>

        <div class="card">
            <div class="card-header">
                <h2>{{ $user->name }} {{ $user->salutation }} {{ $user->last_name }}</h2>
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