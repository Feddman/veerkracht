@extends('layouts.master')

@section('content')


<div class="body-blok1 custom-padding-bottom-50">
    <div class="container">
        <div class="body-blok1-content">
            
            <div class="body-blok1-content-rechts">
                <h1 class="body-blok1-title">De plattegrond</h1>

                <p class="body-blok1-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br><br>
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="body-blok1-content-links"  style="text-align: center">
                <img class="iph" src="{{ asset('storage/img/plattegrond.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@endsection