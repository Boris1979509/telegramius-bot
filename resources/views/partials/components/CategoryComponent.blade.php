@if (isset($component) && !empty($component) && $component->show)
  <div class="popular_categories">
    <h2>{{ $component->title }}</h2>
    <div class="{{ $component->display === 'horizontally' ? 'categories_list-slider' : 'categories_list' }}">
      @foreach ($component->categories as $category)
        @include('include._category')
      @endforeach
    </div>
  </div>
@endif
