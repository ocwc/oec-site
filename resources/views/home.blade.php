@extends('layouts.app')

@section('container')
  <div class="flex flex-wrap -mx-2 overflow-hidden">
    @while (have_posts()) @php the_post() @endphp

      @component('components.cards.capsule')
      @endcomponent
    @endwhile
  </div>
@endsection
