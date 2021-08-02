{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
<section id='landing' class='home-section' style="background: url( @php echo site_url() . '/wp-content/themes/SJI_Theme_v3/dist/images/Background.jpg' @endphp ); background-size: cover; background-position: center center;">
  <div class='container flex flex-col justify-center'>
    <div class='flex'>
      <div class='w-1/2'>
        <img src="@php echo site_url() . '/wp-content/themes/SJI_Theme_v3/dist/images/Ostara-logo.png' @endphp">
        <img src=" @asset('images/Ostara-logo.png') ">
        <p class='text-white font-bold text-4xl text-center'>We offer transformational<br>problem-solving.</p>
      </div>
    </div>
  </div>
</section>

<section class='relative' id='homeInfo'>
  <div class='container flex flex-col justify-center py-5 lg:py-24'>
    <div class='w-full' >
      <div class='w-1/2'>
        <p class='text-lg lg:text-2xl'>In a world of accelerating challenges, our values-driven boutique advisory firm—borne of 20+ years of dynamic executive leadership—offers strategic, customized solutions for growth and innovation. We have the proven experience and an expansive network to lead you through the critical decisions that will fuel positive change and create real value.</p>
      </div>
    </div>
    <div class='w-full relative lg:py-24 min-h-screen'>
      <div class='w-1/2'>
        <h2 class='leading-loose font-bold text-blue-dark text-4xl lg:mt-32'>We partner exclusively with open-minded, creative, courageous leaders and entrepreneurs.</h2>
      </div>
    </div>
  </div>
  <div class='home-circle'>
    <p>These forward-thinking, confident leaders are committed to making the often difficult and necessary decisions and investments that create value, while also nurturing enduring cultures to feed and fuel sustainable bottomline growth. Leaders who operate openly and transparently, and act on “what they don’t want to hear” in order to realize their transformative vision.</p>
  </div>
</section>

<section class='home-section bg-primary text-white' id='Homelist'>
  <div class='container flex flex-col justify-center py-5 lg:py-24'>
    <h2 class='w-3/4 font-bold text-4xl mb-5 lg:mb-10'>We craft a custom approach to deliver measurable impact where it’s needed most.</h2>
    <div class='flex flex-row'>
      <div class='w-full md:w-1/2 md:pr-10'>
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
      <div class='w-full md:w-1/3'>
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
