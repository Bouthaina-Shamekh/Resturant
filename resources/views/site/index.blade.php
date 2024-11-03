<x-site-layout>
    <x:slot:breadcrumb>

    </x:slot:breadcrumb>
    <!--Pills content-->
    <div class="mb-6">
        <div
            class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="pill-home"
            role="tabpanel"
            aria-labelledby="pill-home-tab"
            data-twe-tab-active>
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
                        <li role="all" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food8.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">الرئيسية</span>
                                </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <li role="soups" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">شوربات</span>
                            </a>
                        </li>
                        <li role="pastries" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">مخبوزات</span>
                            </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <li role="soups" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">شوربات</span>
                            </a>
                        </li>
                        <li role="pastries" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">مخبوزات</span>
                            </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <li role="soups" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">شوربات</span>
                            </a>
                        </li>
                        <li role="pastries" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">مخبوزات</span>
                            </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <li role="soups" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-02.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">شوربات</span>
                            </a>
                        </li>
                        <li role="pastries" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food-03.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">مخبوزات</span>
                            </a>
                        </li>
                        <li role="dishes" class="flex-auto text-center">
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
                                    <img src="{{ asset('siteweb/img/food/food7.jpeg')}}" alt="" class="w-full rounded-full">
                                </div>
                                <span class="ms-2">أطباق</span>
                                </a>
                        </li>
                        <button  id="show-more-2" onclick="showMore()" class="text-lg font-bold text-neutral-400 hover:text-amber-600 hover:underline transition duration-200 ease-in">
                            عرض المزيد
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
                                    عرض الكل
                                </a>
                            </div>
                            <div class="container mx-auto w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3" style="gap: 60px;">
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 product" data-id="1">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
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
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-black font-bold text-base">سعر الوجبة </span>
                                            <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-black font-bold text-base">سعر الوجبة </span>
                                            <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-black font-bold text-base">سعر الوجبة </span>
                                            <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-black font-bold text-base">سعر الوجبة </span>
                                            <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                    <div class="relative p-6">
                                        <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                            <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                        </div>
                                        <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                            <a href="#!">
                                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-6 text-surface dark:text-white">
                                        <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                        <p class="mb-4 text-base text-black">
                                            2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                        </p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-black font-bold text-base">سعر الوجبة </span>
                                            <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block" id="category-dishes" role="dishes" aria-labelledby="category-dishes">
                            <div class="flex justify-between items-center">
                                <h2 class="text-3xl font-bold my-5 text-black">أطباق</h2>
                            </div>
                            <div class="w-full relative">
                                <div class="swiper multiple-slide-carousel swiper-container relative">
                                    <div class="swiper-wrapper mb-16">
                                        <div class="swiper-slide" style="width: 335px;">
                                            <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                                <div class="relative p-6">
                                                    <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                        <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                    </div>
                                                    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                        <a href="#!">
                                                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-6 text-surface dark:text-white">
                                                    <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                    <p class="mb-4 text-base text-black">
                                                        2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                    </p>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                        <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                            <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                                <div class="relative p-6">
                                                    <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                        <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                    </div>
                                                    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                        <a href="#!">
                                                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-6 text-surface dark:text-white">
                                                    <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                    <p class="mb-4 text-base text-black">
                                                        2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                    </p>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                        <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                            <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                                <div class="relative p-6">
                                                    <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                        <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                    </div>
                                                    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                        <a href="#!">
                                                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-6 text-surface dark:text-white">
                                                    <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                    <p class="mb-4 text-base text-black">
                                                        2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                    </p>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                        <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                            <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                                <div class="relative p-6">
                                                    <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                        <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                    </div>
                                                    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                        <a href="#!">
                                                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-6 text-surface dark:text-white">
                                                    <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                    <p class="mb-4 text-base text-black">
                                                        2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                    </p>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                        <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                            <div class="block rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                                <div class="relative p-6">
                                                    <div class="favorite absolute top-9 right-9 text-3xl w-12 h-12 flex items-center justify-center bg-white rounded-full z-10 ">
                                                        <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                    </div>
                                                    <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-01.jpeg')}}'); height: 240px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                        <a href="#!">
                                                            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="p-6 text-surface dark:text-white">
                                                    <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                    <p class="mb-4 text-base text-black">
                                                        2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                    </p>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                        <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <button type="button" data-twe-toggle="modal" data-twe-target="#addToCartModal" data-twe-ripple-init data-twe-ripple-color="light">
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
                                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12" dir="ltr">
                                        <style>
                                            .swiper-button-next:after, .swiper-button-prev:after{
                                                font-size: 18px !important;
                                            }
                                        </style>
                                        <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-indigo-600 !-translate-x-16" style="transform: rotate(180deg) !important;" data-carousel-prev>
                                            <!-- <i class="fa-solid fa-chevron-right"></i> -->
                                        </button>
                                        <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16" style="transform: rotate(180deg) !important;"  data-carousel-next>
                                            <!-- <i class="fa-solid fa-chevron-left"></i> -->
                                        </button>
                                    </div>
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
                            عرض الكل
                        </a>
                    </div>
                    <div class="container mx-auto w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2" style="gap: 50px;">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat grid-cols-1" data-twe-ripple-init data-twe-ripple-color="light">
                            <img class="rounded-t-lg w-full" src="{{ asset('siteweb/img/offer/offer-01.png')}}" alt="" />
                            <a href="#!">
                                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                            </a>
                        </div>
                        <div class="relative overflow-hidden bg-cover bg-no-repeat  grid-cols-1" data-twe-ripple-init data-twe-ripple-color="light">
                            <img class="rounded-t-lg w-full" src="{{ asset('siteweb/img/offer/offer-01.png')}}" alt="" />
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
                            عرض الكل
                        </a>
                    </div>
                    <div class="container mx-auto w-full">
                        <div class="w-full relative">
                            <div class="swiper multiple-slide-carousel swiper-container relative">
                                <div class="swiper-wrapper mb-16">
                                    <div class="swiper-slide">
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                    <span class="rating flex"  data-id="1">
                                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 mt-3">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
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
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                    <span class="rating flex"  data-id="1">
                                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 mt-3">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
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
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                    <span class="rating flex"  data-id="1">
                                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 mt-3">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart  hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
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
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 ">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
                                                    <span class="rating flex"  data-id="1">
                                                        <i class="fa-solid fa-star text-amber-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                        <i class="fa-solid fa-star text-neutral-400 transition-color duration-200 ease-in cursor-pointer"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center rounded-lg bg-white shadow-lg shadow-inner border border-gray-200 mt-3">
                                            <div class="relative">
                                                <div class="favorite absolute top-1 right-1 text-3xl w-12 h-12 flex items-center justify-center z-10 ">
                                                    <i class="favorite fa-solid fa-heart text-rose-700 hover:text-rose-700 transition duration-150 ease-in cursor-pointer"></i>
                                                </div>
                                                <div class="relative overflow-hidden bg-cover bg-center bg-no-repeat rounded-lg" style="background-image: url('{{ asset('siteweb/img/gallery/gallery-04.png')}}'); height: 200px; width: 140px;" data-twe-ripple-init data-twe-ripple-color="light">
                                                    <a href="#!">
                                                        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-6 text-surface dark:text-white">
                                                <h5 class="mb-2 text-xl font-bold leading-tight text-black">وجبة مشاوي مشكل لشخصين</h5>
                                                <p class="mb-4 text-base text-black">
                                                    2 شيش طاووق +2 كباب+2 مسحب+ شيبس
                                                </p>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-black font-bold text-base">سعر الوجبة </span>
                                                    <span class="text-rose-500 font-bold text-base">6,84 ₪</span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <i class="fa-solid fa-cart-plus text-xl cursor-pointer text-neutral-400 hover:text-amber-400 transition-color duration-200 ease-in"></i>
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
                                <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12" dir="ltr">
                                    <style>
                                        .swiper-button-next:after, .swiper-button-prev:after{
                                            font-size: 18px !important;
                                        }
                                    </style>
                                    <button id="slider-button-left" class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-indigo-600 !-translate-x-16" style="transform: rotate(180deg) !important;" data-carousel-prev>
                                        <!-- <i class="fa-solid fa-chevron-right"></i> -->
                                    </button>
                                    <button id="slider-button-right" class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16" style="transform: rotate(180deg) !important;"  data-carousel-next>
                                        <!-- <i class="fa-solid fa-chevron-left"></i> -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Home Page -->
        </div>
        <div
            class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
            id="pills-about"
            role="tab"
            aria-labelledby="pills-about-tab">
            <div class="card__content w-full h-full flex flex-col justify-center items-center" style="margin-top: 100px">
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
</x-site-layout>
