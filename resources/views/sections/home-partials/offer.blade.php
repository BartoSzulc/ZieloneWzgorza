@php
    $data = get_field('offer');
    $title = $data['title'] ?? null;
    $items = $data['items'] ?? null;
    
    

@endphp

@if ($data)
<section class="home__our--offer my-12 lg:my-72">
    <div class="container">
        @if ($title)
        <div class="text-center text-h2 mb-8 font-primary">
            <h2>{!! $title !!}</h2>
        </div>
        @endif
        @if ($items)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            @foreach ($items as $item)
            @php
                $icon = $item['icon'] ?? null;
                $title = $item['title'] ?? null;
                $content = $item['content'] ?? null;
                $link = $item['link'] ?? null;
            @endphp
            <div class="col-span-1 text-center">
                <div class="h-full flex flex-col gap-4 p-2 pb-8 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1">
                    <div class="flex flex-col gap-2 items-center title justify-center py-2">
                        @if ($icon)
                        <div class="icon">
                            <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}" class="">
                        </div>
                        @endif
                        @if ($title)
                        <div class="text-h3 text-primary-500 font-primary">
                            <h3>{!! $title !!}</h3>
                        </div>
                        @endif
                    </div>
                    @if ($content)
                    <div class="text-B16">
                        {!! $content !!}
                    </div>
                    @endif
                    @if ($link)
                    <div class="inline-flex items-center justify-center grow-0 mt-auto">
                        <a href="{{ $link['url'] }}" class="btn btn--secondary">{{ $link['title'] }}</a>  
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endif