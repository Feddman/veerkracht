@extends('layouts.master')

@section('content')

<div class="profielCheckForm">
    <div class="container">
        <h1>Profielcheck</h1>
        <form action="{{route('profielcheck.store')}}" method="POST">
            @csrf
            @php $questionIndex = 0; @endphp
            @foreach($questions as $question)
                <div class="question-container" id="question{{$questionIndex}}" style="display: {{ $questionIndex == 0 ? 'block' : 'none' }}">
                    <h3>{{ $question['title'] }}</h3>
                    @for ($i = 1; $i <= 10; $i++)
                        <label class="radio-label">
                            <input type="radio" name="question_{{ $questionIndex }}" value="{{ $i }}">
                            <span class="radio-button">{{ $i }}</span>
                        </label>
                    @endfor
                </div>
                @php $questionIndex++; @endphp
            @endforeach

            <div id="emailContainer" style="display: none;">
                <input type="text" id="name" name="name" placeholder="Naam" required>
                <input type="text" id="lastname" name="lastname" placeholder="Achternaam" required>


                <select id="salutation" name="salutation" required>
                    <option value="" disabled selected hidden>Aanhef</option>
                    <option value="Dhr.">Dhr.</option>
                    <option value="Mevr.">Mevr.</option>
                </select>

                <input type="email" id="email" name="email" placeholder="E-mailadres" required>
                <input type="text" id="phone" name="phone" placeholder="Telefoonnummer" required>
            </div>

            <div class="button-container">
                <button type="button" id="previousButton" onclick="previousQuestion()">Vorige vraag</button>
                <button type="button" id="nextButton" onclick="nextQuestion()">Volgende vraag</button>
                <button type="submit" id="submitButton" style="display: none;">Verzenden</button>
            </div>
        </form>
    </div>
</div>

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

{{-- <script>
    var currentQuestion = 0;
    var totalQuestions = {{ count($questions) }};

    function nextQuestion() {
        var currentDiv = document.getElementById('question' + currentQuestion);
        var radioButtons = currentDiv.querySelectorAll('input[type="radio"]');
        var isChecked = false;
        
        // Controleer of een van de radio-buttons is geselecteerd
        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                isChecked = true;
                break;
            }
        }
        
        // Als er geen antwoord is geselecteerd, doe niets
        if (!isChecked) {
            alert("Selecteer alstublieft een antwoord voordat u verder gaat.");
            return;
        }
        
        // Verberg de huidige vraag
        currentDiv.style.display = 'none';
        
        // Ga naar de volgende vraag
        currentQuestion++;
        
        if (currentQuestion < totalQuestions) {
            var nextDiv = document.getElementById('question' + currentQuestion);
            nextDiv.style.display = 'block';
        } else {
            document.getElementById('submitButton').style.display = 'block';
            document.getElementById('nextButton').style.display = 'none';
            document.getElementById('previousButton').style.display = 'none';
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
</script> --}}


<script>
    var currentQuestion = 0;
    var totalQuestions = {{ count($questions) }}; // Zorg ervoor dat dit correct wordt geïnterpreteerd door je template engine

    function nextQuestion() {
        // Check if we are on the email input step
        if (currentQuestion === totalQuestions) {
            if (document.getElementById('email').value !== "") {
                document.getElementById('submitButton').click(); // Trigger form submission
            } else {
                alert("Vul alstublieft uw e-mailadres in.");
            }
            return;
        }

        var currentDiv = document.getElementById('question' + currentQuestion);
        var radioButtons = currentDiv.querySelectorAll('input[type="radio"]');
        var isChecked = false;

        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                isChecked = true;
                break;
            }
        }

        if (!isChecked && currentQuestion < totalQuestions) {
            alert("Selecteer alstublieft een antwoord voordat u verder gaat.");
            return;
        }

        currentDiv.style.display = 'none';
        currentQuestion++;

        if (currentQuestion < totalQuestions) {
            document.getElementById('question' + currentQuestion).style.display = 'block';
        } else {
            document.getElementById('emailContainer').style.display = 'block';
            document.getElementById('previousButton').style.display = 'none'; // Verberg de 'Vorige vraag' knop
            document.getElementById('nextButton').style.display = 'none'; // Verberg de 'Volgende vraag' knop
            document.getElementById('submitButton').style.display = 'block'; // Toon de 'Verzenden' knop
        }
    }

    function previousQuestion() {
        if (currentQuestion > 0) {
            if (currentQuestion === totalQuestions) {
                // Als we bij de e-mailstap zijn en terug willen
                document.getElementById('emailContainer').style.display = 'none';
                document.getElementById('submitButton').style.display = 'none'; // Verberg de 'Verzenden' knop
                document.getElementById('nextButton').style.display = 'block'; // Toon de 'Volgende vraag' knop weer
            } else {
                var currentDiv = document.getElementById('question' + currentQuestion);
                currentDiv.style.display = 'none';
            }
            
            currentQuestion--;

            if (currentQuestion < totalQuestions) {
                document.getElementById('question' + currentQuestion).style.display = 'block';
                document.getElementById('previousButton').style.display = 'block'; // Zorg ervoor dat de 'Vorige vraag' knop zichtbaar blijft
            }

            if (currentQuestion === 0) {
                document.getElementById('previousButton').style.display = 'none'; // Verberg de 'Vorige vraag' knop als we terug zijn bij de eerste vraag
            }
        }
    }
</script>

@endsection