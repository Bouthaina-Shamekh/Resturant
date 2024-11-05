<div data-twe-modal-init="" class="fixed left-0 bottom-0 z-[1055] w-full overflow-hidden outline-none" id="cartAlart" tabindex="-1" aria-labelledby="cartAlartLabel" style="display: none; height: 50px;" aria-modal="true" role="dialog" data-twe-open="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute bottom-0 w-full translate-y-[50px] transition-all duration-300 ease-in-out transform-none opacity-100">
        <div class="pointer-events-auto relative flex w-full flex-col border-none bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="background-color: #424242;">
            <div class="relative flex-auto py-1" data-twe-modal-body-ref="">
                <div class="my-4 py-2 flex items-center justify-center">
                    <p class="text-white">تم إضافة بعض العناصر على السلة وعددهم</p>
                    <button type="button" class="ms-2 inline-block rounded bg-success px-4 py-1.5 text-xs font-medium uppercase leading-normal text-white shadow-success-3 transition duration-150 ease-in-out hover:bg-success-accent-300 hover:shadow-success-2 focus:bg-success-accent-300 focus:shadow-success-2 focus:outline-none focus:ring-0 active:bg-success-600 active:shadow-success-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong total-quantity" data-twe-modal-dismiss="">
                        0
                    </button>
                    <button type="button" class="ms-2 inline-block rounded bg-primary px-4 py-1.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-toggle="modal" data-twe-target="#cart" data-twe-ripple-init="" data-twe-ripple-color="light">
                        إفتح السلة
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- ********* Cart ********** -->

