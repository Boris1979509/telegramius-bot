@extends('new-bot.layouts.layout')

@section('content')

    <div class="page_with_button page_without_search">

        <div class="header">
            <h1 class="h1_back mb-0">Оформление заказа</h1>
        </div>

        <div class="order">

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Адрес получения</span>
                    <img src="{{asset('new-bot/images/icons/edit.svg')}}" alt="" class="card_title__icon">
                </div>
                <div class="card_body">
                    <p class="card_body__text">г. Белгород, Бульвар Юности 42, дом 45, квартира 13</p>
                </div>
            </div>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Контакты</span>
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

            <span class="add_promo_code">У меня есть промокод</span>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Промокод</span>
                </div>
                <div class="card_body">
                    <div class="form_group mb-0 form_control__icon form_control__icon-arrow success">{{--error|success --}}
                        <input type="text" class="form_control" placeholder="Введите промокод" value="avdategv1224">
                        <span class="form_info">Промокод не найден</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card_title">
                    <span class="card_title__text">Способы оплаты</span>
                </div>
                <div class="card_body">
                    <div class="form_group">
                        <label class="label_card">
                            <input name="pay" type="radio" value="" class="radio_box">
                            <span class="check_radio_box"></span>
                            <span class="radio_box_info">Онлайн</span>
                        </label>
                        <label class="label_card">
                            <input name="pay" type="radio" value="" class="radio_box">
                            <span class="check_radio_box"></span>
                            <span class="radio_box_info">При получении</span>
                        </label>
                    </div>
                    <span class="label_item">
                        <span class="label_item__title">3 шт. на сумму:</span>
                        <span class="label_item__desc">2 650 ₽</span>
                    </span>
                    <span class="label_item">
                        <span class="label_item__title">Скидка:</span>
                        <span class="label_item__desc">-149 ₽</span>
                    </span>
                    <span class="label_item">
                        <span class="label_item__title">Доставка:</span>
                        <span class="label_item__desc">150 ₽</span>
                    </span>
                </div>
                <div class="card_footer">
                    <span class="label_item">
                        <span class="label_item__title">К оплате:</span>
                        <span class="label_item__desc">2 651 ₽</span>
                    </span>
                </div>
            </div>

            <div class="order_comment">
                <label for="" class="order_comment__label">Комментарий к заказу</label>
                <textarea class="form_control" name="" placeholder="Например: Улица, фонарь, аптека, домофон не работает" >Например: Улица, фонарь, аптека, домофон не работает</textarea>
            </div>

            <label class="checkbox_data">
                <input name="" type="checkbox" value="" class="checkbox">
                <span class="check_checkbox"></span>
                <span class="checkbox_info p_relative">Согласен (на) <a href="">с условиями магазина</a></span>
            </label>

        </div>

        <div class="btn_default_wrap">
            <span class="btn_default">Оформить заказ</span>
        </div>

        @include('new-bot.include._created_in')
        @include('new-bot.include.delivery._add_contact')
    </div>

@endsection


