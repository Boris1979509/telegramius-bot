@extends('new-bot.layouts.layout')

@section('content')

    <div class="page_with_button page_without_search">

        <div class="header">
            <h1 class="h1_back mb-0">Личный кабинет</h1>
        </div>

        <div class="personal_area">

            <span class="label_item personal_area__city">
                <span class="label_item__title">Ваш город:</span>
                <span class="label_item__desc">г. Белгород</span>
            </span>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Ваши заказы</span>
                    <a href="{{route('botPersonalAreaOrders')}}" class="card_title__look">Посмотреть</a>
                </div>
                <div class="card_body">
                    <span class="label_item">
                        <span class="label_item__title">Всего:</span>
                        <span class="label_item__desc">124 222</span>
                    </span>
                    <span class="label_item">
                        <span class="label_item__title">Сумма заказов:</span>
                        <span class="label_item__desc">2 242 650 ₽</span>
                    </span>
                </div>
            </div>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Адреса доставки</span>
                    <img src="{{asset('new-bot/images/icons/edit.svg')}}" alt="" class="card_title__icon">
                </div>
                <div class="card_body">
                    {{--<p class="card_body__text">г. Белгород, Бульвар Юности 42, дом 45, квартира 13</p>--}}
                    <p class="card_body__text card_body__no_item">Адресов нет</p>
                </div>

                <span class="card_add_btn">Добавить адрес</span>
            </div>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Ваши контакты</span>
                </div>
                <div class="card_body">
                    <span class="label_item">
                        <span class="label_item__title">Имя:</span>
                        <span class="label_item__desc">Анастасия</span>
                    </span>
                    <span class="label_item">
                        <span class="label_item__title">Телефон:</span>
                        <span class="label_item__desc">8 905 877 89 45</span>
                    </span>
                    <span class="label_item">
                        <span class="label_item__title">Email:</span>
                        <span class="label_item__desc"></span>
                    </span>
                </div>

                <span class="card_add_btn" onclick="support.addContact()">Добавить контакты</span>
            </div>

        </div>

        @include('new-bot.include._created_in')
    </div>

@endsection


