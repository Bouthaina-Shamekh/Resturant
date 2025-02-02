<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Orders')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12">
    <form action="{{ URL::current() }}" method="get" class="d-flex justify-content-between mb-4">
        <select name="type" class="form-control mx-2">
            <option value="">All</option>
            <option value="internal" @selected(request('type')=='internal' )>Internal</option>
            <option value="outer" @selected(request('type')=='outer' )>Outer</option>
        </select>
        <button class="btn btn-dark mx-2">Filter</button>
    </form>
    <div class="card">
        <div class="card-header">
            <div class="sm:flex items-center justify-between">
                <h5 class="mb-3 mb-sm-0">{{__('Orders List')}}</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive dt-responsive">
                <table class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('admin.Type')}}</th>
                            <th>{{__('admin.Number')}}</th>
                            <th>{{__('admin.Total Amount')}}</th>
                            <th>{{__('admin.Status')}}</th>
                            <th>{{__('admin.Delivery')}}</th>
                            <th>{{__('admin.Accept Status')}}</th>
                            <th>{{__('admin.Note')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->type }}</td>
                            <td>{{ $order->number }}</td>
                            <td>{{ $order->total_amount }}</td>
                            <td>{{ $order->status }}</td>
                            <td>{{ $order->delivery->name ?? '' }}</td>
                            <td>
                                @if ($order->store_accept_status == 1)
                                    <i class="fas fa-check"></i>
                                @else
                                    <i class="fas fa-times"></i>
                                @endif
                            </td>
                            <td>{{ $order->note }}</td>
                            <td class="d-flex">
                                <a href="{{route('dashboard.orders.edit',$order->id)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                    <i class="ti ti-edit text-xl leading-none"></i>
                                </a>
                                <form action="{{route('dashboard.orders.destroy',$order->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('Delete')}}">
                                        <i class="ti ti-trash text-xl leading-none"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                {{$orders->links()}}
            </div>
        </div>
    </div>
    </div>

</x-dashboard-layout>
