<x-site-second-layout>

    <section class="container mx-auto mt-5 w-90 relative flex justify-center">
        <div class="card__content w-3/4 h-full flex flex-col justify-center items-center" style="margin-top: 100px">
            <div class="card__title flex flex-col justify-center items-center">
                <h1 class="text-3xl font-bold text-center">{{__('site.AboutUs')}}</h1>
            </div>
            <div class="card__form p-4 w-3/4 flex flex-col justify-start items-center">
                <p class="text-zinc-600 text-base mb-4" style="    line-height: 1.8;line-break: auto;">
                    {!! $settings->where('key', 'about_en')->first()->value ?? ' لا توجد بيانات' !!}
                </p>
                <div class="w-full mt-4">
                    <h2>معلومات الإتصال</h2>
                    <div class="w-full flex items-center justify-between flex-wrap">
                        <div class="flex justify-start items-center w-1/2">
                            <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                <i class="fa-solid fa-phone text-black text-xl"></i>
                            </div>
                            {!! $settings->where('key', 'whatsapp')->first()->value ?? ' لا توجد بيانات' !!}
                        </div>
                        <div class="flex justify-start items-center w-1/2">
                            <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                <i class="fa-solid fa-location-dot text-black text-xl"></i>
                            </div>
                            {{ $settings->where('key', 'location')->first()->value ?? ' لا توجد بيانات' }}
                        </div>
                        <div class="flex justify-start items-center w-1/2">
                            <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                <i class="fa-solid fa-envelope text-black text-xl"></i>
                            </div>
                            {{ $settings->where('key', 'contact_email')->first()->value ?? ' لا توجد بيانات' }}
                        </div>
                        <div class="flex justify-start items-center w-1/2">
                            <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                <i class="fa-solid fa-link text-black text-xl"></i>
                            </div>
                            {{ $settings->where('key', 'website')->first()->value ?? ' لا توجد بيانات' }}
                        </div>

                    </div>
                </div>
                <div class="w-full mt-4">
                    <h2>مواقع التواصل الإجتماعي</h2>
                    <div class="w-full flex items-center justify-start flex-wrap">
                        <a href="#" class="p-2 bg-neutral-100 me-4 my-2 text-black rounded-lg hover:bg-blue-400 hover:text-white transition-all delay-250 ease-in">
                            <i class="fa-brands fa-facebook text-xl transition-all delay-250 ease-in "></i>
                        </a>
                        <a href="#" class="p-2 bg-neutral-100 me-4 my-2 text-black rounded-lg hover:bg-green-500 hover:text-white transition-all delay-250 ease-in">
                            <i class="fa-brands fa-whatsapp text-xl transition-all delay-250 ease-in "></i>
                        </a>
                        <a href="#" class="p-2 bg-neutral-100 me-4 my-2 text-black rounded-lg hover:bg-blue-700 hover:text-white transition-all delay-250 ease-in">
                            <i class="fa-brands fa-twitter text-xl transition-all delay-250 ease-in"></i>
                        </a>
                        <a href="#" class="p-2 bg-neutral-100 me-4 my-2 text-black rounded-lg hover:bg-red-500 hover:text-white transition-all delay-250 ease-in">
                            <i class="fa-brands fa-instagram text-xl transition-all delay-250 ease-in"></i>
                        </a>
                        <a href="#" class="p-2 bg-neutral-100 me-4 my-2 text-black rounded-lg hover:bg-amber-400 hover:text-white transition-all delay-250 ease-in">
                            <i class="fa-brands fa-snapchat text-xl transition-all delay-250 ease-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-site-second-layout>
