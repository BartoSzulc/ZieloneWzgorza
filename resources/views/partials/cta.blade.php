@php
    
    $data = get_field('c_t_a');
    $title = $data['title'] ?? null;
    $links = $data['links'] ?? null;
@endphp

@if ($title)
<section class="cta relative h-[600px] lg:h-[350px] py-5 overflow-hidden my-12 lg:my-72 rounded-br-[64px] rounded-tl-[64px] ">
    <div class="absolute top-0 left-0 z-0 w-full h-full">
        <div class="background-cta">
        </div>
    </div>
    <div class="container relative z-10 h-full flex items-center justify-center">
        <div class="flex gap-6 flex-col justify-center items-center text-center text-white">
            @if ($title)
            <div class="text-h3 font-secondary" data-aos="fade-up">
                <h2>{!! $title !!}</h2>
            </div>
            @endif
            @if ($links)
            <div class="flex gap-6" data-aos="fade-up">
                @foreach ($links as $item)
                @php 
                    $link = $item['link'] ?? null;
                @endphp
                <a href="{{ $link['url'] }}" class="btn btn--secondary"><span>{{ $link['title'] }}</span></a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</section>
@endif