<!--  Cart -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="cart" tabindex="-1" aria-labelledby="cartTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Modal title -->
                <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="CartTitle">
                    سلة المشتريات
                </h5>
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="relative px-4 py-4 my-40 emptyCart">
                <!-- إذا كانت فارغة -->
                <div class="text-center flex justify-center items-center flex-col">
                    <img src="{{ asset('siteweb/img/cart-01.png')}}" alt="cart-01">
                    <span>
                        الطعام اللذيذ دائما جاهز ! <br>
                        تفضل بطلب بعض العناصر اللذيذة من القائمة
                    </span>
                </div>
            </div>

            <!-- بعد الإمتلاء -->
            <div class="relative px-4 py-4 fullCart cart-items" style="display: none;">
                <div class="flex items-baseline justify-between my-2 p-2 border-2 border-neutral-300 shadow-4 rounded-lg">
                    <div class="flex item-center justify-start">
                        <img src="{{ asset('siteweb/img/cart-02.png')}}" alt="cart-01" class="rounded-lg	">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-xl font-bold text-black">فتة بالطحنية</h4>
                            <span class="text-red-500">السعر: 5000 ج</span>
                            <div class="flex flex-row items-center justify-between">
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="text-black font-bold text-base mx-2">1</span>
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-red-700">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-baseline justify-between my-2 p-2 border-2 border-neutral-300 shadow-4 rounded-lg">
                    <div class="flex item-center justify-start">
                        <img src="{{ asset('siteweb/img/cart-02.png')}}" alt="cart-01" class="rounded-lg	">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-xl font-bold text-black">فتة بالطحنية</h4>
                            <span class="text-red-500">السعر: 5000 ج</span>
                            <div class="flex flex-row items-center justify-between">
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="text-black font-bold text-base mx-2">1</span>
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-red-700">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-baseline justify-between my-2 p-2 border-2 border-neutral-300 shadow-4 rounded-lg">
                    <div class="flex item-center justify-start">
                        <img src="{{ asset('siteweb/img/cart-02.png')}}" alt="cart-01" class="rounded-lg	">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-xl font-bold text-black">فتة بالطحنية</h4>
                            <span class="text-red-500">السعر: 5000 ج</span>
                            <div class="flex flex-row items-center justify-between">
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <span class="text-black font-bold text-base mx-2">1</span>
                                <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-red-700">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10 fullCart" style="display: none;">
                <div class="flex items-center justify-around w-full">
                    <button class="px-6 py-2 bg-neutral-300  text-black  rounded-lg hover:bg-amber-600  hover:text-white focus:bg-amber-600 focus:text-white" id="openNumberOfTable" data-twe-toggle="modal" data-twe-target="#numberOfTable" data-twe-ripple-init data-twe-ripple-color="light" onclick="colseModal('fullCart')">التوصيل داخل المطعم</button>
                    <button class="px-6 py-2 bg-neutral-300  text-black  rounded-lg hover:bg-amber-600  hover:text-white focus:bg-amber-600 focus:text-white" id="openCartFull" data-twe-toggle="modal" data-twe-target="#orderData" data-twe-ripple-init data-twe-ripple-color="light" onclick="colseModal('fullCart')">التوصيل خارج المطعم</button>
                </div>
                <div class="flex items-center justify-between w-3/4 mt-2 border-2 border-amber-400 shadow-lg rounded-lg">
                    <span class="text-red-500 font-bold p-2">
                        <span class="total-price">0</span>$
                    </span>
                    <span class="text-black font-bold p-2 bg-neutral-100 rounded-full shadow total-quantity">0</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Add product to Cart -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between rounded-lg border-b-2 border-neutral-100 dark:border-white/10 relative">
                <!-- Modal title -->
                <img src="{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}" alt="" class="rounded-t-lg w-full" style="height: 21rem;">
                <div class="absolute w-full h-full top-0 left-0" style="background-color: #2e2e2e7c;">
                </div>
                <div class="flex flex-col items-center justify-center absolute text-white w-full z-10">
                    <h3 class="font-bold text-lg" id="name-product-1">وجبة مشاوي مشكلة</h3>
                    <p>شوربة تحتوي على الجزر و البطاطا  و قطع الدجاج</p>
                </div>
            </div>

            <!-- Modal body -->
            <div class="relative px-4 py-4">
                <div class="flex items-center justify-center p-5">
                    <div class="flex border-2 border-amber-400 shadow-lg rounded-full">
                        <textarea name="note" class="w-full  bg-white p-2 text-base font-medium outline-0 rounded-r-full" id=""  placeholder="لديك ملاحظات إضافية؟" rows="1"></textarea>
                        <input type="button" value="حفظ" class="bg-amber-400 py-2 px-4 rounded-full text-black text-sm font-semibold hover:bg-amber-800 transition-colors">
                    </div>
                </div>
                <div class="flex items-center justify-center p-5">
                    <div class="flex flex-col w-2/3 space-y-4 p-5">
                        <label class="relative flex items-center justify-around cursor-pointer">
                            <span class="ml-2 text-black w-2/4">طبق كبيرة</span>
                            <span class="ml-2 text-red-500 w-1/4" align="center">5$</span>
                            <input checked="" class="sr-only peer" name="size-1" value="5" data-price="5" type="radio" />
                            <div class="h-6 text-gray-300 peer-checked:text-amber-400  peer-checked:shadow-amber-500/50 transition duration-300 ease-in-out w-1/4" align="left">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </label>
                        <label class="relative flex items-center justify-around cursor-pointer">
                            <span class="ml-2 text-black w-2/4">طبق وسط</span>
                            <span class="ml-2 text-red-500 w-1/4" align="center">8$</span>
                            <input class="sr-only peer" name="size-1" value="8" data-price="8" type="radio" />
                            <div class="h-6 text-gray-300 peer-checked:text-amber-400  peer-checked:shadow-amber-500/50 transition duration-300 ease-in-out w-1/4" align="left">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </label>
                        <label class="relative flex items-center justify-around cursor-pointer">
                            <span class="ml-2 text-black w-2/4">طبق صغير</span>
                            <span class="ml-2 text-red-500 w-1/4" align="center">10$</span>
                            <input class="sr-only peer" name="size-1" value="10" data-price="10" type="radio" />
                            <div class="h-6 text-gray-300 peer-checked:text-amber-400  peer-checked:shadow-amber-500/50 transition duration-300 ease-in-out w-1/4" align="left">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex flex-shrink-0 flex-wrap items-center justify-around rounded-b-md border-t-2 border-neutral-100 p-4  dark:border-white/10">
                <div class="flex items-center justify-around w-3/4">
                    <button class="flex items-center justify-between px-4 py-2 bg-amber-400  text-black  rounded-full hover:bg-amber-500  hover:text-white focus:bg-amber-500 focus:text-white confirm-add" data-product-id="1" onclick="colseModal('addToCartModal')">
                        <span class="text-black font-medium text-base pe-2">إضافة الى سلة الشراء</span>
                        <span class="text-red-600 font-bold text-base">
                            <span class="popup-price" data-product-id="1">5</span> $</span>
                    </button>
                    <div class="flex flex-row items-center justify-between ms-3">
                        <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200 calc-quantity" data-type="minus" data-product-id="1">
                            <i class="fa-solid fa-minus"></i>
                        </button>
                        <span class="text-black font-bold text-base mx-2" id="quantity-1">1</span>
                        <button class="bg-amber-400 hover:bg-amber-700 text-white font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200 calc-quantity" data-type="plus" data-product-id="1">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ********* Order Inside ********** -->

