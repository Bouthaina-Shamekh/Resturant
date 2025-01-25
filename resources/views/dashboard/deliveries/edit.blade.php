<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.deliveries.index')}}">{{__('Delivery')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit Delivery')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit Delivery') . " : " . $delivery->name }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('dashboard.deliveries.update',$delivery->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('dashboard.deliveries._form')
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
