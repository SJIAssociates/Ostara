<header class="banner fixed md:relative z-50 w-full">
  <div class="container-fluid px-4">
    <div class='flex justify-between'>
      <a class="brand font-bold text-2xl uppercase border-none" href="{{ home_url('/') }}"><img src='{{ $logo }}' class='brand-logo h-12 mt-5' alt="{{ $site_name }}"></a>
      <div class='hidden md:block'>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav py-2']) !!}
      @endif
    </div>
      <button id='menuToggle' type='button' class='rounded-full block md:hidden bg-blue-dark w-12 h-12 bg-primary shadow-lg mt-5 relative collapse mr-8' aria-label="Mobile Menu Toggle">
        <span class='sr-only'></span>
        <span class='menu-bar'></span>
      </button>
    </div>
  </div>
</header>
