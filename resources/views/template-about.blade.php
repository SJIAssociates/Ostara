{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
<section id='landing' class='home-section bg-blue-dark pt-24 md:pt-0'>
  <svg version="1.1" class='absolute' id="pg3-line-1" x="0px" y="0px"
  	 viewBox="0 0 456 386" xml:space="preserve">
  	<path class="sto" d="M453.39,0c7.03,125.34-25.68,306.21-76.64,386.08"/>
  </svg>
  <div class='container flex flex-col justify-center'>
    <div class='flex flex-wrap flex-row'>
      <div class='w-full md:w-1/2 lg:flex lg:flex-col lg:justify-center'>
        <h1 class='m-0 text-4xl lg:text-6xl text-white uppercase'>{!! App::title() !!}</h1>
        @if( $subtitle )<p class='text-lg text-white lg:text-2xl animate__animated animate__fadeInLeft'>{!! $subtitle !!}</p>@endif
      </div>
      <div class='w-full md:w-1/2 order-first md:order-last md:pl-24 xl:pl-12'>
        <img src="@php echo get_the_post_thumbnail_url() @endphp" class='mb-5 mx-auto w-3/4 md:w-full rounded-full' alt="{!! App::title() !!}">
      </div>
    </div>
  </div>
</section>
<section class='scroll-animations relative'>
  <svg version="1.1" class='absolute' id="pg3-line-2" viewBox="0 0 456 840">
  	<path class="sto" d="M378.91,0c0,0-322.02,460.16-100.6,520"/>
  </svg>
  <svg version="1.1" id="pg3-line-3" viewBox="0 0 970 657" xml:space="preserve">
  	<path class="sto" d="M888,0.21c0,0-268.53,192-57,657"/>
  </svg>
  <div class='container flex flex-col justify-center py-10 lg:py-24'>
    <div class='w-full'>
      <div class='w-full lg:w-1/2'>
        <p class='text-lg font-medium lg:text-2xl text-blue-dark'>Our track record consists of visionary leadership and exceptional outcomes; leading large, diverse global teams; developing scaled monetization and new business development strategies; and building organizational structures and cultures to deliver breakthrough results.</p>
      </div>
    </div>

    <div class='w-full flex flex-row' id="bioContainer">

      @if( have_rows('bio') )
        @while( have_rows('bio') )

          <?php the_row(); ?>
          <div class='person lg:w-1/2 text-center'>
            <a href="<?php the_sub_field('profile_link'); ?>" class='bio_link'>
              <img src="<?php the_sub_field('profile_picture'); ?>" alt="<?php the_sub_field('name'); ?>" class='rounded-full mx-auto'>
              <span class='font-medium text-lg lg:text-2xl py-5 block text-grey-darkest'><?php the_sub_field('name'); ?></span>
            </a>
          </div>
      @endwhile
      @endif

    </div>
  </div>
</section>
<section class='home-section' id='clientQuotes'>
  <svg version="1.1" id="pg3-line-4" viewBox="0 0 970 1093"  xml:space="preserve">
    <path class="sto" d="M826.28-0.22c84.32,188.78,92.56,308.12,33.81,392.99c-190,274.46-817.98-60.81-966.15-173.47"/>
  </svg>


  <div class='container flex flex-col justify-center lg:py-24'>
    <div class='quote-container w-full lg:w-3/4'>
        <blockquote>Mod moloreped quae estruptate landam, experiat is renducia nonse venis eaquo to minctur aut maioriorum reprem fugitatint a qui voluptaspe ped mi, nest earis modic tempost que dero dolore et ea si cullia nonecaesequo blaut labo. Sendae vit doles nus expliquod undi debis sinihillut ut optis et provit facit ab ius int quidenimos adiam quam ant. <span class='quotename'>- Persons Name</span></blockquote>
    </div>
  </div>
</section>
@endsection