<!--  Number of Table -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="numberOfTable" tabindex="-1" aria-labelledby="numberOfTableTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4">
                <div class="flex flex-col items-center justify-center p-5">
                    <input type="text" class="bg-neutral-200 text-neutral-600 block w-full rounded-full border-0 py-1.5 px-3 text-base" placeholder="أدخل رقم الطاولة" id="numberOfTableInput">
                    <button class="w-full px-6 py-2 mt-3 bg-amber-400 rounded-full hover:bg-amber-500 focus:bg-amber-500 flex items-center justify-between" id="confirmNumberOfTable" data-twe-toggle="modal" data-twe-target="#checkoutInside" data-twe-ripple-init data-twe-ripple-color="light">
                        <span class="text-red-500 font-bold">
                            <span class="total-price">0</span>$
                        </span>
                        <span class="text-black font-bold">تأكيد الشراء</span>
                        <span class="text-black text-base bg-white p-3 w-5 h-5 rounded-full flex items-center justify-center total-quantity">0</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!--  Checkout inside -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="checkoutInside" tabindex="-1" aria-labelledby="checkoutInsideTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark  border-4  border-amber-400 shadow-inner ">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex items-center justify-center">
                <div class="flex flex-col items-center justify-center p-5 w-3/4">
                    <div class="w-full flex items-center justify-between ps-2 shadow-md text-black rounded-full">
                        <span class="text-black">طاولة رقم</span>
                        <span class="text-black bg-amber-400 p-3 w-1/4 h-full rounded-l-full flex items-center justify-center" id="numberOfTableForInside">30</span>
                    </div>
                    <div class="flex flex-col items-center justify-center p-5 w-full" id="cartInsideItems">
                        <div class="w-full flex items-center justify-center mt-3 p-3 shadow-md text-black rounded-full">
                            <!-- 2 بيتزا  -->
                        </div>
                    </div>
                    <div class="w-full flex items-center justify-between ps-2 shadow-md text-black rounded-full">
                        <span class="text-black">الفاتورة</span>
                        <span class="text-black bg-amber-400 p-3 w-1/4 h-full rounded-l-full flex items-center justify-center">
                            <span class="total-price">0</span>$
                        </span>
                    </div>
                    <div class="w-full flex items-center justify-center mt-5">
                        <div class="w-36 h-36 flex flex-col items-center justify-center p-3 text-black rounded-full bg-amber-400 border-4 border-neutral-300 ">
                            <span class="text-black font-bold">20:00:00</span>
                            <span class="text-black font-bold text-2xl">00:06:32</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- ********* Order Outside ********** -->

<!--  Order Out Data -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="orderData" tabindex="-1" aria-labelledby="orderDataTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4">
                <div class="flex flex-col items-center justify-center p-5">
                    <input type="text" class="bg-neutral-200 text-neutral-600 block w-full rounded-full border-0 py-1.5 px-3 text-base" placeholder="أدخل عنوانك" id="address-order-input">
                    <input type="text" class="bg-neutral-200 text-neutral-600 block w-full rounded-full border-0 py-1.5 px-3 text-base mt-3" placeholder="أدخل رقم الجوال">
                    <button class="w-full px-6 py-2 mt-3 bg-amber-400 rounded-full hover:bg-amber-500 focus:bg-amber-500 flex items-center justify-between" id="doneOursideOrder" data-twe-toggle="modal" data-twe-target="#doneOutOrder" data-twe-ripple-init data-twe-ripple-color="light" onclick="colseModal('orderData')">
                        <span class="text-red-500 font-bold">
                            <span class="total-price">0</span>$
                        </span>
                        <span class="text-black font-bold">تأكيد الشراء</span>
                        <span class="text-black text-base bg-white p-3 w-5 h-5 rounded-full flex items-center justify-center total-quantity">0</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Done out Order -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="doneOutOrder" tabindex="-1" aria-labelledby="doneOutOrderTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 w-3/4 max-w-4xl max-h-full">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="height: 70vh;">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex flex-col justify-center items-center h-full">
                <div class="card__form p-4 w-1/3 flex flex-col justify-center items-center">
                    <img src="{{ asset('siteweb/img/gps.png')}}" alt="" class="mb-6">
                    <p class="text-center text-black font-medium text-2xl mb-6">
                        <span>تمت عملية الشراء بنجاح</span>
                        <br>
                        <span>انتظار احضار الطلب في غضون 20 <br> دقيقة</span>
                    </p>
                    <button class="bg-amber-400 hover:bg-amber-700 text-black font-bold w-3/4 p-4 rounded-full flex items-center justify-center transition ease-in duration-200" data-twe-toggle="modal" data-twe-target="#courseOfDemand" data-twe-ripple-init data-twe-ripple-color="light" onclick="colseModal('doneOutOrder')">
                        إنتظار
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Course of Demand -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="courseOfDemand" tabindex="-1" aria-labelledby="courseOfDemandTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 w-3/4 max-w-4xl max-h-full">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="height: 70vh;">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex flex-col justify-center items-center h-full">
                <div class="card__form p-4 flex justify-between items-center">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-[100px] mb-4">
                        <div class="flex item-center justify-between w-2/3 my-3">
                            <div class="flex justify-center items-start w-1/2">
                                <i class="fa-solid fa-location-dot text-amber-400 me-4 text-xl"></i>
                                <div>
                                    <h2>عنوان التسليم</h2>
                                    <p class="text-neutral-400 address-order">مفترق فلسطسن - شارع الشهدا  -عمار الغصين - الطاربق الرابع -شركة بال قول </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-start w-1/2">
                                <i class="fa-regular fa-clock text-amber-400 me-4 text-xl"></i>
                                <div>
                                    <h2>الوقت المقدر للتسليم</h2>
                                    <p class="text-neutral-400">
                                        1:30 - 2:15 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center w-2/3 p-5 m-3 rounded-full shadow-2xl">
                            <span class="text-black text-lg font-medium">الفاتورة النهائية</span>
                            <span class="text-red-500 text-lg font-bold">
                                <span class="total-price">0</span>$</span>
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
                    <div class="flex flex-col justify-center items-center text-black font-medium">
                        <span>مسار الطلب</span>
                        <img src="{{ asset('siteweb/img/map.png')}}" alt="">
                        <span>سيتم التواصل معك لاستلام الطلب</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- ********* Authontication ********** -->

