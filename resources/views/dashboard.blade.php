@extends('layouts.master')

@section('content')
    <?php use App\Http\Controllers\DashboardController; ?>
    <div class="dashboard">
        <div class="container">
            <h1 class="dashboard__title">Resultaten overzicht</h1>
            <div class="dashboard__grid">
                @foreach ($users as $user)
                    <div class="user">
                        <div class="user__top">
                            <img class="user__chevron" src="{{ asset('storage/img/chevron.webp') }}" alt="">
                            <div class="user__info">
                                <h2 class="user__name">{{ $user->name . ' ' . $user->last_name }}</h2>
                                <a class="user__email" href="mailto:{{ $user->email }}?subject=Beste%20{{ $user->name }}&body=Bedankt%20voor%20het%20invullen%20van%20de%20profielcheck%20van%20Veerkracht!%0D%0A%0D%0AHartelijk%20dank%20voor%20het%20deelnemen%20aan%20onze%20Veerkracht%20vragenlijst.%20We%20zijn%20verheugd%20om%20je%20te%20begeleiden%20op%20je%20pad%20naar%20persoonlijke%20groei%20en%20ontwikkeling.%20Op%20basis%20van%20je%20antwoorden%20hebben%20we%20een%20aantal%20workshops%20geselecteerd%20die%20perfect%20aansluiten%20bij%20jouw%20interesses%20en%20behoeften.%0D%0A%0D%0AJouw%20Aanbevolen%20Workshops:%0D%0A%0D%0A[Workshop%20Naam%201]%20-%20Deze%20workshop%20richt%20zich%20op%20[korte%20beschrijving%20van%20de%20workshop].%20We%20denken%20dat%20dit%20perfect%20bij%20je%20past%20omdat%20[reden%20gebaseerd%20op%20vragenlijstresultaten].%0D%0A%0D%0A[Workshop%20Naam%202]%20-%20Hier%20verdiepen%20we%20ons%20in%20[korte%20beschrijving%20van%20de%20workshop].%20Dit%20is%20een%20geweldige%20kans%20voor%20jou%20om%20[reden%20gebaseerd%20op%20vragenlijstresultaten].%0D%0A%0D%0A[Workshop%20Naam%203]%20-%20Met%20een%20focus%20op%20[korte%20beschrijving%20van%20de%20workshop],%20zal%20deze%20sessie%20je%20helpen%20om%20[reden%20gebaseerd%20op%20vragenlijstresultaten].%0D%0A%0D%0A">{{ $user->email }}</a>

                            </div>
                            <div class="user__averages">
                                <div class="user__lichaamfuncties user__average">
                                    <h2>Lichaamfuncties</h2>
                                    <p>{{ DashboardController::averageScore('Lichaamfuncties', 8, $user) }}</p>
                                </div>
                                <div class="user__Mentaal-welbevinden user__average">
                                    <h2>Mentaal welbevinden</h2>
                                    <p>{{ DashboardController::averageScore('Mentaal welbevinden', 7, $user) }}</p>
                                </div>
                                <div class="user__zingeving user__average">
                                    <h2>Zingeving</h2>
                                    <p>{{ DashboardController::averageScore('Zingeving', 7, $user) }}</p>
                                </div>
                                <div class="user__kwaliteit-van-leven user__average">
                                    <h2>Kwaliteit van leven</h2>
                                    <p>{{ DashboardController::averageScore('Kwaliteit van leven', 8, $user) }}</p>
                                </div>
                                <div class="user__meedoen user__average">
                                    <h2>Meedoen</h2>
                                    <p>{{ DashboardController::averageScore('Meedoen', 7, $user) }}</p>
                                </div>
                                <div class="user__dagelijks-functioneren user__average">
                                    <h2>Dagelijks functioneren</h2>
                                    <p>{{ DashboardController::averageScore('Dagelijks functioneren', 7, $user) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="user__grid">
                            <table class="user__category">
                                <tr>
                                    <th>Lichaamsfuncties</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Lichaamfuncties' && $answer->user_id === $user->id)
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <table class="user__category">
                                <tr>
                                    <th>Mentaal welbevinden</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Mentaal welbevinden')
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <table class="user__category">
                                <tr>
                                    <th>Zingeving</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Zingeving')
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <table class="user__category">
                                <tr>
                                    <th>Kwaliteit van leven</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Kwaliteit van leven')
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <table class="user__category">
                                <tr>
                                    <th>Meedoen</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Meedoen')
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <table class="user__category">
                                <tr>
                                    <th>Dagelijks functioneren</th>
                                    <th>Score</th>
                                </tr>
                                @foreach ($user->answers as $answer)
                                    @if ($answer->question->category === 'Dagelijks functioneren')
                                        <tr>
                                            <td>{{ $answer->question->title }}</td>
                                            <td>{{ $answer->score }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $users->links() }}
        </div>
    </div>
    <script>
        const users = document.querySelectorAll('.user');

        if (users) {
            users.forEach(user => {
                const userResults = user.querySelector('.user__grid');
                const userChevron = user.querySelector('.user__chevron');
                let open = false;

                user.addEventListener('click', event => {
                    if(!event.target.closest('.user__email')) {
                        if (userResults.classList.contains('open-user') && open === true) {
                            userResults.classList.remove('open-user');
                            userChevron.classList.remove('open-chevron');
                            open = false;
                            console.log('close', open);
                        } else {
                            userResults.classList.add('open-user');
                            userChevron.classList.add('open-chevron');
                            console.log('open', open);
                            open = true;
                        }
                    }
                });
            });
        }
    </script>
@endsection
