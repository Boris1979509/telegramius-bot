@extends('new-bot.layouts.layout')

@section('content')

    <div class="header header__no_back">
        <h1 class="h1">Главная</h1>

        <div class="search_wrap p_relative">
            <input type="text" class="search_input" placeholder="Поиск" onclick="support.openSearchModal()">

            <span class="search_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2 15.8L21.7 20.3C22.1 20.7 22.1 21.3 21.7 21.7C21.5 21.9 21.2 22 21 22C20.8 22 20.5 21.9 20.3 21.7L15.8 17.2C14.3 18.3 12.5 19 10.5 19C5.8 19 2 15.2 2 10.5C2 5.8 5.8 2 10.5 2C15.2 2 19 5.8 19 10.5C19 12.5 18.3 14.4 17.2 15.8ZM10.5 4C6.9 4 4 6.9 4 10.5C4 14.1 6.9 17 10.5 17C12.3 17 13.9 16.3 15.1 15.1C16.3 13.9 17 12.3 17 10.5C17 6.9 14.1 4 10.5 4Z" fill="white"/>
                </svg>
            </span>
        </div>
    </div>

    <div class="home_slider">
        <div class="slider_images_wrap">
            <div class="slider_list">
                <div class="slider__item">
                    <img src="{{asset('new-bot/images/home-slider.jpg')}}" alt="" class="slider__item-img">
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
    </div>

    <div class="actual_products">
        <h2>Актуально сейчас</h2>

        <div class="products_list ">{{-- Чтобы стало слайдером, добавить класс "products_list-slider" --}}

            @for ($i = 3; $i > 0; $i--)

                @include('new-bot.include._product')

            @endfor

        </div>
    </div>

    <div class="info_block">
        <h2>Заголовок</h2>
        <p class="info_block__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="popular_categories">
        <h2>Популярные категории</h2>

        <div class="categories_list categories_list-slider">{{-- Чтобы стало слайдером, добавить класс "categories_list-slider" --}}

            @for ($i = 6; $i > 0; $i--)

                @include('new-bot.include._category')

            @endfor

        </div>
    </div>

    @include('new-bot.include._created_in')

@endsection


