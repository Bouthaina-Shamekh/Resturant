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
        <div class="row">
            <x-alart type="success"/>
            <x-alart type="info"/>
            <x-alart type="danger"/>
            @if ($errors->any())
                <div class="alert alert-danger" >
                    <ol>
                        @foreach ($errors->getMessages() as $key => $val)
                            <li>{{ $key . " : " . $val[0] }} </li>
                        @endforeach
                    </ol>
                </div>
            @endif
        </div>
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <ul class="breadcrumb">
                    {{ $breadcrumbs ?? ''}}
                </ul>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="flex-container">

            {{ $slot }}
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->


@include('layouts.partials.dashboard.footer')


@include('layouts.partials.dashboard.end')
