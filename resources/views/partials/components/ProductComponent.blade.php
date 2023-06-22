@if (isset($component) && !empty($component) && $component->show)
  @if ($component->title !== null)
    <h2>{{ $component->title }}</h2>
  @endif
  <div class="{{ $component->display === 'horizontally' ? 'products_list-slider' : 'products_list' }}">
    <div id="products" class="products_list">
      @php
        $cart = session('cart', []);
      @endphp
      @foreach ($component->products as $product)
        @include('include._product')
      @endforeach
    </div>
  </div>
@endif
