@extends('new-bot.layouts.layout')

@section('content')

    <div class="header">
        <h1 class="h1_back">Ваши заказы</h1>

        <div class="search_wrap p_relative">
            <input type="text" class="search_input" placeholder="Поиск">

            <span class="search_icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2 15.8L21.7 20.3C22.1 20.7 22.1 21.3 21.7 21.7C21.5 21.9 21.2 22 21 22C20.8 22 20.5 21.9 20.3 21.7L15.8 17.2C14.3 18.3 12.5 19 10.5 19C5.8 19 2 15.2 2 10.5C2 5.8 5.8 2 10.5 2C15.2 2 19 5.8 19 10.5C19 12.5 18.3 14.4 17.2 15.8ZM10.5 4C6.9 4 4 6.9 4 10.5C4 14.1 6.9 17 10.5 17C12.3 17 13.9 16.3 15.1 15.1C16.3 13.9 17 12.3 17 10.5C17 6.9 14.1 4 10.5 4Z" fill="white"/>
            </svg>
        </span>
        </div>
    </div>

    <div class="personal_area_orders">
        <div class="card card_order">
            <div class="card_body">
                <span class="label_item">
                    <span class="label_item__title">Номер заказа:</span>
                    <span class="label_item__desc">123478905</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Дата заказа:</span>
                    <span class="label_item__desc">14.03.2022</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Способ оплаты:</span>
                    <span class="label_item__desc">Онлайн</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Адрес самовывоза:</span>
                    <span class="label_item__desc label_item__desc-full">г. Белгород, Бульвар Юности 42, дом 45, квартира 13</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Комментарий к заказу:</span>
                    <span class="label_item__desc label_item__desc-full">Например: Улица, фонарь, аптека, домофон не работает</span>
                </span>

                <div class="orders mb-10">
                    <span class="label_item mb-5">
                        <span class="label_item__title">Список товаров:</span>
                    </span>

                    <div class="orders_item">
                        <span class="orders_item__title">Пицца с сыром, салями и ветчиной - 4 шт</span>
                        <span class="orders_item__price">(2 651 ₽)</span>
                    </div>
                    <div class="orders_item">
                        <span class="orders_item__title">Салат цезарь с курицей и зерновой горчицей - 1 шт</span>
                        <span class="orders_item__price">(651 ₽)</span>
                    </div>
                    <div class="orders_item">
                        <span class="orders_item__title">Фруктовая тарелка: клубника, персик, голубика - 55 шт</span>
                        <span class="orders_item__price">(12 345 ₽)</span>
                    </div>
                </div>

                <span class="label_item">
                    <span class="label_item__title">Стоимость заказа:</span>
                    <span class="label_item__desc">122 651 ₽</span>
                </span>

                <a href="{{route('botPersonalAreaOrder')}}" class="personal_area_orders__link">Подробнее</a>
            </div>
        </div>
        <div class="card card_order">
            <div class="card_body">
                <span class="label_item">
                    <span class="label_item__title">Номер заказа:</span>
                    <span class="label_item__desc">123478905</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Дата заказа:</span>
                    <span class="label_item__desc">14.03.2022</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Способ оплаты:</span>
                    <span class="label_item__desc">Онлайн</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Адрес самовывоза:</span>
                    <span class="label_item__desc label_item__desc-full">г. Белгород, Бульвар Юности 42, дом 45, квартира 13</span>
                </span>
                <span class="label_item">
                    <span class="label_item__title">Комментарий к заказу:</span>
                    <span class="label_item__desc label_item__desc-full">Например: Улица, фонарь, аптека, домофон не работает</span>
                </span>

                <div class="orders mb-10">
                    <span class="label_item mb-5">
                        <span class="label_item__title">Список товаров:</span>
                    </span>

                    <div class="orders_item">
                        <span class="orders_item__title">Пицца с сыром, салями и ветчиной - 4 шт</span>
                        <span class="orders_item__price">(2 651 ₽)</span>
                    </div>
                    <div class="orders_item">
                        <span class="orders_item__title">Салат цезарь с курицей и зерновой горчицей - 1 шт</span>
                        <span class="orders_item__price">(651 ₽)</span>
                    </div>
                    <div class="orders_item">
                        <span class="orders_item__title">Фруктовая тарелка: клубника, персик, голубика - 55 шт</span>
                        <span class="orders_item__price">(12 345 ₽)</span>
                    </div>
                </div>

                <span class="label_item">
                    <span class="label_item__title">Стоимость заказа:</span>
                    <span class="label_item__desc">122 651 ₽</span>
                </span>

                <a href="{{route('botPersonalAreaOrder')}}" class="personal_area_orders__link">Подробнее</a>
            </div>
        </div>
    </div>

    @include('new-bot.include._created_in')

@endsection


