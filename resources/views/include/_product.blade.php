<div class="product home_slider {{ $currentStore->numProductsInRow === 1 ? 'item-one' : '' }}">
  <div class="product_images_wrap">
    <div class="slider_images_wrap">
      <div class="slider_list home_slider">
        <div class="slider__item">
          <swiper-container class="swiper-{{ $product->id }}" loop="true" init="false">
            @foreach ($product->images as $image)
            <swiper-slide>
              <img
                class="slider__item-img"
                src="{{ !empty($image->url) ? $image->url : Vite::asset('resources/images/no-image.jpg') }}"
                alt="{{ $product->title }}"
              />
            </swiper-slide>
            @endforeach
          </swiper-container>
        </div>
      </div>
    </div>
      <div class="product_cart_wrap row">
        @if($product->isDiscount)
          <span class="discount">-{{ $product->discount_value }} {{ $product->discount_type }}</span>
        @endif
        @if($currentStore->showCart)
          <div v-if="showCart" class="product_add_wrap">
              @include('partials.counter')
          </div>
        @endif
      </div>
  </div>
  <p class="product__title truncate-{{ $product->id }}">
      {{ $product->title }}
  </p>
  <div class="product_price_like row">
    <div class="price_wrap">
      <span class="price">{{ $product->price }}</span>
        @if($product->new_price)
          <span class="price-old">{{ $product->new_price }}</span>
        @endif
    </div>
    @include('include._favorites')
  </div>
</div>
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const title = document.querySelector('.truncate-' + '@json($product->id)')
      title.innerHTML = truncateWithEllipses(title.innerText, 30)
      initializeSwiper('.swiper-' + '@json($product->id)');
    })
  </script>
@endpush