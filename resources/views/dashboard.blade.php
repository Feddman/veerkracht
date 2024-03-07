@extends('layouts.master')

@section('content')
    <div class="dashboard">
        <div class="container">
            <h1 class="dashboard__title">Resultaten overzicht</h1>
            <div class="dashboard__grid">
                @foreach ($users as $user)
                    <div class="user">
                        <div class="user__top">
                            <div class="user__info">
                                <h2 class="user__name">{{ $user->name . ' ' . $user->last_name }}</h2>
                                {{-- <p>avr score</p> --}}
                                <a href="mailTo: {{ $user->email }}" class="user__email">{{ $user->email }}</a>
                            </div>
                            <div class="user__averages">
                                <div class="user__lichaamfuncties user__average">
                                    <h2>Lichaamfuncties</h2>
                                    <p>3</p>
                                </div>
                                <div class="user__Mentaal-welbevinden user__average">
                                    <h2>Mentaal welbevinden</h2>
                                    <p>3</p>
                                </div>
                                <div class="user__zingeving user__average">
                                    <h2>Zingeving</h2>
                                    <p>3</p>
                                </div>
                                <div class="user__kwaliteit-van-leven user__average">
                                    <h2>Kwaliteit van leven</h2>
                                    <p>3</p>
                                </div>
                                <div class="user__meedoen user__average">
                                    <h2>Meedoen</h2>
                                    <p>3</p>
                                </div>
                                <div class="user__dagelijks-functioneren user__average">
                                    <h2>Dagelijks functioneren</h2>
                                    <p>3</p>
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
        </div>
    </div>
@endsection
