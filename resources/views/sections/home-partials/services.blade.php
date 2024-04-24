
@php
    $data = get_field('services');
    $title = $data['title'] ?? null;
    $items = $data['items'] ?? null;
    $link = $data['link'] ?? null;
    

@endphp
@if ($data)
<section class="home__uslugi my-12 lg:my-72 relative">
    <div class="container">
        <div class="w-full text-center text-h2 font-primary mb-8">
            <h2>{!! $title !!}</h2>
        </div>
        @if ($items)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-9 lg:gap-y-12">
            @foreach ($items as $item)
                @php
                    $image = $item['image'] ?? null;
                    $title = $item['title'] ?? null;
                    $subtitle = $item['subtitle'] ?? null;
                @endphp 
                @include('partials.usluga')
            @endforeach
            @if ($link)
            <div class="col-span-full flex items-center justify-center">
                <div class="inline-flex">
                    <a href="{{ $link['url'] }}" class="btn btn--primary"><span>{{ $link['title'] }}</span>@svg('images.icons.hand')</a>
                </div>
            </div>
            @endif  
        </div>
        @endif
    </div>
</section>
@endif