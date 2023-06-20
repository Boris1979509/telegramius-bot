@extends('layouts.app')
@section('title', $product->title ?? __('common.noData'))
@section('description', '')

@section('content')
  @if ($product)
    <div class="page_with_button page_without_search">
      <div class="header">
        <h1 class="h1_back mb-0">
          @if ($product->articul)
            @lang('vendorСode'): {{ $product->articul }}
          @else
            <a class="truncate" href="{{ redirect()->back()->getTargetUrl() }}">{{ $product->title }}</a>
          @endif
        </h1>
      </div>
      <div class="product product_page">
        <div class="product_images_wrap">
          <div class="slider_images_wrap">
            <div class="slider_list">
              <div class="slider__item">
                <swiper-container class="swiper-{{ $product->id }}" loop="true" init="false">
                  @foreach ($product->images as $image)
                    <swiper-slide>
                      <a href="{{ route('product', ['slug' => $product->slug]) }}">
                        <img class="slider__item-img"
                          src="{{ !empty($image->url) ? $image->url : Vite::asset('resources/images/no-image.jpg') }}"
                          alt="{{ $product->title }}" />
                      </a>
                    </swiper-slide>
                  @endforeach
                </swiper-container>
              </div>
            </div>
          </div>
          @if ($currentStore->showFavorites)
            <div class="product_cart_wrap row">
              @include('include._favorites')
            </div>
          @endif
        </div>
        <p class="product__title">{{ $product->title }}</p>
        <div class="product_price_like row">
          <div class="price_wrap">
            <span class="price">{{ $product->price }}</span>
            @if ($product->new_price)
              <span class="price-old">{{ $product->new_price }}</span>
            @endif
          </div>
          @if ($product->isDiscount)
            <span class="discount">-{{ $product->discount_value }} {{ $product->discount_type }}</span>
          @endif
        </div>
        @php
          $maxLength = 100;
          $showFullText = strlen($product->description) > $maxLength;
          function shortenText($text, $maxLength)
          {
              if (strlen($text) <= $maxLength) {
                  return $text;
              }
          
              $shortenedText = substr($text, 0, $maxLength);
              $lastSpaceIndex = strrpos($shortenedText, ' ');
          
              if ($lastSpaceIndex !== false) {
                  $shortenedText = substr($shortenedText, 0, $lastSpaceIndex);
              }
          
              return $shortenedText . '...';
          }
        @endphp
        <div class="product_desc__wrap">
          @if ($product->description)
            <p class="full-text {{ $showFullText ? '' : 'show' }}">{{ $product->description }}</p>
            <p class="short-text {{ $showFullText ? 'show' : '' }}">{{ shortenText($product->description, $maxLength) }}
            </p>
            <span class="{{ !$showFullText ? 'hidden' : 'info-link' }}" id="toggle-button">
              @lang('common.toggleText.show')
            </span>
          @endif
        </div>
      </div>
      @if ($related_products = $product->related_products)
        <div class="actual_products">
          <h2>@lang('common.relatedProducts.title')</h2>
          <div class="products_list products_list-slider">
            @foreach ($related_products as $related)
              @include('include._product', ['product' => $related])
            @endforeach
          </div>
        </div>
      @endif
      <div class="complain_link row" onclick="toggleShow('complaint_modal_wrap')">
        <img src="{{ Vite::asset('resources/images/icons/complain.svg') }}" alt="" class="complain_icon" />
        <span class="complain_text">@lang('common.complain.title')</span>
      </div>
      @if ($currentStore->showCart)
        <div class="product_add_btn_wrap">
          @if ($currentStore->startWork)
            <span class="product_add__btn">
              @lang('common.buttons.acceptOrdersFrom', ['t' => $currentStore->startWork])
            </span>
          @else
            <a href="{{ route('cart') }}" class="product_add__btn product_add__btn-go">
              @lang('common.buttons.goToCart')
            </a>
            <span class="product_add__btn" id="addCart">
              @lang('common.buttons.addToCart')
            </span>
          @endif
        </div>
      @endif
    </div>
  @else
    @component('partials.alert', [
        'type' => 'info',
        'icon' => 'info',
        'title' => __('common.information'),
        'message' => __('common.noData'),
    ])
    @endif
    @push('scripts')
      <script>
        document.addEventListener('DOMContentLoaded', () => {

          const id = '@json($product->id)'

          // Обрезаем title 
          const title = document.querySelector('.truncate')
          title.innerHTML = truncateWithEllipses(title.innerText, 30)
          /***/

          const btnAdd = document.getElementById('addCart')
          const btnGo = document.querySelector('.product_add__btn-go')
          const toggleButton = document.getElementById('toggle-button')

          const isProductInCart = () => {
            if (!btnGo) return
            if (cart.findById(id)) {
              btnGo.style.display = 'block'
              btnGo.nextElementSibling.style.display = 'none'
            } else {
              btnGo.style.display = 'none'
              btnGo.nextElementSibling.style.display = 'block'
            }
          }

          const toggleDescription = () => {
            const fullText = document.querySelector('.full-text')
            const shortText = document.querySelector('.short-text')

            if (fullText.classList.contains('show')) {
              shortText.classList.add('show')
              fullText.classList.remove('show')
              toggleButton.innerText = '@lang('common.toggleText.show')'
            } else {
              fullText.classList.add('show')
              shortText.classList.remove('show')
              toggleButton.innerText = '@lang('common.toggleText.hide')'
            }
          }

          if (btnAdd) {
            btnAdd.addEventListener('click', () => {
              cart.addItem({
                id,
                qty: 1
              })
              isProductInCart()
            })
          }

          if (toggleButton) {
            toggleButton.addEventListener('click', toggleDescription)
          }

          initializeSwiper('.swiper-' + id);
          isProductInCart()
        })
      </script>
    @endpush

    @include('include._complaint_modal')
    @include('include._final_modal', ['message' => __('common.complain.message')])

  @endsection
