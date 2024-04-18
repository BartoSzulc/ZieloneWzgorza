{{--
  Template Name: Atrakcje template
--}}
@php
$args = array(
  'post_type' => 'atrakcje',
  'posts_per_page' => -1,
//   'paged' => $paged
);
$query = new WP_Query( $args );

@endphp

@extends('layouts.app')
@section('content')
@include('partials.hero' , ['class' => 'object-bottom blur-[3px]'])
@if ($query->have_posts())
<div class="section atrakcje__posts">
    <div class="container">
        <div class="grid grid-cols-3 gap-x-6 gap-y-12">
            @while ($query->have_posts())
                @php $query->the_post() @endphp
                    @include('partials.atrakcje-post')
            @endwhile 
            @php wp_reset_postdata() @endphp
        </div>
    </div>
</div>
@endif
<div id="mapid" class="w-full h-[500px] my-20"></div>
@endsection
