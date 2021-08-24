{{--
  Template Name: Approach Template
--}}

@extends('layouts.app')

@section('content')
  <section id='landing' class='home-section relative'>
    <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg2-line-1.png' @endphp " id='line2-1' class='hidden absolute lg:block'>
    <div class='container flex flex-col justify-center'>
      <div class='flex flex-wrap flex-row'>
        <div class='w-full md:w-1/2 md:flex md:flex-col md:justify-center'>
          <h1 class='m-0 text-4xl lg:text-6xl text-primary uppercase'>{!! App::title() !!}</h1>
          <p class='text-lg lg:text-2xl text-grey-darkest'>{!! $subtitle !!}</p>
        </div>
        <div class='w-full md:w-1/2 order-first md:order-last md:pl-24'>
          <img src="@php echo get_the_post_thumbnail_url() @endphp" class='mb-5 mx-auto w-3/4 md:w-full rounded-full' alt="{!! App::title() !!}">
        </div>
      </div>
    </div>
  </section>
<section class='bg-primary text-white py-10 lg:py-24 relative' id='services'>
  <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg2-line-2.png' @endphp " id='line2-2' class='hidden absolute lg:block'>

  <div class='container'>

    @if( have_rows('services_repeater') )
      @while( have_rows('services_repeater') )

        <?php the_row(); ?>
        <div class='service-wrap animate__animated animate__fadeInLeft'>
          <div class="service-icon">
            <img src="@php the_sub_field('service_image') @endphp">
          </div>
          <div class='service-description'>
            <h2>@php the_sub_field('service_name') @endphp</h2>
            <p>@php the_sub_field('description') @endphp</p>
          </div>
        </div>
    @endwhile
    @endif
  </div>

</section>
@endsection
