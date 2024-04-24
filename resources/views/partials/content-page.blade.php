@php 
    $data = get_field('hero', 16);
    $image = $data['image'] ?? null;
@endphp

<section class="hero__template relative flex overflow-hidden h-[400px] lg:h-[450px] rounded-hero font-primary mb-60 lg:mb-full">
    <div class="absolute top-0 w-full h-full">
        {!! wp_get_attachment_image($image, 'full', false, ["class" => "object-cover w-full h-full", 'loading' => 'lazy']) !!}
    </div>
    <div class="container relative z-10 h-[calc(100%-72px)] mt-auto lg:h-full text-white">
        <div class="flex items-center flex-col gap-2 text-center justify-center h-full">
          <div class="text-h1 drop-shadow-lg">
            <h1 class="text-shadow-hero">
                @title
            </h1>
        </div>
        </div>
    </div>
</section>
<section class="content__page my-20">
    <div class="container wysiwyg">
       @content
    </div>
</section>