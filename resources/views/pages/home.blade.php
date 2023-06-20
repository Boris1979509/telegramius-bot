@extends('layouts.app')
@section('title', __('common.home.title'))
@section('description', 'Описание магазина')

@section('content')
  <div class="header header__no_back">
    <h1 class="h1">@lang('common.home.title')</h1>
  </div>
  @foreach ($templates as $item)
    @if (isset($item['visible']) && $item['visible'] == 1)
      @include('partials.components.' . $item['name'], [
          'component' => $components->firstWhere('id', $item['id']),
      ])
    @endif
  @endforeach
@endsection
