@extends('new-bot.layouts.layout')

@section('content')

    <div class="page_with_button page_without_search">

        <div class="header">
            <h1 class="h1_back mb-0">Корзина</h1>
        </div>

        <div class="cart">

            <div class="cart_list row">

                @for ($i = 5; $i > 0; $i--)

                    @include('new-bot.include._cart-product')

                @endfor

            </div>

        </div>

        <div class="btn_default_wrap">
                <a href="{{route('botOrder')}}" class="btn_default ">{{--btn_default-disable--}}
                    Оформить
                    <span class="btn_default-value">3 шт., 2 650 ₽</span>
                </a>
        </div>

        @include('new-bot.include._created_in')

    </div>

@endsection


