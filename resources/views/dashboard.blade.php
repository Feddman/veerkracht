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
                                <h2 class="user__name">{{ $user->salutation . ' ' . $user->name . ' ' . $user->last_name }}</h2>
                                <p class="user__phone">{{ $user->phone_number }}</p>
                                <a href="mailTo: {{ $user->email }}" class="user__email">{{ $user->email }}</a>
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
