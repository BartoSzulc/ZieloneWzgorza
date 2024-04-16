{{--
  Template Name: Usługi template
--}}


@extends('layouts.app')
@section('content')
@include('partials.hero', ['class' => 'object-center blur-[3px]'])
<section class="services__intro">

  <div class="container">
    <div class="grid grid-cols-12 gap-6">
      <div class="col-span-10 col-start-2 text-center">
        <p>Indywidualnie dobierane programy zabiegów, realizowane pod okiem doświadczonych specjalistów. Szczegółowe informacje o zabiegach znajdziesz poniżej.</p>
      </div>
    </div>
  </div>
</section>
@endsection
