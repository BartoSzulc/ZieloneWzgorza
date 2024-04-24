@php 
    $data = get_field('hero');
    $image = $data['image'] ?? null;
    $title = $data['title'] ?? null;
    $subtitle = $data['subtitle'] ?? null;
    $type = $data['type'] ?? null;
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
                <div class="text-h4 drop-shadow-lg">
                    <span class="text-shadow-hero">{!! $subtitle !!}</span>
                </div>
                @endif
                @if ($title)
                <div class="text-h2 md:text-h1 drop-shadow-lg">
                    <h1 class="text-shadow-hero">
                        {!! $title !!}
                    </h1>
                </div>
                @endif
            @else 
                @if ($title)
                <div class="text-h2 md:text-h1 drop-shadow-lg">
                    <h1 class="text-shadow-hero">
                        {!! $title !!}
                    </h1>
                </div>
                @endif
                @if ($subtitle)
                <div class="text-h4 drop-shadow-lg">
                    <span class="text-shadow-hero">{!! $subtitle !!}</span>
                </div>
                @endif
                
            @endif
        </div>
    </div>
</section>
@endif
