<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header flex items-center py-4 px-6 h-header-height">
            <a href="{{route('dashboard.home')}}" class="b-brand flex items-center gap-3">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{asset('assets-dashboard/images/logo-dark.svg')}}" class="img-fluid logo-lg" alt="logo" style="display: none"  />
                <div style="width: 232px;">
                    <img src="{{asset('assets-dashboard/images/logo.png')}}" class="img-fluid logo-lg" alt="logo" />
                </div>
            </a>
        </div>
        <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
            <div class="card pc-user-card mx-[15px] mb-[15px] bg-theme-sidebaruserbg dark:bg-themedark-sidebaruserbg">
                <div class="card-body !p-5">
                    <div class="flex items-center">
                        <img class="shrink-0 w-[45px] h-[45px] rounded-full" src="{{ Auth::user()->avatar_url }}"
                            alt="user-image" />
                        <div class="ml-4 mr-2 grow">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                            <small>Role</small>
                        </div>
                        <a class="shrink-0 btn btn-icon inline-flex btn-link-secondary" data-pc-toggle="collapse"
                            href="#pc_sidebar_userlink">
                            <svg class="pc-icon w-[22px] h-[22px]">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="hidden pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3 *:flex *:items-center *:py-2 *:gap-2.5 hover:*:text-primary-500">
                            <a href="#!">
                                <i class="text-lg leading-none ti ti-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!">
                                <i class="text-lg leading-none ti ti-settings"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!">
                                <i class="text-lg leading-none ti ti-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" style="display: flex; align-items: center; gap: 5px;">
                                    <i class="text-lg leading-none ti ti-power"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>{{ __('Basic') }}</label>
                    <svg class="pc-icon">
                        <use xlink:href="#custom-presentation-chart"></use>
                    </svg>
                </li>
                <li class="pc-item">
                    <a href="{{ route('delivery.orders.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-story"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">{{ __('Orders') }}</span>
                    </a>
                </li>

                
                <li class="pc-item">
                    <a href="{{ route('delivery.chats.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-story"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">{{ __('Chats') }}</span>
                    </a>
                </li>
                <!-- <li class="pc-item">
                    <a href="../widget/w_data.html" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Data</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="../widget/w_chart.html" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-presentation-chart"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Chart</span>
                    </a>
                </li> -->

            </ul>
        </div>
    </div>
</nav>
