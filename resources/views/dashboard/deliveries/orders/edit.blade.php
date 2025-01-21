<x-delivery-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('delivery.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('delivery.orders.index')}}">{{__('Orders')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit User')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Order Number ') . " : " . $order->number }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('delivery.orders.update',$order->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('delivery.orders._form')
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-delivery-layout>