<!-- Login -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="loginModal" tabindex="-1" aria-labelledby="loginModalTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 w-3/4 max-w-4xl max-h-full">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="height: 70vh;">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex flex-col justify-center items-center h-full">
                <div class="card__content w-full h-full flex flex-col justify-center items-center">

                    <div class="card__title">
                        <h1 class="text-3xl font-bold text-center">تسجيل الدخول</h1>
                    </div>
                    <div class="card__form p-4 w-2/4">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <style>
                                [data-twe-input-notch-ref] {
                                    direction: rtl;
                                }
                                [data-twe-input-notch-leading-ref]
                                {
                                    border-radius: 0 30px 30px 0;
                                }
                                [data-twe-input-notch-trailing-ref]{
                                    border-radius: 25px 0 0 25px;
                                }
                                .relative .border {
                                    border-color: rgb(251 191 36) /* #fbbf24 */;
                                }
                            </style>
                            <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                                <input type="email" name="email" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"aria-describedby="email" placeholder="البريد الإلكتروني" dir="rtl" />
                                <label for="email" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    البريد الإلكتروني
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-solid fa-at text-neutral-500"></i>
                                </span>
                            </div>
                            <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                                <input type="password" name="password" id="passwordsss" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="password" placeholder="كلمة المرور" dir="rtl" />
                                <label for="password" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    كلمة المرور
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-regular fa-eye-slash text-neutral-500 cursor-pointer" id="passwordShow"></i>
                                    <i class="fa-regular fa-eye text-neutral-500 cursor-pointer hidden" id="passwordHide"></i>
                                </span>
                            </div>

                            <!--Remember checkbox-->
                            <div class="mb-6 flex items-center justify-start px-4">
                                <input class="relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" type="checkbox" value="" id="exampleCheck251" />
                                <label class="inline-block ps-[0.15rem] pt-[0.15rem] hover:cursor-pointer" for="exampleCheck25">
                                    تذكرني
                                </label>
                            </div>
                            <!--Submit button-->
                            <button type="submit" class="inline-block w-full rounded bg-amber-500 px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
                                تسجيل
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Register -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="registerModal" tabindex="-1" aria-labelledby="registerModalTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 w-3/4 max-w-4xl max-h-full">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="height: 70vh;">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex flex-col justify-center items-center h-full">
                <div class="card__content w-full h-full flex flex-col justify-center items-center">
                    <div class="card__title">
                        <h1 class="text-3xl font-bold text-center">تسجيل جديد</h1>
                        @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                    <div class="card__form p-4 w-2/4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <style>
                                [data-twe-input-notch-ref] {
                                    direction: rtl;
                                }
                                [data-twe-input-notch-leading-ref]
                                {
                                    border-radius: 0 30px 30px 0;
                                }
                                [data-twe-input-notch-trailing-ref]{
                                    border-radius: 25px 0 0 25px;
                                }
                                .relative .border {
                                    border-color: rgb(251 191 36) /* #fbbf24 */;
                                }
                            </style>
                            <div class="relative mb-4 flex flex-wrap items-stretch rounded-lg border-amber-400" data-twe-input-wrapper-init>
                                <input type="text" name="name" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput123" aria-describedby="emailHelp123" placeholder="الاسم" dir="rtl" />
                                <label for="exampleInput123" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    الاسم
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-regular fa-user text-neutral-500"></i>
                                </span>
                            </div>
                            <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                                <input type="email" name="email" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"aria-describedby="email" placeholder="البريد الإلكتروني" dir="rtl" />
                                <label for="email" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    البريد الإلكتروني
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-solid fa-at text-neutral-500"></i>
                                </span>
                            </div>
                            <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                                <input type="password" name="password" id="password" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="password" placeholder="كلمة المرور" dir="rtl" />
                                <label for="password" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    كلمة المرور
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-regular fa-eye-slash text-neutral-500 cursor-pointer" id="passwordShow"></i>
                                    <i class="fa-regular fa-eye text-neutral-500 cursor-pointer hidden" id="passwordHide"></i>
                                </span>
                            </div>
                            <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                                <input type="password" name="password_confirmation" id="confirmpassword" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"aria-describedby="confirmpassword" placeholder="تأكيد كلمة المرور" dir="rtl" />
                                <label for="confirmpassword" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                                    تأكيد كلمة المرور
                                </label>
                                <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                                    <i class="fa-regular fa-eye-slash text-neutral-500 cursor-pointer "  id="confirmpasswordShow" ></i>
                                    <i class="fa-regular fa-eye text-neutral-500 cursor-pointer hidden"  id="confirmpasswordHide" ></i>
                                </span>
                            </div>
                            <!--Subscribe newsletter checkbox-->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                                <div class="mb-6 flex items-center justify-start px-4">
                                    <input class="relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" type="checkbox" value="" id="exampleCheck25" />
                                    <label class="inline-block ps-[0.15rem] pt-[0.15rem] hover:cursor-pointer" for="exampleCheck25">
                                        أوافق على <a href="#" class="text-primary">شروط الخدمة</a>
                                    </label>
                                </div>
                                <div class="mb-6 flex items-center justify-end">
                                    <input class="relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary" type="checkbox" value="" id="exampleCheck24" />
                                    <label class="inline-block ps-[0.15rem] pt-[0.15rem] hover:cursor-pointer" for="exampleCheck24">
                                        أريد تلقي العروض
                                    </label>
                                </div>
                            </div>

                            <!--Submit button-->
                            <button type="submit" class="inline-block w-full rounded bg-amber-400 px-6 pb-2 pt-2.5 text-xl font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
                                إرسال
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ********* Notifications ********** -->

