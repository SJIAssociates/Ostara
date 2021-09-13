<section id='landing' class='home-section bg-blue-dark pt-24 md:pt-0'>
  <div class='container flex flex-col justify-center'>
    <div class='flex flex-wrap flex-row'>
      <div class='w-full md:w-1/2 lg:flex lg:flex-col lg:justify-center'>
        <h1 class='m-0 text-4xl lg:text-6xl text-white uppercase'>{!! App::title() !!}</h1>
        @if( $subtitle )<p class='text-lg text-white lg:text-2xl'>{!! $subtitle !!}</p>@endif
      </div>
      <div class='w-full md:w-1/2 order-first lg:order-last lg:pl-24'>
        @if(get_the_post_thumbnail_url() != '')
          <img src="@php echo get_the_post_thumbnail_url() @endphp" class='mb-5 mx-auto w-3/4 md:w-full rounded-full' alt="{!! App::title() !!}">
        @endif
      </div>
    </div>
  </div>
</section>
