@include('partials.search')
@include('partials.tabs', [
    'tabs' => [
        ['id' => 't_products', 'title' => __('common.goods.title'), 'content' => 'product'],
        ['id' => 't_categories', 'title' => __('common.categories.title'), 'content' => 'category'],
    ],
])
@push('scripts')
  <script src="{{ Vite::asset('resources/js/components/Search.js') }}" type="module"></script>
@endpush