<!--  empty notifications -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="notifications" tabindex="-1" aria-labelledby="notificationsTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[400px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-start rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Modal title -->
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="relative px-4 py-20">
                <!-- إذا كانت فارغة -->
                <div class="text-center flex justify-center items-center flex-col">
                    <i class="fa-regular fa-bell-slash text-8xl text-gray-300"></i>
                    <span class="text-gray-300 font-">
                        لا يوجد إشعارات
                    </span>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                <button class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2" id="openFullNotifications" data-twe-toggle="modal" data-twe-target="#fullNotifications" data-twe-ripple-init data-twe-ripple-color="light">
                    صفحة ممتلئة
                </button>
            </div>
        </div>
    </div>
</div>

<!--  full notifications -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="fullNotifications" tabindex="-1" aria-labelledby="fullNotificationsTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                    <span class="[&>svg]:h-6 [&>svg]:w-6">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                    </button>
                <!-- Modal title -->
                <h5 class="text-xl font-medium leading-normal text-surface dark:text-white" id="CartTitle">
                    الإشعارات
                </h5>

                <i class="fa-solid fa-bell text-amber-400"></i>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4">
                <div class="w-full" align="right">
                    <span class="text-black text-base font-medium">28/8/2024</span>
                </div>
                <div class="flex items-baseline justify-between my-2 p-2 border-2 border-neutral-100 shadow-4 rounded-lg">
                    <div class="flex item-center justify-start">
                        <img src="{{ asset('siteweb/img/malaki.png')}}" alt="cart-01" class="rounded-lg">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-lg font-medium text-black">وجبة الملكي </h4>
                            <span class="text-black">خصم 70% علة وجبة الملكي لمدة ثلاث ايام ابتدء من اليوم</span>

                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-amber-400 me-2">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                        <button class="text-neutral-500 hover:text-red-700">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full" align="right">
                    <span class="text-black text-base font-medium">28/8/2024</span>
                </div>
                <div class="flex items-baseline justify-between my-2 p-2 border-2 border-neutral-100 shadow-4 rounded-lg">
                    <div class="flex item-center justify-start">
                        <img src="{{ asset('siteweb/img/malaki.png')}}" alt="cart-01" class="rounded-lg">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-lg font-medium text-black">وجبة الملكي </h4>
                            <span class="text-black">خصم 70% علة وجبة الملكي لمدة ثلاث ايام ابتدء من اليوم</span>

                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-amber-400 me-2">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                        <button class="text-neutral-500 hover:text-red-700">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="flex flex-shrink-0 flex-wrap items-center justify-end p-4">
                <button class="text-amber-400 hover:text-amber-700 transition-colors duration-200 ease-in">
                    مسح الكل
                </button>
            </div>
        </div>
    </div>
</div>



<!-- ********* Sidebar ********** -->

<!-- Sidebar For (Profile,Settings,Logout) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="rightTopModal" tabindex="-1" aria-labelledby="rightTopModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
            <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
            </button>
        </div>
        <div class="relative" data-twe-modal-body-ref="">
            <div class="flex items-center justify-center my-3">
                <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-1/4">
            </div>
            <div class="flex flex-col items-center justify-center mt-28">
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out border-b-2 border-neutral-300"
                data-twe-toggle="modal"
                data-twe-target="#ProfileModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-user pe-2"></i>
                        <span class="text-xl font-bold ">الملف الشخصي</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out border-b-2 border-neutral-300"
                data-twe-toggle="modal"
                data-twe-target="#SettingsModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-gear pe-2"></i>
                        <span class="text-xl font-bold ">الاعدادات</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out border-b-2 border-neutral-300"
                data-twe-toggle="modal"
                data-twe-target="#BillsModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-file-invoice-dollar pe-2"></i>
                        <span class="text-xl font-bold ">فواتيري</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out"
                data-twe-toggle="modal"
                data-twe-target="#LogoutModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-right-from-bracket pe-2"></i>
                        <span class="text-xl font-bold">تسجيل خروج</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>

            </div>
        </div>
        </div>
    </div>
