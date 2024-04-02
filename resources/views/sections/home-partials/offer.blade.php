@php
$offer = $data['offer'] ?? null;
@endphp

<section class="home__offer" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
       <div class="wrapper light">
         @if ($offer)
          <div class="cards ">

            @foreach ($offer as $item)
            @php
               $heading = $item['heading'] ?? null;
               $content = $item['content'] ?? null;
               $content2 = $item['content2'] ?? null;
               $subheading = $item['subheading'] ?? null;
               $content3 = $item['content3'] ?? null;
               $image = $item['image'] ?? null;
            @endphp
            <div class="card-wrapper">
             <div class="card work_card ">
                <div class="grid grid-cols-12 gap-6">
                   <div class="col-first col-span-full lg:col-span-6 flex flex-col gap-4 justify-center">
                     @if ($heading)
                      <div class="text-h3 text-primary100 font-secondary">
                         <h2>{!! $heading !!}</h2>
                      </div>
                     @endif
                     @if ($content)
                      <div class="text-B24 text-black10 font-bold">
                        {!! $content !!}
                      </div>
                     @endif
                     @if ($content2)
                      <div class="text-B24 font-light text-black10">
                       {!! $content2 !!}
                     </div>
                     @endif
                     @if ($subheading and $content3)
                      <div class="mt-4 lg:mt-6">
                        @if ($subheading)
                         <div class="text-h4 text-primary60 font-secondary">
                            <h3>{!! $subheading !!}</h3>
                         </div>
                        @endif
                        @if ($content3)
                         <ul class="ul-custom text-black10 text-B20 font-bold">
                           {!! $content3 !!}
                         </ul>
                        @endif
                      </div>
                     @endif
                   </div>
                  @if ($image)
                   <div class="lg:col-start-8 lg:col-span-5 col-span-full flex items-center justify-center">
                     {!! wp_get_attachment_image($image, 'full', false, ['class' => 'rounded-2xl aspect-[456/560] lg:h-[560px] h-[440px] object-cover']) !!}
                   </div>
                  @endif
                </div>
             </div>
            </div>
            @endforeach
          </div>
         @endif
       </div>
    </div>
 </section>