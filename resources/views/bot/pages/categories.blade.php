@extends('new-bot.layouts.layout')

@section('content')

    <div class="header">
        <h1 class="h1_back">Категории</h1>

        <div class="search_wrap p_relative">
            <input type="text" class="search_input" placeholder="Поиск">

            <span class="search_icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2 15.8L21.7 20.3C22.1 20.7 22.1 21.3 21.7 21.7C21.5 21.9 21.2 22 21 22C20.8 22 20.5 21.9 20.3 21.7L15.8 17.2C14.3 18.3 12.5 19 10.5 19C5.8 19 2 15.2 2 10.5C2 5.8 5.8 2 10.5 2C15.2 2 19 5.8 19 10.5C19 12.5 18.3 14.4 17.2 15.8ZM10.5 4C6.9 4 4 6.9 4 10.5C4 14.1 6.9 17 10.5 17C12.3 17 13.9 16.3 15.1 15.1C16.3 13.9 17 12.3 17 10.5C17 6.9 14.1 4 10.5 4Z" fill="white"/>
                </svg>
            </span>
        </div>
    </div>

    <div class="categories_list ">{{-- Чтобы стало в ряд по одной категории, добавить класс "categories_list-one" --}}

        @for ($i = 6; $i > 0; $i--)

            @include('new-bot.include._category')

        @endfor

    </div>

    @include('new-bot.include._created_in')

@endsection