</div>

<!-- Sidebar (Profile) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="ProfileModal" tabindex="-1" aria-labelledby="ProfileModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
            <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
            </button>
        </div>
        <div class="relative" data-twe-modal-body-ref="">
            <div class="relative flex items-center justify-center my-3 ">
                <div class="w-1/4">
                    <img src="{{ asset('siteweb/img/profile.png')}}" alt="" class="w-full">
                </div>
                <button>
                    <i class="fa-solid fa-pen-to-square text-xl w-10 h-10 text-black bg-amber-400 rounded-full border-2 border-solid border-neutral-400 hover:border-amber-400 hover:text-amber-800 transition-all duration-200 ease-in absolute bottom-[-10px] right-[37%] flex items-center justify-center"></i>
                </button>
            </div>
            <div class="flex flex-col items-center justify-center mt-28">
                <form class="flex flex-col items-center justify-center">
                    <style>
                        [data-twe-input-notch-ref] {
                            direction: rtl;
                        }
                        [data-twe-input-notch-leading-ref]
                        {
                            border-radius: 0 30px 30px 0;
                        }
                        [data-twe-input-notch-trailing-ref]{
                            border-radius: 25px 0 0 25px;
                        }
                        .relative .border {
                            border-color: rgb(251 191 36) /* #fbbf24 */;
                        }
                    </style>
                    <div class="relative mb-4 flex flex-wrap items-stretch rounded-lg border-amber-400" data-twe-input-wrapper-init>
                        <input type="text" name="first-name" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" id="first-name" aria-describedby="first-name" placeholder="الاسم" dir="rtl" />
                        <label for="first-name" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                            الاسم الاول
                        </label>
                        <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                            <i class="fa-regular fa-user text-neutral-500"></i>
                        </span>
                    </div>
                    <div class="relative mb-4 flex flex-wrap items-stretch rounded-lg border-amber-400" data-twe-input-wrapper-init>
                        <input type="text" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" id="last-name" aria-describedby="last-name" placeholder="الاسم" dir="rtl" />
                        <label for="last-name" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                            الاسم الثاني
                        </label>
                        <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                            <i class="fa-regular fa-user text-neutral-500"></i>
                        </span>
                    </div>
                    <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                        <input type="email" id="email" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="email" placeholder="البريد الإلكتروني" dir="rtl" />
                        <label for="email" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                            البريد الإلكتروني
                        </label>
                        <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                            <i class="fa-solid fa-envelope text-neutral-500"></i>
                        </span>
                    </div>
                    <div class="relative mb-4 flex flex-wrap items-stretch" data-twe-input-wrapper-init>
                        <input type="text" id="phone" class="peer block min-h-[auto] flex-auto rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0" aria-describedby="phone" placeholder="رقم الهاتف" dir="rtl" />
                        <label for="phone" class="pointer-events-none absolute right-2 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-300 dark:peer-focus:text-primary">
                            رقم الهاتف
                        </label>
                        <span class="flex items-center whitespace-nowrap rounded-e  px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-surface dark:text-white" id="basic-addon2" >
                            <i class="fa-solid fa-phone text-neutral-500"></i>
                        </span>
                    </div>
                    <!--Submit button-->
                    <button type="submit" class="inline-block w-2/4 rounded-lg bg-amber-400 px-6 py-2 text-xl font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
                        حفظ
                    </button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Sidebar For (Settings) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="SettingsModal" tabindex="-1" aria-labelledby="SettingsModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
            <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
            </button>
        </div>
        <div class="relative" data-twe-modal-body-ref="">
            <div class="flex flex-col items-center justify-center my-3 border-b-2 border-neutral-300">
                <h2 class="text-3xl font-bold my-5 text-black">الإعدادات</h2>
                <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-1/4 mb-2">
            </div>
            <div class="flex flex-col items-center justify-center mt-10">
                <div class="relative w-3/4" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                    <a class="flex items-center text-black justify-between py-2 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out border-b-2 border-neutral-300" href="#" id="languageChange" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                        <div class="flex items-center">
                            <i class="fa-solid fa-globe pe-2"></i>
                            <span class="text-xl font-bold ">اللغة</span>
                        </div>
                        <div class="flex items-center justify-end">
                            <span class="text-base text-neutral-400">Arabic</span>
                            <i class="fa-solid fa-arrow-down ps-2"></i>
                        </div>
                    </a>
                    <ul class="absolute z-[1000] hidden min-w-max list-none overflow-hidden rounded-lg bg-white shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark w-full"
                        aria-labelledby="languageChange" data-twe-dropdown-menu-ref>
                        <label class="relative flex items-center justify-between cursor-pointer m-2">
                            العربية
                            <input type="radio" name="langM" value="ar" checked class="sr-only peer">
                            <div class="group peer ring-0  bg-gradient-to-bl from-neutral-800 via-neutral-700 to-neutral-600  rounded-full outline-none duration-1000 after:duration-300 w-24 h-12  shadow-md  peer-focus:outline-none  after:content-[''] after:rounded-full after:absolute after:[background:#0D2B39]   peer-checked:after:rotate-180 after:[background:conic-gradient(from_135deg,_#b2a9a9,_#b2a8a8,_#ffffff,_#d7dbd9_,_#ffffff,_#b2a8a8)]  after:outline-none after:h-10 after:w-10 after:top-1 after:left-1   peer-checked:after:translate-x-12 peer-hover:after:scale-95 peer-checked:bg-gradient-to-r peer-checked:from-amber-500 peer-checked:to-amber-400">
                            </div>
                        </label>
                        <label class="relative flex items-center justify-between cursor-pointer m-2">
                            الإنجليزية
                            <input type="radio" name="langM" value="en" class="sr-only peer">
                            <div class="group peer ring-0  bg-gradient-to-bl from-neutral-800 via-neutral-700 to-neutral-600  rounded-full outline-none duration-1000 after:duration-300 w-24 h-12  shadow-md  peer-focus:outline-none  after:content-[''] after:rounded-full after:absolute after:[background:#0D2B39]   peer-checked:after:rotate-180 after:[background:conic-gradient(from_135deg,_#b2a9a9,_#b2a8a8,_#ffffff,_#d7dbd9_,_#ffffff,_#b2a8a8)]  after:outline-none after:h-10 after:w-10 after:top-1 after:left-1   peer-checked:after:translate-x-12 peer-hover:after:scale-95 peer-checked:bg-gradient-to-r peer-checked:from-amber-500 peer-checked:to-amber-400">
                            </div>
                        </label>
                    </ul>
                </div>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out  border-b-2 border-neutral-300"
                data-twe-toggle="modal"
                data-twe-target="#aboutUsModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-circle-exclamation pe-2"></i>
                        <span class="text-xl font-bold ">من نحن</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out border-b-2 border-neutral-300"
                data-twe-toggle="modal"
                data-twe-target="#BalancedModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-scale-balanced pe-2"></i>
                        <span class="text-xl font-bold">الأحكام والشروط</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="flex items-center text-black justify-between py-2 w-3/4 hover:ps-3 hover:text-neutral-400 transition-all duration-300 ease-in-out"
                data-twe-toggle="modal"
                data-twe-target="#LogoutModal"
                data-twe-ripple-init
                data-twe-ripple-color="light">
                    <div class="flex items-center">
                        <i class="fa-solid fa-right-from-bracket pe-2"></i>
                        <span class="text-xl font-bold">تسجيل خروج</span>
                    </div>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>

            </div>
        </div>
        </div>
    </div>
