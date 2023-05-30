<div id="tab" class="tabs search_tabs">
  <div class="tab_list row">
    @foreach ($tabs as $tab)
    <label data-tab="{{ $tab['id'] }}" class="tab_item order_label {{ $loop->first ? 'active' : '' }}">
      <span class="tab_item_body">
        {{ $tab['title'] }} </span>
    </label>
    @endforeach
  </div>
  <div class="tab_content">
    @foreach ($tabs as $tab)
    <div id="{{ $tab['id'] }}" class="tab_pane {{ $loop->first ? 'active' : '' }}">
      @include('partials.' . $tab['content'])
    </div>
    @endforeach
  </div>
</div>