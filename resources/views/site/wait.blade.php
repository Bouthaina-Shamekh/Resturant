<x-site-second-layout>


    <section class="container mx-auto mt-5 w-90 relative flex justify-center">
        <div class="card__content w-3/4 h-full flex flex-col justify-center items-center" style="margin-top: 100px">
            <div class="card__form p-4 w-1/3 flex flex-col justify-center items-center">
                <img src="{{asset('siteweb/img/gps.png')}}" alt="" class="mb-6">
                <p class="text-center text-black font-medium text-2xl mb-6">
                    <span>تمت عملية الشراء بنجاح</span>
                    <br>
                    <span>انتظار احضار الطلب في غضون 20 <br> دقيقة</span>
                </p>
                <a href="/course_demand.html" class="bg-amber-400 hover:bg-amber-700 text-black font-bold w-3/4 p-4 rounded-full flex items-center justify-center transition ease-in duration-200" data-twe-toggle="modal" data-twe-target="#courseOfDemand" data-twe-ripple-init data-twe-ripple-color="light" onclick="colseModal('doneOutOrder')">
                    إنتظار
                </a>
            </div>
        </div>
    </section>

</x-site-second-layout>
