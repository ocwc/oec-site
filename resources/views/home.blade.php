@extends('layouts.app')

@section('container')
  @if(have_rows('home_highlights', 'options'))
    <div class="flex flex-wrap -mx-2 overflow-hidden">
      @while (have_rows('home_highlights', 'options'))@php(the_row())
        @component('components.cards.capsule', [
          'title'=>get_sub_field('title'),
          'url'=>get_sub_field('url'),
          'image'=>get_sub_field('image'),
        ])
        @endcomponent
      @endwhile
    </div>
  @endif
@endsection
