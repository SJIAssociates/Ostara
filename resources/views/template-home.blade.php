{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
<section id='landing' class='' style="background: url( @php echo site_url() . '/wp-content/themes/ostara/dist/images/Background.jpg' @endphp ); background-size: cover; background-position: center center;">
  <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg1-line-1.png' @endphp " id='line-1'>
  <div class='container flex flex-col justify-center'>
    <div class='flex'>
      <div class='w-full md:w-1/2'>
        <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/Ostara-logo.png' @endphp" class='home-logo md:w-full animate__animated animate__fadeIn' alt="Ostara Logo">
        <p class='tagline lg:text-4xl animate__animated animate__fadeInUp'>We offer transformational<br>problem-solving.</p>
      </div>
    </div>
  </div>
</section>

<section class='relative scroll-animations' id='homeInfo'>
  <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg1-line-2.png' @endphp " id='line-2'>
  <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg1-line-3.png' @endphp " id='line-3'>

  <div class='container flex flex-col justify-center py-5 md:py-24'>
    <div class='w-full'>
      <div class='w-full md:w-3/4 lg:w-1/2'>
        <p class='text-lg lg:text-2xl animate__animated'>In a world of accelerating challenges, our values-driven boutique advisory firm—borne of 20+ years of dynamic executive leadership—offers strategic, customized solutions for growth and innovation. We have the proven experience and an expansive network to lead you through the critical decisions that will fuel positive change and create real value.</p>
      </div>
    </div>
    <div class='section-2 lg:py-32 xl:my-10'>
      <div class='w-full md:w-1/2'>
        <h2 class='leading-normal text-blue-dark text-2xl lg:text-4xl pt-10 lg:pt-0 animate__animated'>We partner exclusively with open-minded, creative, courageous leaders and entrepreneurs.</h2>
      </div>
    </div>
  </div>
  <div class='home-circle'>
    <p class='animate__animated animate__fadeIn'>These forward-thinking, confident leaders are committed to making the often difficult and necessary decisions and investments that create value, while also nurturing enduring cultures to feed and fuel sustainable bottomline growth. Leaders who operate openly and transparently, and act on “what they don’t want to hear” in order to realize their transformative vision.</p>
  </div>
</section>

<section class='home-section bg-primary text-white' id='Homelist'>
  <img src="@php echo site_url() . '/wp-content/themes/ostara/dist/images/pg1-line-4.png' @endphp " id='line-4'>

  <div class='container flex flex-col justify-center py-5'>
    <h2 class='w-full md:w-3/4 text-2xl md:text-4xl mb-5 lg:mb-10 font-medium'>We craft a custom approach to deliver measurable impact where it’s needed most.</h2>
    <div class='flex flex-row flex-wrap'>
      <div class='w-full md:w-1/2 lg:w-2/5 md:pr-10'>
        <ul class='text-black'>
        <li>Comprehensive market opportunity analysis</li>
        <li>Ready-to-execute rapid, sustainable growth and revenue strategies</li>
        <li>New business and brand extensions</li>
        <li>Content strategy and distribution rollout</li>
        <li>Re-imagining or re-invigoration of sales and go-to-market approach</li>
        <li>Cultivation of winning, high-growth leadership and teams</li>
        <li>Speaking engagements</li>
        <li>Storytelling/Content Creation</li>
        <li>Business Model Development</li>
      </ul>
      </div>
      <div class='w-full md:w-1/2 lg:w-1/3'>
        <ul class='text-black'>
        <li>Growth and commercialization strategy</li>
        <li>Organization & Culture Design</li>
        <li>Change Management</li>
        <li>Subscription economy expertise</li>
        <li>C-Suite/management coaching</li>
        <li>Negotiations</li>
        <li>Board and executive talent development</li>
        <li>Brand positioning and communications</li>
        <li>Interim operational leads?</li>
        <li>Fractional CBO/COO/CCO</li>
      </ul>
    </div>
    </div>
  </div>
</section>


@endsection
