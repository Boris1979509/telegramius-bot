@if(isset($component) && !empty($component) && $component->show)
  @if($component->title !== null)
    <h2>{{ $component->title }}</h2>
  @endif
  <div class="{{ $component->display === 'horizontally' ? 'products_list-slider' : 'products_list' }}">
    <div id="products" class="products_list">
    @foreach($component->products as $product)
      @include('include._product')
    @endforeach
  </div>
</div>
{{-- @else
@component('partials.alert', ['type' => 'info', 'icon' => 'info', 'title' => __('common.information')])
  @slot('alert_text')
    @lang('common.noData')
  @endslot
@endcomponent --}}
@endif

@push('scripts')
<script>
  const addItem = id => {
    const qty = 1
    const totalInput = document.getElementById('item-total-qty-' + id)
    const currentBlock = document.querySelector('[data-show="' + id + '"]')
    const nextBlock = currentBlock.nextElementSibling;
    if(!+totalInput.value) {
      currentBlock.style.display = 'none'
      nextBlock.style.display = 'flex'
    }
    cart.addItem({ id, qty })
    totalInput.value++
  }
  const removeItem = id => {
    const totalInput = document.getElementById('item-total-qty-' + id)
    cart.removeItem(id)
    totalInput.value--
      if(!+totalInput.value) {
        const currentBlock = document.querySelector('[data-show="' + id + '"]')
        const nextBlock = currentBlock.nextElementSibling;
        currentBlock.style.display = 'flex';
        nextBlock.style.display = 'none'
      }
  }
</script>
@endpush


