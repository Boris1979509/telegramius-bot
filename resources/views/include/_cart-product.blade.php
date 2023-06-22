<div class="cart_product">
  <div class="cart_product_top">
    <img src="{{ empty($product->images) ? Vite::asset('resources/images/no-image.jpg') : $product->images[0]->url }}"
      alt="" class="cart_product-img">
    <div class="cart_product__info">
      <p class="cart_product_title">{{ $product->title }}</p>
      @if ($product->articul)
        <span class="cart_product__article">
          <span class="article-title">@lang('common.vendorСode'):</span> {{ $product->articul }}
        </span>
      @endif
      @include('partials.counter')
    </div>
  </div>
  <div class="product_price row">
    <div class="price_wrap">
      <span class="price">{{ $product->price }}</span>
      @if ($product->new_price)
        <span class="price-old">{{ $product->new_price }}</span>
      @endif
    </div>
    @if ($product->isDiscount)
      <span class="discount">-{{ $product->discount_value }} {{ $product->discount_type }}</span>
    @endif
    <img src="{{ Vite::asset('resources/images/icons/remove-icon.svg') }}" alt="" class="remove-icon"
      onclick="removeItemById({{ $product->id }})">
  </div>
</div>
