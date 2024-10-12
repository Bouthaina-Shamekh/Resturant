@include('layouts.partials.dashboard.head')
    <!-- [ Sidebar Menu ] start -->
    @include('layouts.partials.delivery.nav')
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    @include('layouts.partials.delivery.header')
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            <div class="grid grid-cols-12 gap-x-6">
                {{ $slot }}
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.partials.dashboard.footer')

    @push('scripts')
    <script>
        localStorage.setItem('layout', 'horizontal');
    </script>
    @endpush

@include('layouts.partials.dashboard.end')
