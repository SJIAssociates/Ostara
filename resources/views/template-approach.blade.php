{{--
  Template Name: Approach Template
--}}

@extends('layouts.app')

@section('content')
  <section id='landing' class='home-section'>
    <div class='container flex flex-col justify-center'>
      <div class='flex flex-wrap flex-row'>
        <div class='w-full md:w-1/2 lg:flex lg:flex-col lg:justify-center'>
          <h1 class='m-0 text-4xl lg:text-6xl text-primary uppercase'>Our Approach</h1>
          <p class='text-lg lg:text-2xl text-grey-darkest'>We're a  boutique, premium advisory firm that acts as a strategic and creative transformation partner driven by these guiding principles:</p>
        </div>
        <div class='w-full md:w-1/2 order-first lg:order-last lg:pl-24'>
          <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/ApproachHeader.jpg' @endphp" class='mb-5 mx-auto w-3/4 md:w-full rounded-full' alt="Ostara Logo">
        </div>
      </div>
    </div>
  </section>
<section class='bg-primary text-white py-10 lg:py-24' id='services'>
  <div class='container'>
    <div class='service-wrap animate__animated animate__fadeInLeft'>
      <div class="service-icon">
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/visionary.png' @endphp">
      </div>
      <div class='service-description'>
        <h2>Visionary</h2>
        <p>We have a 20+ year proven record of innovative and transformational leadership experience, with exceptional outcomes. Ostara has delivered breakthrough results for large global teams, negotiating transformational,industry-defining multibillion- dollar deals, and rebuilding organizational structures and cultures.</p>
      </div>
    </div>

    <div class='service-wrap animate__animated animate__fadeInLeft'>
      <div class="service-icon">
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/principled.png' @endphp">
      </div>
      <div class='service-description'>
        <h2>Principled</h2>
        <p>We’re committed to partnering exclusively with valuesbased, open-minded and inclusive growth-oriented and necessary decisions and investments that create value and fuel growth.</p>
      </div>
    </div>

    <div class='service-wrap animate__animated animate__fadeInLeft'>
      <div class="service-icon">
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/collab.png' @endphp">
      </div>
      <div class='service-description'>
        <h2>Collaborative</h2>
        <p>We bring the best and most innovative thinkers across multiple disciplines to help you fuel growth, coupling  define success and quickly execute.</p>
      </div>
    </div>

    <div class='service-wrap animate__animated animate__fadeInLeft'>
      <div class="service-icon">
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/personalized.png' @endphp">
      </div>
      <div class='service-description'>
        <h2>Personalized</h2>
        <p>We offer an alternative to traditional consulting firms, with their one-size-fits-all models, methodologies and templates, offering authentic, customized strategies for long-term successful outcomes.</p>
      </div>
    </div>
  </div>

</section>
@endsection
