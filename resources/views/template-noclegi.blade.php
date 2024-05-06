{{--
  Template Name: Noclegi template
--}}

@php
$args = array(
  'post_type' => 'pokoje',
  'posts_per_page' => -1,
//   'paged' => $paged
);
$query = new WP_Query( $args );

$intro = get_field('intro');
$form = get_field('form');
$title = $form['title'] ?? null;
$title_form = $form['title_form'] ?? null;
$shortcode = $form['shortcode'] ?? null;
@endphp
@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-top blur-[3px]'])
@if ($intro['content'])
<section class="noclegi__intro mb-12 lg:mb-[72px]">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 lg:col-start-2 text-center" data-aos="fade-up">
        {!! $intro['content'] !!}
      </div>
    </div>
  </div>
</section>
@endif
@if ($query->have_posts())
<section class="noclegi__posts">
  <div class="container">
    @while ($query->have_posts())
    @php $query->the_post() @endphp
    @include('partials.pokoje-post')
    @endwhile 
    @php wp_reset_postdata() @endphp
  </div>
</section>
@endif
@if ($shortcode)
<section class="contact__form mt-12 lg:mt-72 pb-12 lg:pb-72 relative overflow-hidden" id="form">
  <div class="container">
    @if ($title)
      <div class="col-span-full mb-8 text-center text-h2 font-primary" data-aos="fade-up">
        <h2>{!! $title !!}</h2>
      </div>
    @endif
      <div class="grid grid-cols-12 gap-6 relative">
          <div class="col-span-full w-full lg:w-[calc((648/1128)*100%)] lg:absolute max-lg:-mb-[60%]">
          <img class="rounded-3xl object-cover object-center w-full h-full" src="{{asset('images/contact-bg.png')}}" alt="">
          </div>
          <div class="col-span-full lg:col-span-8 lg:col-start-5 relative z-10">
              <div class="bg-white rounded-3xl shadow-cien-1 px-6 py-6 lg:mt-[70px]">
                  @if ($title_form)
                  <div class="max-lg:text-center text-h3 font-primary mb-30 font-semibold" data-aos="fade-up">
                      <h3>{!! $title_form !!}</h3>
                  </div>
                  @endif
                  {!! do_shortcode($shortcode) !!}
              </div>
          </div>
      </div>
  </div>
</section>
@endif
@endsection


