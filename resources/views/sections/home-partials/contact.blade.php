@php
    $title = $data['title'] ?? null;
    $shortcode = $data['shortcode'] ?? null;
    $contactinfs = $data['contact_informations'] ?? null;
@endphp
<section class="home__contact" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-6 grid-cols-6">
            <div class="lg:col-span-5 col-span-full">
                @if ($title)
                <div class="text-separate text-h2 font-secondary text-primary20 mb-8">
                    <h2>{!! $title !!}</h2>
                </div>
                @endif
                @if ($contactinfs)
                <div class="contact-information text-B24 font-bold text-white flex flex-col gap-4">
                    @foreach ($contactinfs as $contactinf)
                    @php
                        $icon = $contactinf['icon'] ?? null;
                        $link = $contactinf['link'] ?? null;
                        $text = $contactinf['information'] ?? null;
                    @endphp
                    <div class="item flex items-center gap-4">
                        @if ($link)
                        <a href="{{ $link }}" class="flex items-center gap-4 text-white transition-all duration-500 ease-in-out hover:text-primary100">
                            @if ($icon)
                            <div class="icon">
                                {!! wp_get_attachment_image($icon, 'full', false, ['class' => '']) !!}
                            </div>
                            @endif
                            {!! $text !!}
                        </a>
                        @else
                        @if ($icon)
                        <div class="icon">
                            {!! wp_get_attachment_image($icon, 'full', false, ['class' => '']) !!}
                        </div>
                        @endif
                        <p>{!! $text !!}</p>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            @if ($shortcode)
            <div class="lg:col-span-7 col-span-full">
                {!! do_shortcode($shortcode) !!}
            </div>
            @endif
        </div>
    </div>
</section>