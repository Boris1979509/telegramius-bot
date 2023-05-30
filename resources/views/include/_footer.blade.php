<footer class="footer">
    <div class="bottom_links row">
        @if ($currentStore->showHome == 1)
        <a href="{{ route('home') }}" class="bottom_links__item">
            <img src="{{ Vite::asset('resources/images/icons/footer/home.svg') }}" alt="" class="bottom_links__icon">
        </a>
        @endif
        @if ($currentStore->showCatalog == 1)
        <a href="{{ route('catalog') }}" class="bottom_links__item">
            <img src="{{ Vite::asset('resources/images/icons/footer/search.svg') }}" alt="" class="bottom_links__icon">
        </a>
        @endif
        @if ($currentStore->showFilter == 1)
        <span class="bottom_links__item" onclick="toggleShow('filter_wrap')">
            <img src="{{ Vite::asset('resources/images/icons/footer/filter.svg') }}" alt="" class="bottom_links__icon">
        </span>
        @endif
        @if ($currentStore->showFavorites == 1)
        <a href="{{ route('favorites') }}" class="bottom_links__item">
            <img src="{{ Vite::asset('resources/images/icons/footer/heart.svg') }}" alt="" class="bottom_links__icon">
        </a>
        @endif
        @if ($currentStore->showCart == 1)
        <a href="{{ route('cart') }}" class="bottom_links__item">
            <img src="{{ Vite::asset('resources/images/icons/footer/shopping-cart.svg') }}" alt="" class="bottom_links__icon">
            <span class="circle-red"></span>
        </a>
        @endif
        <a href="{{ route('profile') }}" class="bottom_links__item">
            <img src="{{ Vite::asset('resources/images/icons/footer/user.svg') }}" alt="" class="bottom_links__icon">
        </a>
    </div>
</footer>