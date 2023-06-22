@extends('new-bot.layouts.layout')

@section('content')

    <div class="page_with_button page_without_search">

        <div class="header">
            <h1 class="h1_back mb-0">Доставка</h1>
        </div>

        <div class="tabs delivery_tabs">
            <div class="tab_list row">
                <label id="t_pickup" class="tab_item order_label active" onclick="support.tab(this)">
                    <input type="radio" class="radio_box" value="Самовывоз">
                    <span class="tab_item_body">Самовывоз</span>
                </label>
                <label id="t_delivery" class="tab_item order_label" onclick="support.tab(this)">
                    <input type="radio" class="radio_box" value="Доставка">
                    <span class="tab_item_body">Доставка</span>
                </label>
            </div>
            <div class="tab_content">
                <div id="t_pickup_tab" class="tab_pane active">
                    <label class="filter_label">
                        <input name="pickup-address" type="radio" value="" class="radio_box">
                        <span class="check_radio_box"></span>
                        <span class="radio_box_info">
                            <span class="radio_box_title">г. Белгород пр-т Богдана Хмельницкого, 345 этаж 1, офис 345, </span>
                            <span class="radio_box_desc">Пн – Вт 09:00 – 18:00</span>
                        </span>
                    </label>
                    <label class="filter_label">
                        <input name="pickup-address" type="radio" value="" class="radio_box">
                        <span class="check_radio_box"></span>
                        <span class="radio_box_info">
                            <span class="radio_box_title">г. Белгород пр-т Богдана Хмельницкого, 345 этаж 1, офис 345, </span>
                            <span class="radio_box_desc">Пн – Вт 09:00 – 18:00</span>
                        </span>
                    </label>
                    <label class="filter_label filter_label-last">
                        <input name="pickup-address" type="radio" value="" class="radio_box">
                        <span class="check_radio_box"></span>
                        <span class="radio_box_info">
                            <span class="radio_box_title">г. Белгород пр-т Богдана Хмельницкого, 345 этаж 1, офис 345, </span>
                            <span class="radio_box_desc">Пн – Вт 09:00 – 18:00</span>
                        </span>
                    </label>

                    <span class="pickup_address-link" onclick="support.openDelivery()">Найти ближайший</span>
                </div>

                <div id="t_delivery_tab" class="tab_pane">
                    <span class="btn_default btn_add_address" onclick="support.addAddress()">+ Добавить адрес</span>

                    <label class="filter_label">
                        <input name="pickup-address" type="radio" value="" class="radio_box">
                        <span class="check_radio_box"></span>
                        <span class="radio_box_info">
                            <span class="radio_box_title">г. Белгород пр-т Богдана Хмельницкого, 345 этаж 1, офис 345, </span>
                            <span class="label_item">
                                <span class="label_item__title">Доставка:</span>
                                <span class="label_item__desc">150 ₽</span>
                            </span>
                            <span class="address_change_buttons">
                                <span class="address_change_buttons-btn" onclick="support.addAddress()">Изменить</span>
                                <span class="address_change_buttons-btn" onclick="support.deleteAddress()">Удалить</span>
                            </span>
                        </span>
                    </label>
                    <label class="filter_label">
                        <input name="pickup-address" type="radio" value="" class="radio_box">
                        <span class="check_radio_box"></span>
                        <span class="radio_box_info">
                            <span class="radio_box_title">г. Белгород пр-т Богдана Хмельницкого, 345 этаж 1, офис 345, </span>
                            <span class="label_item">
                                <span class="label_item__title">Доставка:</span>
                                <span class="label_item__desc">150 ₽</span>
                            </span>
                            <span class="address_change_buttons">
                                <span class="address_change_buttons-btn" onclick="support.addAddress()">Изменить</span>
                                <span class="address_change_buttons-btn" onclick="support.deleteAddress()">Удалить</span>
                            </span>
                        </span>
                    </label>

                </div>
            </div>
        </div>

        <div class="btn_default_wrap">
            <a href="{{route('botOrderLast')}}" class="btn_default ">{{--btn_default-disable--}}
                Продолжить
            </a>
        </div>

    </div>

    @include('new-bot.include.delivery._delivery')
    @include('new-bot.include.delivery._remove-address')
    @include('new-bot.include.delivery._add-address')

@endsection


