@extends('layouts.app')
@section('title', __('common.favorites.title'))
@section('description', '')

@section('content')
  <div class="header">
    <h1 class="h1_back">
      <a href="{{ redirect()->back()->getTargetUrl() }}">
        @lang('common.favorites.title')
      </a>
    </h1>

    @include('partials.search')
  </div>
  <div class="top-search">
    @if ($favorites->isEmpty())
      @component('partials.alert', [
          'type' => 'info',
          'icon' => 'info',
          'title' => __('common.information'),
          'message' => __('common.noData'),
      ])
      @endcomponent
    @else
      <div class="products_list">
        @foreach ($favorites as $product)
          @include('include._product')
        @endforeach
      </div>
    @endif
  </div>
@endsection
