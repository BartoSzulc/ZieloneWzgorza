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

@endphp
@extends('layouts.app')
@section('content')

@include('partials.hero' , ['class' => 'object-center max-3xl:object-top blur-[3px]'])
<section class="noclegi__intro mb-[72px]">
  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-full lg:col-span-10 lg:col-start-2 text-center">
        <p>Zapraszamy na turnusy rehabilitacyjne z pełnym pakietem usług: od 7 do 14 noclegów, 3 posiłki dziennie, zabiegi rehabilitacyjne, a także liczne aktywności zwiększające efektywność kuracji.</p>
      </div>
    </div>
  </div>
</section>
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

@endsection
