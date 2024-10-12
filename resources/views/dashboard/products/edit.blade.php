<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.products.index')}}">{{__('Products')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit Product')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit Product')}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('dashboard.products.update',$product->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        @include('dashboard.products._form')
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