</div>

<!-- Sidebar For (Balanced) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="BalancedModal" tabindex="-1" aria-labelledby="BalancedModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
            <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
                <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
                </button>
            </div>
            <div class="relative" data-twe-modal-body-ref="">
                <div class="flex flex-col items-center justify-center my-3 border-b-2 border-neutral-300">
                    <h2 class="text-3xl font-bold my-5 text-black">الأحكام والشروط</h2>
                    <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-1/4 mb-2">
                </div>
                <div class="flex flex-col items-center justify-center mt-10 px-5" style="line-height: 1.8;">
                    <p>
                        لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد
                    </p>
                    <p>
                        لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                    <div class="flex items-center justify-around w-full">
                        <button class="px-6 py-2 bg-amber-100  text-black  rounded-lg hover:bg-amber-600  hover:text-white focus:bg-amber-600 focus:text-white">رفض</button>
                        <button class="px-6 py-2 bg-amber-400  text-black  rounded-lg hover:bg-amber-600  hover:text-white focus:bg-amber-600 focus:text-white">قبول</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar For (bills) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="BillsModal" tabindex="-1" aria-labelledby="BillsModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
            <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
            </button>
        </div>
        <div class="relative" data-twe-modal-body-ref="">
            <div class="flex flex-col items-center justify-center my-3 border-b-2 border-neutral-300">
                <h2 class="text-3xl font-bold my-5 text-black">فواتيري</h2>
                <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-1/4 mb-2">
            </div>
            <div class="flex flex-col items-center justify-center mt-10">
                <div class="bg-[#eeeded3d] w-3/4 rounded-lg shadow-lg py-4 px-2">
                    <div class="card__content">
                        <div class="flex justify-between w-2/4 p-2 rounded-full bg-gray-300">
                            <span class="text-gray-500 font-bold">2:54 PM</span>
                            <span class="text-gray-500 font-bold">8/8/2024</span>
                        </div>
                        <ul class="w-full text-surface dark:text-white">
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">وجبة الملكي</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">1</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">بيتزا</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">2</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">مشروبات</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">3</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                        </ul>
                        <div class="flex justify-between w-full p-4">
                            <span class="font-bold text-black text-lg">المجموع</span>
                            <span class="font-bold text-red-600 text-xl p-3 bg-white">$157</span>
                        </div>
                    </div>
                </div>
                <div class="bg-[#eeeded3d] w-3/4 rounded-lg shadow-lg py-4 px-2">
                    <div class="card__content">
                        <div class="flex justify-between w-2/4 p-2 rounded-full bg-gray-300">
                            <span class="text-gray-500 font-bold">2:54 PM</span>
                            <span class="text-gray-500 font-bold">8/8/2024</span>
                        </div>
                        <ul class="w-full text-surface dark:text-white">
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">وجبة الملكي</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">1</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">بيتزا</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">2</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                            <li class="flex justify-between items-center w-full border-b-2 border-neutral-100 py-4  hover:ps-2 transition-all delay-150 ease-in">
                                <span class="text-black text-base font-normal w-1/3">مشروبات</span>
                                <span class="text-black text-base font-normal w-1/3" align="center">3</span>
                                <span class="text-black text-base font-normal w-1/3" align="left">$15</span>
                            </li>
                        </ul>
                        <div class="flex justify-between w-full p-4">
                            <span class="font-bold text-black text-lg">المجموع</span>
                            <span class="font-bold text-red-600 text-xl p-3 bg-white">$157</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Sidebar For (Logout) -->
