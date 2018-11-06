<header class="bg-blue border-blue-light lg:border-t-40 h-auto mb-8 relative">
  <div class="container px-0
              lg:px-4 lg:pt-10 lg:pb-4">
    <div class="flex justify-between">
      <a href="{{ home_url('/') }}"
         class="brand
                 flex items-center
                 px-4 lg:pl-none"
      >
        @svg('logo-inverted', 'h-18 hidden lg:block')
        @svg('logo-inverted-mobile', 'h-10 lg:hidden')
      </a>

      <a class="menu-mobile h-18 w-18 lg:hidden
                flex items-center justify-center
                bg-blue-light
               ">
        @svg('menu', 'h-6')
      </a>

      <nav class="nav-primary bg-blue
                  container lg:px-0
                  pt-2 pb-6 lg:py-0
                  absolute lg:static
                  flex-col lg:flex-row
                  flex-grow
                  w-full lg:w-auto
                  hidden lg:block">
        <form action="/search"
              class="block w-full lg:inline
                       mt-4 lg:mt-0
                       mb-px lg:ml-4
                       order-3 lg:order-1"
        >
          <input
            class="search-form h-27px px-2
                    w-full lg:w-48
                    bg-transparent
                     border-blue-lighter border rounded-sm
                     text-sm text-blue-lighter"
            type="text" placeholder="Search" name="s">
        </form>
        @if (has_nav_menu('top_navigation'))
          {!! wp_nav_menu(['theme_location' => 'top_navigation',
                           'menu_class' => 'nav-top list-reset inline text-sm',
                           'container_class' => 'inline-block order-2 lg:w-100 lg:text-right']) !!}
        @endif


        <div class="w-full py-1 border-b border-blue-lighter hidden lg:block"></div>

        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation',
                           'menu_class' => 'nav nav-dropdown list-reset text-lg lg:flex lg:inline  justify-between',
                           'container_class' => 'order-1 lg:order-3',
                          ]) !!}
        @endif
      </nav>

    </div>
  </div>
</header>
