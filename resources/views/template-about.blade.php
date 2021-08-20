{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
<section id='landing' class='home-section bg-blue-dark'>
  <div class='container flex flex-col justify-center'>
    <div class='flex flex-wrap flex-row'>
      <div class='w-full md:w-1/2 lg:flex lg:flex-col lg:justify-center'>
        <h1 class='m-0 text-4xl lg:text-6xl text-white uppercase'>About Us</h1>
        <p class='text-lg text-white lg:text-2xl'>We bring over 20 years of C-suite leadership and operating experience in media, tech and the public sector. Along with our network of experts and resources, we assist companies and management teams to better realize their growth potential.</p>
      </div>
      <div class='w-full md:w-1/2 order-first lg:order-last lg:pl-24'>
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/AboutHeader.jpg' @endphp" class='mb-5 mx-auto w-3/4 md:w-full rounded-full' alt="Ostara Logo">
      </div>
    </div>
  </div>
</section>
<section class=''>
  <div class='container flex flex-col justify-center lg:py-24'>
    <div class='w-full'>
      <div class='w-full lg:w-1/2'>
        <p class='text-lg font-medium lg:text-2xl text-blue-dark'>Our track record consists of visionary leadership and exceptional outcomes; leading large, diverse global teams; developing scaled monetization and new business development strategies; and building organizational structures and cultures to deliver breakthrough results.</p>
      </div>
    </div>

    <div class='w-full flex flex-col lg:flex-row' id="bioContainer">

      @if( have_rows('bio') )
        @while( have_rows('bio') )

          <?php the_row(); ?>
          <div class='person lg:w-1/2 text-center lg:px-24'>
            <img src="<?php the_sub_field('profile_picture'); ?>" alt="<?php the_sub_field('name'); ?>" class='rounded-full mx-auto'>
            <span class='font-medium text-lg lg:text-2xl py-5 block'><?php the_sub_field('name'); ?></span>
          </div>
      @endwhile
      @endif

    </div>
  </div>
</section>
<section class='home-section' id='clientQuotes'>
  <div class='container flex flex-col justify-center lg:py-24'>
    <div class='w-full'>
      <div class='w-full lg:w-1/2'>
        <div>
          <blockquote>Mod moloreped quae estruptate landam, experiat is renducia nonse venis eaquo to minctur aut maioriorum reprem fugitatint a qui voluptaspe ped mi, nest earis modic tempost que dero dolore et ea si cullia nonecaesequo blaut labo. Sendae vit doles nus expliquod undi debis sinihillut ut optis et provit facit ab ius int quidenimos adiam quam ant. <span class='quotename'>- Persons Name</span></blockquote>

        </div>
      </div>
      <div class='w-full lg:w-1/2'>
        <div>
          <blockquote>Mod moloreped quae estruptate landam, experiat is renducia nonse venis eaquo to minctur aut maioriorum reprem fugitatint a qui voluptaspe ped mi, nest earis modic tempost que dero dolore et ea si cullia nonecaesequo blaut labo. Sendae vit doles nus expliquod undi debis sinihillut ut optis et provit facit ab ius int quidenimos adiam quam ant. <span class='quotename'>- Persons Name</span></blockquote>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
