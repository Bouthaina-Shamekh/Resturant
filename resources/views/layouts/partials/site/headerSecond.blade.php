    <!-- Header -->
    <header class="relative w-full pt-2 pb-10"  style="background-color: #1a1a1a">
        <nav class="w-full flex flex-col items-center justify-between text-white z-50 ">
            <div class="container flex w-90 items-center justify-between py-2 px-3 lg:py-4">
                <div class="flex items-center">
                    <button type="button" class="block text-white/50 hover:no-underline focus:no-underline hover:text-amber-500 transition-colors duration-300 ease-in" data-twe-toggle="modal" data-twe-target="#rightTopModal" data-twe-ripple-init="" data-twe-ripple-color="light" >
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="relative ms-4" data-twe-dropdown-ref>
                        <a class="me-4 flex items-center text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80" href="#" id="navbarDropdown" role="button" data-twe-dropdown-toggle-ref aria-expanded="false">
                            <span class="relative inline-block w-4 overflow-hidden leading-[11px] decoration-inherit">
                                @if (app()->currentLocale() == 'ar')
                                    <img src="{{asset('siteweb/img/flags/ar.png')}}" alt="" width="30px" height="30px">
                                @elseif (app()->currentLocale() == 'en')
                                    <img src="{{asset('siteweb/img/flags/en.png')}}" alt="" width="30px" height="30px">
                                @endif
                            </span>
                            <span class="ps-1 [&>svg]:w-5 text-white hover:text-amber-500 transition-colors duration-300 ease-in">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-[10rem] list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark" aria-labelledby="navbarDropdown" data-twe-dropdown-menu-ref>
                            <li>
                                <a href="/en" class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" data-twe-dropdown-item-ref>
                                    <span class="relative me-2 inline-block w-4 overflow-hidden leading-[11px] decoration-inherit">
                                        <img src="{{asset('siteweb/img/flags/en.png')}}" alt="" width="30px" height="30px">
                                    </span>
                                    <span class="me-4">{{__('site.English')}}</span>
                                    @if (app()->currentLocale() == 'en')
                                    <span class="inline-block text-success-600 dark:text-success-500 [&>svg]:h-3.5 [&>svg]:w-3.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <hr class="my-2 border-neutral-100 dark:border-white/10" />
                            </li>
                            <li>
                                <a href="/ar" class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25" data-twe-dropdown-item-ref>
                                    <span class="relative me-2 inline-block w-4 overflow-hidden leading-[11px] decoration-inherit">
                                        <img src="{{asset('siteweb/img/flags/ar.png')}}" alt="" width="30px" height="30px">
                                    </span>
                                    <span class="me-4">{{__('site.Arabic')}}</span>
                                    @if (app()->currentLocale() == 'ar')
                                    <span class="inline-block text-success-600 dark:text-success-500 [&>svg]:h-3.5 [&>svg]:w-3.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <form action="{{route('site.index')}}" class="w-[30%]" method="get">
                <div class="hidden md:flex lg:flex ms-5 w-full items-center justify-between bg-amber-400" style="border-radius: 25px;">
                    <input
                        type="search"
                        name="search"
                        value="{{request()->search}}"
                        class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none motion-reduce:transition-none"
                        placeholder="{{__('Site.Search')}}"
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
                </form>

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
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-amber-400 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60 " href="{{route('site.index')}}">{{__('site.Basic')}}</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">{{__('site.Menu')}}  </a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#"> {{__('site.ContactUs')}}</a>
                            </li>
                            <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="{{route('site.about')}}">{{__('site.AboutUs')}} </a>
                            </li>
                            {{-- <li>
                                <a class="block w-full whitespace-nowrap px-4 py-2 text-sm text-neutral-700 hover:text-amber-400 transition-colors duration-300 ease-in hover:bg-zinc-200/60" href="#">المدونة</a>
                            </li> --}}
                        </ul>
                    </div>

                </div>
                <!-- Collapsible navigation container -->
                <div class="hidden lg:flex items-center text-white" id="navbar" data-twe-collapse-item>
                    <!-- Left navigation links -->
                    <ul class="flex flex-col lg:flex-row list-none p-0 m-0" id="pills-tabs" role="tablista" data-twe-nav-ref>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in data-[twe-nav-active]:!text-amber-400" href="{{route('site.index')}}"
                            href="{{route('site.index')}}">{{__('site.Home')}}</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="#categories-container">{{__('site.Menu')}}</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="{{route('site.contact')}}"> {{__('site.ContactUs')}}</a>
                        </li>
                        <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center border-solid border-amber-400 me-2" style="border-left-width: 3px;">

                            <a
                                href="{{route('site.about')}}"
                                class="text-white hover:text-amber-400 transition-colors duration-300 ease-in data-[twe-nav-active]:!text-amber-500"
                                >{{__('site.AboutUs')}}</a


                            >
                        </li>
                        {{-- <li class="mb-4 lg:mb-0 lg:pe-2 flex items-center">
                            <a class="text-white hover:text-amber-400 transition-colors duration-300 ease-in" href="#">المدونة</a>
                        </li> --}}
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
    </header>
