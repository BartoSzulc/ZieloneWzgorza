<div class="flex flex-col gap-4 items-center  px-4 pt-4 pb-6 rounded-3xl transition-all duration-500 ease-in-out hover:shadow-cien-1" data-aos="fade-up">
    <img class="h-[328px] object-cover object-center rounded-2xl" src="@thumbnail('full', false)" alt="">
    <div class="text text-texter flex flex-col gap-4 w-full">
        <div class="title">
            <div class="text-h5 font-semibold font-primary">
                <h3>@title</h3>
            </div>
        </div>
        @if (has_excerpt())
        <div class="excerpt text-B16">
            <p>@excerpt</p>
        </div>
        @endif
    </div>
</div>