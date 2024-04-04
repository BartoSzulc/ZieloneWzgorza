@extends('layouts.app')

@section('content')

<section class="home__hero relative overflow-hidden h-[90vh] rounded-hero">
    <div class="absolute top-0 w-full h-full">
        <img class="object-cover object-center w-full h-full" src="{{asset('images/hero_2x2.png')}}" alt="">
    </div>
    <div class="container relative z-10 h-full text-white">
        <div class="flex items-center flex-col gap-2 text-center justify-center h-full">
            <div class="text-h5 lg:text-h4 drop-shadow-lg">
                <span>Odkryj spokój i regeneracje</span>
            </div>
            <div class="text-h2 lg:text-h1 drop-shadow-lg">
                <h1 class="text-shadow-hero">na Zielonych Wzgórzach</h1>
            </div>
        </div>
    </div>
</section>
<section class="home__intro py-[90px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6 relative flex items-center justify-center">
                
                <div class="flex flex-col gap-30 relative z-10 py-6 pl-6">
                    <div class="left-0 absolute w-[calc(100%+24px)] h-full bg-white rounded-3xl shadow-cien-1 top-0">

                    </div>
                    <div class="text-B16 relative z-10">
                        <p>Witamy w Zielonych Wzgórzach, Twojej oazie spokoju w sercu natury. Położone malowniczo w Nieżywięciu, nasze obiekty oferują wyjątkowe połączenie komfortowych noclegów i profesjonalnych usług rehabilitacyjnych.</p>
                    </div>
                    <div class="text-B20 font-bold relative z-10">
                        <p>Odkryj, jak bliskość Borów Tucholskich i jeziora Charzykowskiego sprawia, że każdy moment spędzony u nas jest niezapomniany.</p>
                    </div>
                </div>
            </div>
            <div class="col-span-6 relative h-[420px]">
                <div class="absolute rounded-2xl top-0 w-[calc((673/552)*100%)] h-full right-0">
                    <img src="{{asset('images/intro_img.png')}}" alt="" class="rounded-2xl w-full h-full object-center object-cover">

                </div>
            </div>

        </div>
    </div>
</section>
<section class="home__our--offer py-72">
    <div class="container">
        <div class="text-center text-h3 lg:text-h2 mb-8">
            <h2>Nasza oferta</h2>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-1 text-center">
                <div class="flex flex-col gap-4 p-2">
                    <div class="flex flex-col gap-2 items-center title">
                        <div class="icon">
                            @svg('images.fizjo_icon')
                        </div>
                        <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                            <h3>Fizjoterapia</h3>
                        </div>
                    </div>
                    <div class="text-B16">
                       <p> W "Zielonych Wzgórzach" pragniemy zaoferować naszym gościom kompleksową opiekę zdrowotną, dzięki której pobyt u nas stanie się nie tylko okazją do wypoczynku, ale również do poprawy kondycji fizycznej i zdrowotnej. </p>
                    </div>
                    <div class="inline-flex items-center justify-center">
                        <a href="" class="btn btn--secondary">Dowiedz się więcej</a>
                    </div>
                </div>
                
            </div>
            <div class="col-span-1 text-center">
                <div class="flex flex-col gap-4 p-2">
                    <div class="flex flex-col gap-2 items-center title">
                        <div class="icon">
                            @svg('images.fizjo_icon')
                        </div>
                        <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                            <h3>Turnusy rehabilitacyjne</h3>
                        </div>
                    </div>
                    <div class="text-B16">
                       <p> W "Zielonych Wzgórzach" pragniemy zaoferować naszym gościom kompleksową opiekę zdrowotną, dzięki której pobyt u nas stanie się nie tylko okazją do wypoczynku, ale również do poprawy kondycji fizycznej i zdrowotnej. </p>
                    </div>
                    <div class="inline-flex items-center justify-center">
                        <a href="" class="btn btn--secondary">Poznaj ofertę</a>
                    </div>
                </div>
                
            </div>
            <div class="col-span-1 text-center">
                <div class="flex flex-col gap-4 p-2">
                    <div class="flex flex-col gap-2 items-center title">
                        <div class="icon">
                            @svg('images.fizjo_icon')
                        </div>
                        <div class="text-h4 lg:text-h3 text-primary-500 font-primary">
                            <h3>Fizjoterapia</h3>
                        </div>
                    </div>
                    <div class="text-B16">
                       <p> W "Zielonych Wzgórzach" pragniemy zaoferować naszym gościom kompleksową opiekę zdrowotną, dzięki której pobyt u nas stanie się nie tylko okazją do wypoczynku, ale również do poprawy kondycji fizycznej i zdrowotnej. </p>
                    </div>
                    <div class="inline-flex items-center justify-center">
                        <a href="" class="btn btn--secondary">Poznaj ofertę</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
{{-- @include('sections.home-partials.hero', ['data' => $data = get_field('hero'), 'id' => $data['id'] ?? null]) --}}

@endsection