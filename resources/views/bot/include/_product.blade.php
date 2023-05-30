<a href="{{route('botProduct')}}" class="product">
    <div class="product_images_wrap">

        {{--Если НЕ слайдер--}}
        <div class="slider_images_wrap">
            <div class="slider_list">
                <div class="slider__item">
                    <img src="{{asset('new-bot/images/picture-150x150.jpg')}}" alt="" class="slider__item-img">
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
        {{----}}

        {{--Если слайдер--}}
        {{--<img src="{{asset('new-bot/images/picture-150x150.jpg')}}" alt="" class="product_images-img">--}}
        {{----}}

        <div class="product_cart_wrap row">
            <span class="discount">-50%</span>

            <div class="product_add_wrap">
                <div class="product_add__icon-wrap">
                    <img src="{{asset('new-bot/images/icons/shopping-cart.svg')}}" class="product_add__icon">
                </div>

                {{--<div class="product_change_count__wrap row">
                    <img src="{{asset('new-bot/images/icons/minus-icon.svg')}}" alt="" class="product_change_count__icon product_change_count__icon-minus">
                <input type="text" class="product_change_count__value" value="3">
                <img src="{{asset('new-bot/images/icons/plus-icon.svg')}}" alt="" class="product_change_count__icon product_change_count__icon-plus">
            </div>--}}
        </div>
    </div>

    </div>

    {{--По дизайну название товара максимум в 2 строки--}}
    <p class="product__title">Салат цезарь с курицей и зерновой горчицей</p>

    <div class="product_price_like row">
        <div class="price_wrap">
            <span class="price">1 250 ₽</span>
            <span class="price-old">1590 ₽</span>
        </div>
        <span class="like "></span>{{--При нажатии добавить класс "like-set" --}}
    </div>
</a>

<a href="{{route('botProduct')}}" class="product">
    <div class="product_images_wrap">

        {{--Если НЕ слайдер--}}
        {{--<div class="slider_images_wrap">
            <div class="slider_list">
                <div class="slider__item">
                    <img src="{{asset('new-bot/images/picture-150x150.jpg')}}" alt="" class="slider__item-img">
    </div>
    </div>
    <div class="slider_dots">
        <span class="slider_dots__item" style="width: 20%;"></span>
        <span class="slider_dots__item" style="width: 20%;"></span>
        <span class="slider_dots__item" style="width: 20%;"></span>
        <span class="slider_dots__item" style="width: 20%;"></span>
        <span class="slider_dots__item" style="width: 20%;"></span>
    </div>
    </div>--}}
    {{----}}

    {{--Если слайдер--}}
    <img src="{{asset('new-bot/images/picture-150x150.jpg')}}" alt="" class="product_images-img">
    {{----}}

    <div class="product_cart_wrap row">
        <span class="discount">-50%</span>

        <div class="product_add_wrap">
            {{--<div class="product_add__icon-wrap">
                    <img src="{{asset('new-bot/images/icons/shopping-cart.svg')}}" class="product_add__icon">
        </div>--}}

        <div class="product_change_count__wrap row">
            <img src="{{asset('new-bot/images/icons/minus-icon.svg')}}" alt="" class="product_change_count__icon product_change_count__icon-minus">
            <input type="text" class="product_change_count__value" value="3">
            <img src="{{asset('new-bot/images/icons/plus-icon.svg')}}" alt="" class="product_change_count__icon product_change_count__icon-plus">
        </div>
    </div>
    </div>

    </div>

    {{--По дизайну название товара максимум в 2 строки--}}
    <p class="product__title">Салат цезарь с курицей и зерновой горчицей</p>

    <div class="product_price_like row">
        <div class="price_wrap">
            <span class="price">1 250 ₽</span>
            <span class="price-old">1590 ₽</span>
        </div>
        <span class="like like-set"></span>{{--При нажатии добавить класс "like-set" --}}
    </div>
</a>