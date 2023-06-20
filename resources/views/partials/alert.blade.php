<div class="alert {{ $type }}">
  <div class="alert_content">
    <div class="alert_circle-icon">
      <img src="{{ Vite::asset('resources/images/icons/icon-' . $icon . '.svg') }}" />
    </div>
    <div class="alert_message">
      <div class="alert_title fw-600">{{ $title }}</div>
      <div class="alert_text">
        {{ $message }}
      </div>
    </div>
  </div>
</div>
