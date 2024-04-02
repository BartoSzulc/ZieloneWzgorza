@php

    $title = $data['title'] ?? null;
    $realizations = $data['realizations'] ?? null;
    $realizations_mobile = $data['realizations-mobile'] ?? null;
    
@endphp

@if ($title)
<section class="home__hero section_header" @if ($id) id="{{ $id }}" @endif> 
    <div class="header_component">
       <div class="header_content-wrapper">
        @if ($title)
          <div class="header_content">
             <div class="padding-global">
                <div class="container-small">
                   <div class="padding-section-large spacer-xsmall">
                      <div class="text-align-center">
                         <div class="margin-bottom text-h3 lg:text-h2">
                            <h1 class="text-primary100 hero_text text-center font-bold font-secondary">
                                {!! $title !!}
                            </h1>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
        @endif
        @if ($realizations)
          <div class="header_background-images">
            <div class="image-overlay-layer"></div>
             <div class="header_images-layout">
                @foreach ($realizations as $realization)
                @php($image = $realization['image'] ?? null)
                <div class="header_image-wrapper hide-mobile-landscape">
                    {!! wp_get_attachment_image($image, 'full', false, array('class' => 'header_image', 'loading' => 'lazy')); !!}
                </div>
                @endforeach
                @if ($realizations_mobile)
                    @foreach ($realizations_mobile as $realization_mobile)
                    @php($image = $realization_mobile['image'] ?? null)
                    <div class="header_image-wrapper hide-desktop-landscape">
                        {!! wp_get_attachment_image($image, 'full', false, array('class' => 'header_image', 'loading' => 'lazy')); !!}
                    </div>
                    @endforeach
                @endif
             </div>
          </div>
        @endif
       </div>
       <div data-w-id="a8b857c8-a52b-4a0c-6977-5aa98b87c627" class="header_ix-trigger"></div>
    </div>
</section>
@endif
