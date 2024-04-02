
@php

@endphp

<div id="contactModal" class="hidden animate-fade-in fixed inset-0 z-[99] overflow-auto bg-black80/40">
  <div class="flex items-center justify-center min-h-screen modal-inside">
    <div class="bg-white border-2 border-primary100 rounded-2xl min-w-[600px] py-[92.5px] animate-scaleUp modal-content flex flex-col items-center justify-center text-center">
      <button class="closeModal absolute top-4 right-4 z-10 hover:scale-110 transition-all duration-500 ease-in-out group/main">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M25 7L7 25" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M25 25L7 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
        <div class="flex items-center flex-col gap-4">
          @svg('images.Envelope')
          <div class="text-h4 font-secondary text-primary100">
            <p>Twoje zapytanie zostało wysłane!</p>
          </div>
          <div class="text-B20 text-black80 font-bold">
            <p>Wkrótce odezwę się do Ciebie</p>
          </div>
        </div>
        <div class="closeModal cursor-pointer group flex items-center gap-2 mt-6">
          <div class="text-B20 font-bold underline underline-offset-[3px] decoration-1">
            <p>Super</p>
          </div>
          @svg('images.Check')
        </div>
      </div>
    </div>
</div>


  