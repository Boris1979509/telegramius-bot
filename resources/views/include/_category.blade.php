<a href="{{ route('category', ['slug' => $category->slug]) }}"
  class="category {{ $currentStore->numProductsInRow === 1 ? 'item-one' : '' }}">
  <img src="{{ !empty($category->image) ? $category->image : Vite::asset('resources/images/no-image.jpg') }}"
    alt="{{ $category->name }}" class="category-img">
  @if ($category->is_visible_name)
    <span class="category__title truncate-{{ $category->id }}">{{ $category->name }}</span>
  @endif
</a>
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const title = document.querySelector('.truncate-' + '@json($category->id)')
      title.innerHTML = truncateWithEllipses(title.innerText, 25)
    })
  </script>
@endpush
