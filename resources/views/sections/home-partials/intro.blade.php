@php
    $data = get_field('intro');
    $content = $data['content'] ?? null;
    $content_sec = $data['content_sec'] ?? null;

@endphp

@if ($data)
<section class="home__intro lg:pt-[90px] lg:pb-10 overflow-hidden">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-full max-lg:text-center lg:col-span-6 relative flex items-center justify-center">
                
                <div class="flex flex-col gap-30 relative z-10 lg:py-6 lg:pl-6 p-8">
                    <div class="left-0 absolute w-[calc(100%+24px)] h-full bg-white lg:rounded-3xl lg:shadow-cien-1 top-0 max-lg:hidden">

                    </div>
                    @if ($content)
                    <div class="text-B16 relative z-10" data-aos="fade-up">
                        {!! $content !!}
                    </div>
                    @endif
                    @if ($content_sec)
                    <div class="text-B20 font-bold relative z-10" data-aos="fade-up">
                        {!! $content_sec !!}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-span-6 relative h-[420px] max-lg:hidden">
                <div class="absolute rounded-2xl top-0 w-[calc((673/552)*100%)] h-full right-0">
                    <img src="{{asset('images/intro_img.png')}}" alt="" class="rounded-2xl w-full h-full object-center object-cover">

                </div>
            </div>
        </div>
    </div>
</section>
@endif