<section class="contact__form mt-12 pb-12 lg:mt-72 lg:pb-72 relative overflow-hidden">
    <div class="container">
        <div class="grid grid-cols-12 lg:gap-6 relative">
            <div class="col-span-full w-full lg:w-[calc((648/1128)*100%)] lg:absolute max-lg:-mb-[60%]">
                <img class="rounded-3xl object-cover object-center w-full h-full" src="{{asset('images/contact-bg.png')}}" alt="">
            </div>
            <div class="col-span-full lg:col-span-8 lg:col-start-5 relative z-10">
                <div class="bg-white rounded-3xl shadow-cien-1 px-6 pt-8 lg:pt-16 pb-6 mt-[70px]">
                    <div class="max-lg:text-center text-h3 font-primary mb-30 font-semibold" data-aos="fade-up">
                        <h2>Zachęcamy do kontaktu</h2>
                    </div>
                    
                    {!! do_shortcode('[contact-form-7 id="eee657f" title="Formularz 1"]') !!}
                </div>
            </div>
        </div>
    </div>
</section>