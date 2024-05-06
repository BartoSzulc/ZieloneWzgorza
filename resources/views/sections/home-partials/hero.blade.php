@php 
    $data = get_field('hero');
    $image = $data['image'] ?? null;
    $title = $data['title'] ?? null;
    $subtitle = $data['subtitle'] ?? null;
    $type = $data['type'] ?? null;
    $links = get_field('links-hero');

@endphp
@if ($image)

<section class="home__hero relative overflow-hidden h-[500px] lg:h-[90vh] rounded-hero font-primary">
    <div class="absolute top-0 w-full h-full">
        {!! wp_get_attachment_image($image, 'full', false, ["class" => "object-cover object-center w-full h-full", 'loading' => 'lazy']) !!}
    </div>
    <div class="container relative z-10 h-full text-white">
        <div class="flex items-center flex-col gap-2 text-center justify-center h-full">
            @if ($type == 'default')
                @if ($subtitle)
                <div class="text-h4 drop-shadow-lg" data-aos="fade-up">
                    <span class="text-shadow-hero">{!! $subtitle !!}</span>
                </div>
                @endif
                @if ($title)
                <div class="text-h2 md:text-h1 drop-shadow-lg" data-aos="fade-up">
                    <h1 class="text-shadow-hero">
                        {!! $title !!}
                    </h1>
                </div>
                @endif
            @else 
                @if ($title)
                <div class="text-h2 md:text-h1 drop-shadow-lg" data-aos="fade-up">
                    <h1 class="text-shadow-hero">
                        {!! $title !!}
                    </h1>
                </div>
                @endif
                @if ($subtitle)
                <div class="text-h4 drop-shadow-lg" data-aos="fade-up">
                    <span class="text-shadow-hero">{!! $subtitle !!}</span>
                </div>
                @endif
                
            @endif
            @if ($links)
            <div class="w-full text-center flex items-center justify-center pt-6 gap-4 flex-wrap">
                @php
                    $i = 0;
                @endphp
                @foreach ($links as $link)
                    <a href="{{ $link['link']['url'] }}" class="btn @if ($i % 2) btn--secondary @else btn--primary @endif">{{ $link['link']['title'] }} </a>
                @php
                    $i++;
                @endphp
                @endforeach
            </div>
            @endif
           
        </div>
    </div>
</section>
@endif
