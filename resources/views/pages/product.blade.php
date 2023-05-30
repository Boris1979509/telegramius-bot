@extends('layouts.app')

@section('content')

<div class="page_with_button page_without_search">

    <div class="header">
        <h1 class="h1_back mb-0">Арт: 123123</h1>
    </div>

    <div class="product product_page">
        <div class="product_images_wrap">
            <div class="slider_images_wrap">
                <div class="slider_list">
                    <div class="slider__item">
                        <img src="{{ Vite::asset('resources/images/picture-150x150.jpg') }}" alt="" class="slider__item-img">
                    </div>
                </div>
                <div class="slider_dots">
                    <span class="slider_dots__item" style="width: 20%;"></span>
                    <span class="slider_dots__item" style="width: 20%;"></span>
                    <span class="slider_dots__item" style="width: 20%;"></span>
                    <span class="slider_dots__item" style="width: 20%;"></span>
                    <span class="slider_dots__item" style="width: 20%;"></span>
                </div>
            </div>

            <div class="product_cart_wrap row">
                <span class="like "></span>{{--При нажатии добавить класс "like-set" --}}
            </div>

        </div>

        <p class="product__title">Салат цезарь с курицей и зерновой горчицей</p>

        <div class="product_price_like row">
            <div class="price_wrap">
                <span class="price">1 250 ₽</span>
                <span class="price-old">1590 ₽</span>
            </div>
            <span class="discount">-50%</span>
        </div>

        <div class="product_desc__wrap">
            <div class="product_desc">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut nisiut quis... elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut nisiut quis... </p>
            </div>
            <span class="product_desc__more">Подробнее</span>
        </div>

        <div class="complain_link row" onclick="support.openСomplaintModal()">
            <img src="{{ Vite::asset('resources/images/icons/complain.svg') }}" alt="" class="complain_icon">
            <span class="complain_text">Пожаловаться</span>
        </div>

        <div class="product_add_btn_wrap">
            {{--<span class="product_add__btn">Принимаем заказы с 9:00</span>--}}
            {{--<span class="product_add__btn">В корзину</span>--}}
            <a href="" class="product_add__btn product_add__btn-go">Перейти в корзину</a>
        </div>
    </div>

    <div class="actual_products">
        <h2>Не забудьте купить</h2>

        <div class="products_list products_list-slider">

            @for ($i = 3; $i > 0; $i--)

            @include('include._product')

            @endfor

        </div>
    </div>

    @include('include._created_in')
    @include('include._complaint_modal')

</div>

@endsection