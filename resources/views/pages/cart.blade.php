@extends('layouts.app')
@section('title', __('common.cart.title'))
@section('description', '')

@section('content')
  <div class="page_with_button page_without_search">
    <div class="header">
      <h1 class="h1_back mb-0">
        <a href="{{ redirect()->back()->getTargetUrl() }}">
          @lang('common.cart.title')
        </a>
      </h1>
    </div>
    <div class="cart">
      @if ($cart['products']->isEmpty())
        @component('partials.alert', [
            'type' => 'info',
            'icon' => 'info',
            'title' => __('common.information'),
            'message' => __('common.cart.cartIsEmpty'),
        ])
        @endcomponent
      @else
        <div class="cart_list row">
          @foreach ($cart['products'] as $product)
            @include('include._cart-product')
          @endforeach
        </div>
      @endif
    </div>
    @if ($currentStore->startWork)
      <span class="product_add__btn">
        @lang('common.buttons.acceptOrdersFrom', ['t' => $currentStore->startWork])
      </span>
    @else
      @if (!$cart['products']->isEmpty())
        <div class="btn_default_wrap">
          <a href="{{ route('order') }}" class="btn_default">
            @lang('common.cart.placeYourOrder')<br />
            <span class="btn_default-value">
              @lang('common.delivery.cartInfo.numberOfGoods', ['total' => $cart['totalQty']])
              {{ $cart['totalPrice'] }}
            </span>
          </a>
        </div>
      @endif
    @endif
  </div>
@endsection
@push('scripts')
  <script>
    const btn = document.querySelector('.btn_default-value');
    document.addEventListener('click', function(event) {
      // Удаление из корзины на +-
      const plus = event.target.classList.contains('product_change_count__icon-plus')
      const minus = event.target.classList.contains('product_change_count__icon-minus')
      const inputValue = minus.nextElementSibling
      if (plus || minus) {
        api.getCart().then(response => {
          const totalPrice = response.totalPrice
          const totalQty = response.totalQty
          if (totalPrice && totalQty) {
            btn.innerText = '@lang('common.delivery.cartInfo.numberOfGoods', ['total' => "' + totalQty + '"])' + ' ' + totalPrice
          } else {
            location.reload()
          }

          console.log(inputValue)

        }).catch(err => {
          console.log(err)
        })
        event.stopImmediatePropagation();
      }
    });
    const removeItemById = (id) => {
      api.removeItemById({
        id
      }).then(() => {
        location.reload()
      }).catch(err => {
        console.log(err)
      })
    }
  </script>
@endpush
