<x-site-second-layout>

    <section class="container mx-auto mt-5 w-90 relative flex justify-center">
        <div class="card__content w-3/4 h-full flex flex-col justify-center items-center" style="margin-top: 100px">
            <div class="card__form p-4 flex justify-between items-center">
                <div class="flex flex-col justify-center items-center text-black font-medium">
                    <span>عنوان المطعم</span>
                    <img src="{{asset('siteweb/img/map.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="flex flex-col item-center justify-between w-2/3 my-3">
                        <div class="flex justify-center items-start">
                            <i class="fa-solid fa-location-dot text-amber-400 me-4 text-xl"></i>
                            <div>
                                <h2>عنوان المطعم</h2>
                                <p class="text-neutral-400 address-order">مفترق فلسطسن - شارع الشهدا  -عمار الغصين - الطاربق الرابع -شركة بال قول </p>
                            </div>
                        </div>
                        <p class="text-neutral-400 mt-4">لا يوجد أي طلبات حاليا</p>

                    </div>
                    <div class="flex justify-between items-center w-2/3 p-5 m-3">
                        <button class="flex justify-center items-center w-1/2 p-3 rounded-full bg-amber-100 hover:bg-amber-400 focus:bg-amber-400 transition-colors delay-200 ease-in me-4">
                            <i class="fa-regular fa-comments me-4"></i>
                            أرسل رسالة
                        </button>
                        <button class="flex justify-center items-center w-1/2 p-3 rounded-full bg-amber-400 hover:bg-amber-700 focus:bg-amber-700  transition-colors delay-200 ease-in">
                            <i class="fa-solid fa-phone-flip me-4"></i>
                            أتصل بنا
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-site-second-layout>
