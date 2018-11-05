<header class="bg-blue border-blue-light md:border-t-40 h-auto">
  <div class="container pt-10 pb-4">
    <div class="flex justify-between">
      <a class="brand" href="{{ home_url('/') }}">
        @svg('logo-inverted', 'h-18')
      </a>
      <nav class="nav-primary flex-grow">
        <div class="flex justify-between items-center">
          <form action="/search" class="inline mb-px ml-4">
            <input
              class="search-form h-27px px-2 w-48
                    bg-transparent
                     border-white border rounded-sm
                     text-sm text-blue-lighter"
              type="text" placeholder="Search" name="s">
          </form>
          @if (has_nav_menu('top_navigation'))
            {!! wp_nav_menu(['theme_location' => 'top_navigation', 'menu_class' => 'nav-top list-reset inline text-sm']) !!}
          @endif
        </div>

        <div class="w-full py-1 border-b border-blue-lighter"></div>

        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation',
                           'menu_class' => 'nav nav-dropdown list-reset inline text-lg flex justify-between',
                          ]) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
