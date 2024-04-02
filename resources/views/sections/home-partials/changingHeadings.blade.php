@php($headings = $data['headings'] ?? null)
@php($title = $data['title'] ?? null)

@if ($headings)
<section class="home__click relative" @if ($id) id="{{ $id }}" @endif>
    <div class="container">
       <div class="layout_component">
          <div class="layout_content w-full text-center flex items-center justify-center flex-col">
            @if ($title)
             <div class="text-h5 lg:text-B24 text-black10 font-bold mb-4">
                <p>{!! $title !!}</p>
             </div>
            @endif
             @if ($headings)
             <div class="layout_heading-list">
               @foreach ($headings as $heading)
               @php($text = $heading['heading'] ?? null)
                <div class="layout_heading">
                   <div class="text-h3 lg:text-h2 font-secondary font-bold text-primary100">
                      <p>{!! $text !!}</p>
                   </div>
                </div>
               @endforeach
             </div>
            @endif
             
          </div>
       </div>
    </div>
 </section>
@endif