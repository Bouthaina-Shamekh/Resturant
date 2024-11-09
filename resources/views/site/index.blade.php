<x-site-layout>
    <!-- start Home Page -->
    <!-- Categories -->
    <section id="categories-container" class="container mx-auto mt-10 w-90 relative">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold my-5 text-black">قائمتنا</h2>
            <button  id="show-more" onclick="showMore()" class="text-lg font-bold text-neutral-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                عرض المزيد
            </button>
        </div>
        <ul id="categories" class="mb-5 flex list-none flex-col flex-wrap ps-0 md:flex-row transition duration-500 ease-in" role="tablist" data-twe-nav-ref>
            <li role="all" class="flex-auto md:flex-none md:w-50 text-center">
                <a
                    href="#category-all"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-all"
                    data-twe-nav-active
                    role="tab"
                    aria-controls="category-all"
                    aria-selected="true"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food8.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">الرئيسية</span>
                    </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <li role="soups" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-soups"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="category-soups-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-soups"
                    role="tab"
                    aria-controls="category-soups"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden  rounded-full">
                        <img src="{{asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">شوربات</span>
                </a>
            </li>
            <li role="pastries" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-pastries-01"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-profile-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-pastries"
                    role="tab"
                    aria-controls="category-pastries"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">مخبوزات</span>
                </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <li role="soups" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-soups"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="category-soups-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-soups"
                    role="tab"
                    aria-controls="category-soups"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden  rounded-full">
                        <img src="{{asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">شوربات</span>
                </a>
            </li>
            <li role="pastries" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-pastries-01"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-profile-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-pastries"
                    role="tab"
                    aria-controls="category-pastries"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">مخبوزات</span>
                </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <li role="soups" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-soups"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="category-soups-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-soups"
                    role="tab"
                    aria-controls="category-soups"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden  rounded-full">
                        <img src="{{asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">شوربات</span>
                </a>
            </li>
            <li role="pastries" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-pastries-01"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-profile-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-pastries"
                    role="tab"
                    aria-controls="category-pastries"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">مخبوزات</span>
                </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <li role="soups" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-soups"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="category-soups-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-soups"
                    role="tab"
                    aria-controls="category-soups"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden  rounded-full">
                        <img src="{{asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">شوربات</span>
                </a>
            </li>
            <li role="pastries" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-pastries-01"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-profile-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-pastries"
                    role="tab"
                    aria-controls="category-pastries"
                    aria-selected="false"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">مخبوزات</span>
                </a>
            </li>
            <li role="dishes" class="text-center flex-auto md:flex-none md:w-50 ">
                <a
                    href="#category-dishes"
                    class="my-2 block rounded rounded-full shadow bg-zinc-100 px-7 pb-3.5 pt-4 text-xl font-bold  leading-tight text-black transition duration-250 ease-in data-[twe-nav-active]:!bg-amber-400 data-[twe-nav-active]:text-white md:me-4 flex items-center justify-start"
                    id="pills-home-tab01"
                    data-twe-toggle="pill"
                    data-twe-target="#category-dishes"
                    role="tab"
                    aria-controls="category-dishes"
                    >
                    <div class="w-10 h-10 overflow-hidden rounded-full">
                        <img src="{{asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                    </div>
                    <span class="ms-2">أطباق</span>
                    </a>
            </li>
            <button  id="show-more-2" onclick="showMore()" class="text-lg font-bold text-neutral-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                عرض المزيد
            </button>
            <button  id="show-less" onclick="showLess()" class="text-lg font-bold text-neutral-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                عرض أقل
            </button>
        </ul>
    </section>

    <!-- Products -->
    <section id="products" class="container mx-auto mt-5 w-90 relative">
        <!--Pills content-->
        <div class="mb-6">
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="category-all" role="all" aria-labelledby="category-all" data-twe-tab-active>
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-bold my-5 text-black">وجبات مميزة</h2>
                    <a href="#" class="text-lg font-bold text-amber-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                        عرض المزيد
                    </a>
                </div>
                <div class="container mx-auto w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 60px;">
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-sacndary text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-sacndary text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                        <div class="relative p-6">
                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                <i class="favorite fa-solid fa-heart text-sacndary text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                            </div>
                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                <a href="#!">
                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                </a>
                            </div>
                        </div>
                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                            <p class="mb-4 text-base text-sacndary">
                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                            </p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </button>
                                <span class="rating flex"  data-id="1">
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="category-dishes" role="dishes" aria-labelledby="category-dishes">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-bold my-5 text-black">أطباق</h2>
                </div>
                <div class="w-full relative">
                    <div class="container swiper" style="overflow: visible !important">
                        <div class="swiper-slide-button swiper-button-next p-5"></div>
                        <div class="slider-wrapper overflow-hidden">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                                        <div class="relative p-6">
                                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                            </div>
                                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                <a href="#!">
                                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                            <p class="mb-4 text-base text-sacndary">
                                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                            </p>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                </button>
                                                <span class="rating flex"  data-id="1">
                                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                                        <div class="relative p-6">
                                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                            </div>
                                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                <a href="#!">
                                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                            <p class="mb-4 text-base text-sacndary">
                                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                            </p>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                </button>
                                                <span class="rating flex"  data-id="1">
                                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                                        <div class="relative p-6">
                                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                            </div>
                                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                <a href="#!">
                                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                            <p class="mb-4 text-base text-sacndary">
                                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                            </p>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                </button>
                                                <span class="rating flex"  data-id="1">
                                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                                        <div class="relative p-6">
                                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                            </div>
                                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                <a href="#!">
                                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                            <p class="mb-4 text-base text-sacndary">
                                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                            </p>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                </button>
                                                <span class="rating flex"  data-id="1">
                                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 transition duration-300 ease-in-out hover:scale-105" data-id="1">
                                        <div class="relative p-6">
                                            <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                            </div>
                                            <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('siteweb/img/gallery/gallery-01.jpeg'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                <a href="#!">
                                                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pt-0 pb-6 px-6 text-surface dark:text-white">
                                            <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                            <p class="mb-4 text-base text-sacndary">
                                                2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                            </p>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <button type="button" class="add-to-cart-btn" data-product-id="1"  data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                </button>
                                                <span class="rating flex"  data-id="1">
                                                    <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-slide-button swiper-button-prev p-5 "></div>
                    </div>
                </div>
            </div>
            <div
                class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                id="category-soups"
                role="soups"
                aria-labelledby="pills-profile-tab01">
                Tab 2 content
            </div>
            <div
                class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                id="category-pastries"
                role="pastries"
                aria-labelledby="pills-profile-tab01">
                Tab 3 content
            </div>
        </div>
    </section>

    <!-- Offer -->
    <section class="container mx-auto mt-5 w-90 relative">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold my-5 text-black">العروض</h2>
            <a href="#" class="text-lg font-bold text-amber-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                عرض المزيد
            </a>
        </div>
        <div class="container mx-auto w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2" style="gap: 50px;">
            <div class="relative overflow-hidden bg-cover bg-no-repeat grid-cols-1" data-twe-ripple-init data-twe-ripple-color="light">
                <img class="rounded-t-lg w-full" src="{{asset('siteweb/img/offer/offer-01.png')}}" alt="" />
                <a href="#!">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </a>
            </div>
            <div class="relative overflow-hidden bg-cover bg-no-repeat  grid-cols-1" data-twe-ripple-init data-twe-ripple-color="light">
                <img class="rounded-t-lg w-full" src="{{asset('siteweb/img/offer/offer-01.png')}}" alt="" />
                <a href="#!">
                    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                </a>
            </div>
        </div>

    </section>

    <!-- Favorite -->
    <section class="container mx-auto mt-5 w-90 relative">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold my-5 text-black">وجبات أكثر شيوعا</h2>
            <a href="#" class="text-lg font-bold text-amber-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                عرض المزيد
            </a>
        </div>

        <div class="container swiper" style="overflow: visible !important">
            <div class="swiper-slide-button swiper-button-next p-5"></div>
            <div class="favorite-products slider-wrapper overflow-hidden">
                <div class="favorite-products swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px] mt-4">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-sacndary-200 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-sacndary-200 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]  mt-4">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]  mt-4">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-sacndary-200 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-sacndary-200 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 pr-0 h-[200px]  mt-4">
                            <div class="relative h-full">
                                <div class="favorite-section-product absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                    <i class="favorite-section-product fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                </div>
                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-r-lg" style="background-image: url('siteweb/img/gallery/gallery-04.png'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                    <a href="#!">
                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 text-surface dark:text-white">
                                <h5 class="mb-2 text-lg font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                <p class="mb-4 text-sm text-black">
                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                </p>
                                <div class="flex justify-between items-center">
                                    <span class="text-rose-500 font-bold text-lg">6,84 ₪</span>
                                    <!-- <span class="text-black font-bold text-base">سعر الوجبة </span> -->
                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                </div>
                                <div class="flex justify-end items-center mt-2">
                                    <span class="rating flex"  data-id="1">
                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-slide-button swiper-button-prev p-5 "></div>
        </div>
    </section>
    <!-- End Home Page -->
</x-site-layout>
