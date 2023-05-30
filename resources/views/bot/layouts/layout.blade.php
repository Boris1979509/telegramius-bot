<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <title>Бот</title>
    <meta name="description" content="Бот">

    <link href="{{ mix("new-bot/css/new-bot.css") }}" rel="stylesheet">
</head>

<body>

<div class="body dark circle">{{-- white,dark || circle,square --}}
    <div class="main_content open_search">{{--open_search--}}
        <div class="container">

            @yield('content')

        </div>

    </div>

    @include('new-bot.include._footer')

    @include('new-bot.include.filter._filter-step-1')
    @include('new-bot.include._final_modal')
    @include('new-bot.include._search_modal')

    @yield('modal')

</div>

<script src="{{ mix('new-bot/js/new-bot.js') }}"></script>

</body>

</html>
