@php
  $favorites = session('favorites', []);
@endphp
<span id="like-{{ $product->id }}" class="favorites like {{ in_array($product->id, $favorites) ? 'like-set' : '' }}"
  onclick="toggleLike('{{ $product->id }}')"></span>
