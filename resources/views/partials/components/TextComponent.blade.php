@if(isset($component) && !empty($component) && $component->show)
  <div class="info_block">
    <h2>{{ $component->title }}</h2>
    <p class="info_block__text">
      {{ $component->description }}
    </p>
  </div>
@endif