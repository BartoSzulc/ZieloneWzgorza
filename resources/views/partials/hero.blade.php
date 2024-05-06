@php 
    $data = get_field('hero');
    $image = $data['image'] ?? null;
    $title = $data['title'] ?? null;
    $subtitle = $data['subtitle'] ?? null;
    $type = $data['type'] ?? null;
@endphp
@if ($image)
<section class="hero__template relative flex overflow-hidden h-[400px] lg:h-[450px] rounded-hero font-primary mb-60 lg:mb-full">
    <div class="absolute top-0 w-full h-full">
        {!! wp_get_attachment_image($image, 'full', false, ["class" => "object-cover {$class} w-full h-full", 'loading' => 'lazy']) !!}
    </div>
    <div class="container relative z-10 h-[calc(100%-72px)] mt-auto lg:h-full text-white">
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
        </div>
    </div>
</section>
@endif