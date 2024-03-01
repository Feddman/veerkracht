@extends('layouts.master')

@section('content')

<section class="profielchecktop">
    <div class="container">
        <div class="profielcheck-page">
            <div class="profielcheck-two-column">
                <div class="profielcheck-column">
                <h2>ProfielCheck</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in ducimus deleniti totam? Ipsa, nam corporis aliquid earum nesciunt inventore atque, laborum soluta dolore aperiam quia. Quasi quo fugit est? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium maiores commodi dolores in eos tempora sint similique. Quasi voluptas deserunt vel cum voluptatem, vero dignissimos tempore non aliquam ducimus eaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, aliquam minima ex consequuntur veritatis architecto neque hic, sapiente quod vero cupiditate officiis qui debitis soluta placeat ducimus labore unde sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum iure sunt repellendus animi fuga fugit ea nesciunt, esse sapiente reiciendis id porro minus laborum atque eum blanditiis magnam nobis vitae.</p>
                </div>
                <div class="profielcheck-column">
                    <img src="{{ asset('storage/img/profielchecktop.jpg') }}" alt="Uw Afbeelding" class="profielcheck-image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profielcheckform">
    <div class="container">
        <div class="center-content">
            <h1 class="left-aligned">Het check formulier</h1>
            <form method="post" action="" id="quizForm">
                @csrf
                @php $questionIndex = 0; @endphp
                @foreach($questions as $question)
                    <div class="question-container" id="question{{ $questionIndex }}" style="display: {{ $questionIndex == 0 ? 'block' : 'none' }}">
                        <h3>{{ $question['title'] }}</h3>
                        @for ($i = 1; $i <= 10; $i++)
                            <label>
                                <input type="radio" name="question_{{ $questionIndex }}" value="{{ $i }}">
                                {{ $i }}
                            </label>
                        @endfor
                    </div>
                    @php $questionIndex++; @endphp
                @endforeach
                <div class="button-container">
                    <button type="button" onclick="previousQuestion()">Vorige vraag</button>
                    <button type="button" onclick="nextQuestion()">Volgende vraag</button>
                    <button type="submit" id="submitButton" style="display: none;">Verzenden</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    var currentQuestion = 0;
    var totalQuestions = {{ count($questions) }};

    function nextQuestion() {
        var currentDiv = document.getElementById('question' + currentQuestion);
        currentDiv.style.display = 'none';

        currentQuestion++;

        if (currentQuestion < totalQuestions) {
            var nextDiv = document.getElementById('question' + currentQuestion);
            nextDiv.style.display = 'block';
        } else {
            document.getElementById('submitButton').style.display = 'block';
        }
    }

    function previousQuestion() {
        if (currentQuestion > 0) {
            var currentDiv = document.getElementById('question' + currentQuestion);
            currentDiv.style.display = 'none';

            currentQuestion--;

            var prevDiv = document.getElementById('question' + currentQuestion);
            prevDiv.style.display = 'block';

            document.getElementById('submitButton').style.display = 'none';
        }
    }
</script>


@endsection