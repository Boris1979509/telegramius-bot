<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <title>@yield('title')</title>
  <meta name="description" content="Бот">

  <script src="https://yookassa.ru/checkout-widget/v1/checkout-widget.js"></script>
  <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
  <script src="https://telegram.org/js/telegram-web-app.js"></script>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="body circle">{{-- white,dark || circle,square --}}
    <div class="main_content open_search">{{-- open_search --}}
      <div class="container">
        @yield('content')
      </div>
    </div>
    @include('include._footer')
    @include('include.filter._filter-step-1')
    @include('include._search_modal')
    @include('include._preloader')
    @yield('modal')
  </div>
  @stack('scripts')
</body>

</html>
