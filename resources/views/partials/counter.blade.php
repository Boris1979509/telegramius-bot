@if ($currentStore->startWork)
  <div class="product_add__icon-wrap">
    <span class="start-work">{{ $currentStore->startWork }}</span>
  </div>
@else
  <div class="product_add__icon-wrap" data-show="{{ $product->id }}">
    <img onclick="addItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/shopping-cart.svg') }}"
      class="product_add__icon" />
  </div>
  <div class="product_change_count__wrap row">
    <img onclick="removeItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/minus-icon.svg') }}"
      alt="" class="product_change_count__icon product_change_count__icon-minus" />
    <input type="text" id="item-total-qty-{{ $product->id }}" class="product_change_count__value" disabled />
    <img onclick="addItem('{{ $product->id }}')" src="{{ Vite::asset('resources/images/icons/plus-icon.svg') }}"
      alt="" class="product_change_count__icon product_change_count__icon-plus" />
  </div>
@endif

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const id = '@json($product->id)'
      const totalInput = document.getElementById('item-total-qty-' + id)
      const total = cart.getItemTotalQty(id)
      const currentBlock = document.querySelector('[data-show="' + id + '"]')

      if (currentBlock) {
        const nextBlock = currentBlock.nextElementSibling;

        if (!total) {
          currentBlock.style.display = 'flex';
          nextBlock.style.display = 'none'
        } else {
          currentBlock.style.display = 'none';
          nextBlock.style.display = 'flex'
          totalInput.value = total
        }
      }
    })
  </script>
@endpush
