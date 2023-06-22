@php
  $qty = null;
  if (!$product->qty) {
      foreach ($cart as $value) {
          if ($value['id'] == $product->id) {
              $qty = $value['qty'];
          }
      }
  } else {
      $qty = $product->qty;
  }
@endphp

@if ($currentStore->startWork)
  <div class="product_add__icon-wrap">
    <span class="start-work">{{ $currentStore->startWork }}</span>
  </div>
@else
  <div class="product_add__icon-wrap {{ $qty ? 'hidden' : '' }}" data-show="{{ $product->id }}">
    <img onclick="cart.addItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/shopping-cart.svg') }}"
      class="product_add__icon" />
  </div>
  <div class="product_change_count__wrap row {{ !$qty ? 'hidden' : '' }}">
    <img onclick="cart.removeItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/minus-icon.svg') }}"
      alt="" class="product_change_count__icon product_change_count__icon-minus" />
    <input type="text" id="item-total-qty-{{ $product->id }}" class="product_change_count__value" disabled
      value="{{ $qty }}" />
    <img onclick="cart.addItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/plus-icon.svg') }}"
      alt="" class="product_change_count__icon product_change_count__icon-plus" />
  </div>
@endif
