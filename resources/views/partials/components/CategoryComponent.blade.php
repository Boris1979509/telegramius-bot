@if (isset($component) && !empty($component) && $component->show)
  <div class="popular_categories">
    <h2>{{ $component->title }}</h2>
    <div class="categories_list {{ $component->display === 'horizontally' ? 'categories_list-slider' : '' }}">
      @foreach ($component->categories as $category)
        @include('include._category')
      @endforeach
    </div>
  </div>
@endif
