<x-site-layout>
    <!-- Header -->
    <header class="relative w-full h-screen">
        <nav class="absolute top-0 left-0 w-full flex flex-col items-center justify-between text-white z-50 ">
            <div class="container flex w-90 items-center justify-between py-2 px-3 lg:py-4">
                <div class="flex items-center">
                    <button type="button" class="block text-white/50 hover:no-underline focus:no-underline hover:text-amber-500 transition-colors duration-300 ease-in" data-twe-toggle="modal" data-twe-target="#rightTopModal" data-twe-ripple-init="" data-twe-ripple-color="light" >
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="relative ms-4" data-twe-dropdown-ref>
                        <a class="me-4 flex items-center text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-twe-dropdown-toggle-ref
                                aria-expanded="false">
                            <span class="relative inline-block h-[11px] w-4 overflow-hidden bg-gray-200 leading-[11px] decoration-inherit">
                                <span class="inline-block h-[11px] w-4 content-[''] [background-position:-36px_-26px_!important] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px]"></span>
                            </span>
                            <span class="ps-1 [&>svg]:w-5 text-white hover:text-amber-500 transition-colors duration-300 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="navbarDropdown" data-twe-dropdown-menu-ref>
                            <li>
                                <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref>
                                <span
                                    class="relative me-2 inline-block h-[11px] w-4 overflow-hidden leading-[11px] decoration-inherit">
                                    <span
                                    class="inline-block h-[11px] w-4 content-[''] [background-position:-36px_-26px_!important] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px]"></span>
                                </span>
                                <span class="me-4">English</span>
                                <span
                                    class="inline-block text-success-600 dark:text-success-500 [&>svg]:h-3.5 [&>svg]:w-3.5">
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="2.5"
                                    stroke="currentColor">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                </a>
                            </li>
                            <li>
                                <hr class="my-2 border-neutral-100 dark:border-white/10" />
                            </li>
                            <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref>
                                <span
                                class="relative me-2 inline-block h-[11px] w-4 overflow-hidden leading-[11px] decoration-inherit">
                                <span
                                    class="inline-block h-[11px] w-4 content-[''] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px] [background-position:-72px_-572px_!important]"></span>
                                </span>
                                Polski</a
                            >
                            </li>
                            <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref>
                                <span
                                class="relative me-2 inline-block h-[11px] w-4 overflow-hidden leading-[11px] decoration-inherit">
                                <span
                                    class="inline-block h-[11px] w-4 content-[''] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px] [background-position:0px_-1196px_!important]"></span>
                                </span>
                                中文</a
                            >
                            </li>
                            <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref>
                                <span
                                class="relative me-2 inline-block h-[11px] w-4 overflow-hidden leading-[11px] decoration-inherit">
                                <span
                                    class="inline-block h-[11px] w-4 content-[''] [background:url(https://tecdn.b-cdn.net/img/svg/flags.png)_no-repeat_-108px_-1976px] [background-position:-36px_-910px_!important]"></span>
                                </span>
                                日本語</a
                            >
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="hidden md:flex lg:flex ms-5 w-[30%] items-center justify-between bg-amber-400" style="border-radius: 25px;">
                    <input
                        type="search"
                        class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none motion-reduce:transition-none"
                        placeholder="إبحث هنا"
                        aria-label="Search"
                        style="border-radius: 0 25px 25px 0;"
                        aria-describedby="button-addon2"  />
                    <!--Search icon-->
                    <span
                        class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-600 dark:text-white [&>svg]:w-5"
                        id="basic-addon2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                            fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                    </svg>
                    </span>
                </div>

                <!-- Right elements -->
                @auth
                    <div class="relative ms-4" data-twe-dropdown-ref>
                        <a class="me-4 flex items-center text-white hover:text-amber-500 transition-colors duration-300 ease-in "
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-twe-dropdown-toggle-ref
                                aria-expanded="false">
                            <span>
                                <i class="fa-regular fa-user"></i>
                            </span>
                            <span class="ps-1 [&>svg]:w-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="navbarDropdown" data-twe-dropdown-menu-ref>
                            <li>
                                <a
                                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                    href="#"
                                    data-twe-dropdown-item-ref>
                                    <span class="relative me-2 inline-block text-right">
                                        لوحة التحكم
                                    </span>
                                    </a
                                >
                            </li>
                            <li>
                                <hr class="my-2 border-neutral-100 dark:border-white/10" />
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                    <button class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" type="submit">تسجيل خروج</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                @endauth
                @guest
                    <div class="flex items-center">
                        <button class="me-2 text-amber-50  hover:text-amber-500 transition-colors duration-300 ease-in"  data-twe-toggle="modal" data-twe-target="#loginModal" data-twe-ripple-init data-twe-ripple-color="light">تسجيل الدخول</button>
                        <span>/</span>
                        <button class="me-2 text-amber-50  hover:text-amber-500 transition-colors duration-300 ease-in"  data-twe-toggle="modal" data-twe-target="#registerModal" data-twe-ripple-init data-twe-ripple-color="light">تسجيل</button>
                    </div>
                @endguest
            </div>
            <hr class="container w-90 bg-amber-400 border-0 h-0.5 rounded-full">
            <div class="container flex w-90 items-center justify-between py-2 px-3 lg:py-4">
                <div class="flex items-center">
                    <!-- Logo -->
                    <a class="flex items-center text-neutral-900 dark:text-neutral-200 me-2" href="#">
                        <img src="{{asset('siteweb/img/logo.png')}}" style="height: 40px" alt="Logo"/>
                    </a>
                    <!-- bars dropdown container -->
                    <div class="relative block lg:hidden" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <a class="me-4 flex items-center  hover:text-amber-500 transition-colors duration-300 ease-in" href="#"
                                id="dropdownMenuButton1" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <span class="w-5">
                                <i class="fa-solid fa-bars"></i>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] hidden min-w-max list-none overflow-hidden rounded-lg bg-white shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                            aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-amber-400 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60 " href="#">الرئيسية</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">قائمة الطعام</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">تواصل معنا</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">من نحن</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">المدونة</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Collapsible navigation container -->
                <div class="hidden lg:flex items-center text-white" id="navbar" data-twe-collapse-item>
                    <!-- Left navigation links -->
                    <ul class="flex flex-col lg:flex-row list-none p-0 m-0" id="pills-tabs" role="tablista" data-twe-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in data-[twe-nav-active]:!text-amber-400" href="./index.html"
                            href="/index.html"
                            >الرئيسية</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="#categories-container">قائمة الطعام</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="/conect.html">تواصل معنا</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">

                            <a
                                href="/about.html"
                                class="text-white hover:text-amber-400 transition-colors duration-300 ease-in data-[twe-nav-active]:!text-amber-500"
                                >من نحن</a
                            >
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="#">المدونة</a>
                        </li>
                    </ul>
                </div>

                <!-- Right elements -->
                <div class="flex items-center">
                    <!-- Icon -->
                    <a class="me-4 text-rose-50  hover:text-rose-600 transition-colors duration-300 ease-in" href="#">
                        <span class="w-5">
                            <i class="fa-regular fa-heart"></i>
                        </span>
                    </a>
                    <!-- notifications dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">
                        <button class="me-4 flex items-center  hover:text-amber-500 transition-colors duration-300 ease-in" id="opennotifications" data-twe-toggle="modal" data-twe-target="#notifications" data-twe-ripple-init data-twe-ripple-color="light">
                            <span class="absolute -mt-4 ms-2.5 rounded-full bg-amber-400 px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white top-2.5 -right-4">1</span>
                            <span class="w-5">
                                <i class="fa-solid fa-bell"></i>
                            </span>
                        </button>
                    </div>
                    <!-- cart dropdown container -->
                    <div class="relative" data-twe-dropdown-ref data-twe-dropdown-alignment="end">

                        <button class="me-4 flex items-center  hover:text-amber-500 transition-colors duration-300 ease-in" id="openCart" data-twe-toggle="modal" data-twe-target="#cart" data-twe-ripple-init data-twe-ripple-color="light">
                            <span class="absolute -mt-4 me-2.5 rounded-full bg-amber-400 px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white top-2 -right-2.5 total-quantity">0</span>
                            <span class="w-5">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="container w-90 bg-amber-400 border-0 h-0.5 rounded-full">
        </nav>
        <!--image slider start-->
        <div class="absolute top-0 left-0 h-full w-full bg-black/50 ">
        </div>
        <div class="slider w-full h-screen">
            <div class="slides">
                <!--slide images start-->
                @foreach ($sliders as $slider)
                <div class="slide ">
                    <img src="{{asset('storage/' . $slider->image)}}" alt="" />
                </div>
                @endforeach
                <!--slide images end-->
            </div>
        </div>
        <!--image slider end-->

        <!-- hero section -->
        <div class="container absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center flex items-center justify-around">
            <button id="prev" class="hidden md:flex lg:flex text-center items-center justify-center bg-white rounded-full w-10 h-10 focus:bg-amber-400 transition-colors duration-200 ease-in" >
                <i class="fa-solid fa-chevron-right"></i>
            </button>
            @foreach($sliders as $slider)
            <div>
                <h1 class="text-7xl font-bold text-white mb-5">{{$slider->name_en}}</h1>
                <p class="text-base text-white">{{$slider->description_en}}</p>
            </div>
            @endforeach
            <button id="next" class="hidden md:flex lg:flex  text-center flex items-center justify-center bg-white rounded-full w-10 h-10  focus:bg-amber-400 transition-colors duration-200 ease-in" >
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
    </header>

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