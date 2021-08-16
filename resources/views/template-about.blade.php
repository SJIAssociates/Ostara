{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
<section id='landing' class='home-section bg-primary'>
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
  </div>
</section>
<section class='bg-grey-darkest'>
  <div class='container flex flex-col justify-center lg:py-24'>
    <div class='w-full'>
      <div class='w-full lg:w-1/2'>
        <p class='text-lg font-medium lg:text-2xl text-blue-dark'>Our track record consists of visionary leadership and exceptional outcomes; leading large, diverse global teams; developing scaled monetization and new business development strategies; and building organizational structures and cultures to deliver breakthrough results.</p>
      </div>
    </div>
  </div>
</section>
@endsection
