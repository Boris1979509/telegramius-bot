@if(isset($component) && !empty($component) && $component->show)
  <div class="home_slider">
    <div class="slider_images_wrap">
      @if($component->images->count())
        <swiper-container loop="true" class="swiper" init="false">
          @foreach ($component->images as $file)
            <swiper-slide>
              <img
                class="slider__item-img"
                src="{{ $file->url }}"
                alt=""
              />
            </swiper-slide>
          @endforeach
        </swiper-container>
      @endif
    </div>
  </div>
@endif

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      initializeSwiper('.swiper');
    });
  </script>
@endpush