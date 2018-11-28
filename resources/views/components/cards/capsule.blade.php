<div class="my-2 px-2 flex
            w-full md:w-1/2 lg:w-1/4"
>
  <a href="{{ get_permalink() }}"
     class="flex surface-L1 flex-col w-full
            text-blue hover:text-blue-light
           "
  >
    <img src="https://picsum.photos/400/300" />

    <span
      class="block p-4 w-full
             flex-grow
             heading-4"
    >{!! get_the_title() !!}</span>
  </a>
</div>
