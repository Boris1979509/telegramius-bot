<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Магазин</title>
    <link rel="stylesheet" href="{{ mix('bot/css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow"/>
    <script src="https://yookassa.ru/checkout-widget/v1/checkout-widget.js"></script>
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>

<body>
    <div id="app"></div>
    <script src="{{ mix('bot/js/app.js') }}" defer></script>
</body>
</html>