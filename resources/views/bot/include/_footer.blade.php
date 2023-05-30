<footer class="footer">
    <div class="bottom_links row">
        <a href="{{route('botIndex')}}" class="bottom_links__item">
            <img src="{{asset('new-bot/images/icons/footer/home.svg')}}" alt="" class="bottom_links__icon">
        </a>
        <a href="{{route('botCategories')}}" class="bottom_links__item">
            <img src="{{asset('new-bot/images/icons/footer/search.svg')}}" alt="" class="bottom_links__icon">
        </a>
        <span class="bottom_links__item" onclick="support.openFilter()">
            <img src="{{asset('new-bot/images/icons/footer/filter.svg')}}" alt="" class="bottom_links__icon">
        </span>
        <a href="{{route('botFavorites')}}" class="bottom_links__item">
            <img src="{{asset('new-bot/images/icons/footer/heart.svg')}}" alt="" class="bottom_links__icon">
        </a>
        <a href="{{route('botCart')}}" class="bottom_links__item">
            <img src="{{asset('new-bot/images/icons/footer/shopping-cart.svg')}}" alt="" class="bottom_links__icon">
            <span class="circle-red"></span>
        </a>
        <a href="{{route('botPersonalArea')}}" class="bottom_links__item">
            <img src="{{asset('new-bot/images/icons/footer/user.svg')}}" alt="" class="bottom_links__icon">
        </a>
    </div>
</footer>