<div data-twe-modal-init="" class="fixed left-0 top-0 z-[1055] h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="LogoutModal" tabindex="-1" aria-labelledby="LogoutModalLabel" style="display: none;" aria-hidden="true">
    <div data-twe-modal-dialog-ref="" class="pointer-events-none absolute right-0 h-screen w-full translate-x-full transition-all duration-300 ease-in-out max-[576px]:right-auto  min-[576px]:max-w-[450px] opacity-0">
        <div class="pointer-events-auto relative flex w-full h-screen flex-col border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
        <div class="flex flex-shrink-0 items-center justify-between  p-4 dark:border-b dark:border-white/10">
            <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-300 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:focus:text-neutral-300" data-twe-modal-dismiss="" aria-label="Close">
            <span class="[&amp;>svg]:h-6 [&amp;>svg]:w-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
            </button>
        </div>
        <div class="relative flex flex-col justify-center items-center p-4 h-full w-full" data-twe-modal-body-ref="">
            <div class="flex flex-col items-center justify-center my-3 h-1/4">
                <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" class="w-full h-full mb-2">
            </div>
            <!-- Modal footer -->
            <div class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
                <div class="flex items-center justify-around w-full">
                    <button class="px-6 py-2 border-2 border-solid border-amber-400  text-black  rounded-lg hover:bg-amber-600  hover:text-white focus:bg-amber-600 focus:text-white transition-all duration-300 ease-in-out">تأكيد تسجيل الخروج</button>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>



<!-- ********* Outher ********** -->
<!-- AboutUs -->
<div data-twe-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalTitle" aria-modal="true" role="dialog">
    <div data-twe-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 w-3/4 max-w-4xl max-h-full">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark" style="height: 70vh;">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
                <!-- Close button -->
                <button type="button" class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-twe-modal-dismiss aria-label="Close">
                <span class="[&>svg]:h-6 [&>svg]:w-6">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="relative px-4 py-4 flex flex-col justify-center items-center h-full" style="overflow-y: auto;">
                <div class="card__content w-full h-full flex flex-col justify-center items-center" style="margin-top: 480px">
                    <div class="card__title flex flex-col justify-center items-center">
                        <h1 class="text-3xl font-bold text-center">معلومات عنا</h1>
                        <img src="{{ asset('siteweb/img/logoD.png')}}" alt="" width="85px" >
                    </div>
                    <div class="card__form p-4 w-3/4 flex flex-col justify-start items-center">
                        <p class="text-neutral-400 text-base">
                            لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد  لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد
                        </p>
                        <div class="w-full mt-4">
                            <h2>معلومات الإتصال</h2>
                            <div class="w-full flex items-center justify-between flex-wrap">
                                <div class="flex justify-start items-center w-1/2">
                                    <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                        <i class="fa-solid fa-phone text-black text-xl"></i>
                                    </div>
                                    0984984894984
                                </div>
                                <div class="flex justify-start items-center w-1/2">
                                    <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                        <i class="fa-solid fa-location-dot text-black text-xl"></i>
                                    </div>
                                    لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                </div>
                                <div class="flex justify-start items-center w-1/2">
                                    <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                        <i class="fa-solid fa-envelope text-black text-xl"></i>
                                    </div>
                                    Pamela.Vargas@Mail.Com
                                </div>
                                <div class="flex justify-start items-center w-1/2">
                                    <div class="p-2 bg-neutral-100 me-4 my-2 rounded-lg">
                                        <i class="fa-solid fa-link text-black text-xl"></i>
                                    </div>
                                    Www.Website.Com
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
            </div>

        </div>
    </div>
</div>
