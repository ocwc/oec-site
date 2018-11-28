<div class="my-2 px-2 flex
            w-full md:w-1/2 lg:w-1/4"
>
  <a href="{{ $link }}"
     class="flex surface-L1 flex-col w-full
            text-blue hover:text-blue-light
           "
  >
    <img class="w-full"
         src="{!! $image['sizes']['medium'] !!}"
         alt="{!! $image['alt'] !!}" />

    <span
      class="block p-4 w-full
             flex-grow
             heading-4"
    >{!! $title !!}</span>
  </a>
</div>
