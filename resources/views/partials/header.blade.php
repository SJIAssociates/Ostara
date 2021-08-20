<header class="banner fixed md:relative z-50 w-full">
  <div class="container-fluid px-4">
    <div class='flex justify-between'>
      <a class="brand" href="{{ home_url('/') }}"><img src='{{ $logo }}' class='brand-logo h-8 mt-8 lg:h-12 lg:mt-5' alt="{{ $site_name }}"></a>
      <div class='hidden md:block'>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav py-2']) !!}
      @endif
    </div>
      <button id='menuToggle' type='button' class='block md:hidden collapse' aria-label="Mobile Menu Toggle">
        <span class='sr-only'></span>
        <span class='menu-bar'></span>
      </button>
    </div>
  </div>
</header>
