<section class="contact__form mt-12 pb-12 lg:mt-72 lg:pb-72 relative overflow-hidden">
    <div class="container">
        <div class="grid grid-cols-12 gap-6 relative">
            <div class="w-[calc((648/1128)*100%)] absolute">
                <img class="rounded-3xl object-cover object-center w-full h-full" src="{{asset('images/contact-bg.png')}}" alt="">
            </div>
            <div class="col-span-8 col-start-5 relative z-10">
                <div class="bg-white rounded-3xl shadow-cien-1 px-6 pt-16 pb-6 mt-[70px]">
                    <div class="text-h4 lg:text-h3 font-primary mb-30 font-semibold">
                        <h2>Zachęcamy do kontaktu</h2>
                    </div>
                    
                    {!! do_shortcode('[contact-form-7 id="eee657f" title="Formularz 1"]') !!}
                </div>
            </div>
        </div>
    </div>
</section>