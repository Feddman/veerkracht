@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Veel gestelde vragen</h1>
    @foreach($faqs as $faq)
        <div class="faq-container">
            <div class="question">
                <span>Q.</span>
                {{ $faq->question }}
            </div>
            <div class="answer">
                <span>A.</span>
                {{ $faq->answer }}
            </div>
        </div>
    @endforeach
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