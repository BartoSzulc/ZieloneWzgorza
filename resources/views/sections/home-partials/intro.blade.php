@php
   $title = $data['title'] ?? null;
   $content = $data['content'] ?? null;
   $list = $data['list'] ?? null;
   $content2 = $data['content2'] ?? null;
@endphp
<section class="home__intro lg:pt-[150px] lg:pb-[72px] py-20" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
       <div class="w-full text-center">
         @if ($title)
          <div class="text-h3 lg:text-h2 font-secondary font-bold mb-11 text-primary100">
             <h2>{!! $title !!}</h2>
          </div>
         @endif
          <div class="flex flex-col text-center gap-5">
            @if ($content)
             <div class="text-B24 font-bold text-black10">
                {!! $content !!}
             </div>
            @endif
             <div class="text-white lg:text-B24 font-bold py-8 text-B20">
               @if ($list)
                <ul class="ul-custom ul-custom--center flex flex-col gap-6 text-center">
                  @foreach ($list as $item)
                  @php($text = $item['item'] ?? null)
                   <li>{!! $text !!}</li>
                   @endforeach
                </ul>
               @endif
               
             </div>
             @if ($content2)
             <div class="text-B24 font-bold text-black10">
                  {!! $content2 !!}
             </div>
             @endif
          </div>
 
          
       </div>
    </div>
 </section>