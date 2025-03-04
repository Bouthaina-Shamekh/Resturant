<x-dashboard-layout>

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{ __('Deliverys') }}</li>
    </x-slot>

    <div class="col-span-12">
        <div class="card">
            <div class="card-header">
                <div class="sm:flex items-center justify-between">
                    <h5 class="mb-3 mb-sm-0">{{ __('Deliverys List') }}</h5>
                    <div>
                        <a href="{{ route('dashboard.deliveries.create') }}" class="btn btn-primary">
                            Add Delivery
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive dt-responsive">
                    <table class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deliveries as $delivery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="flex items-center w-44">
                                            <div class="shrink-0">
                                                <img src="{{ asset($delivery->img) }}" alt="user image" class="rounded-full w-10" />
                                            </div>
                                            <div class="grow ltr:ml-3 rtl:mr-3">
                                                <h6 class="mb-0">{{ $delivery->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $delivery->email }}</td>
                                    <td>{{ $delivery->phone }}</td>
                                    <td>{{ $delivery->gender == 0 ? 'Male' : 'Female' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('dashboard.deliveries.edit', $delivery->id) }}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                            <i class="ti ti-edit text-xl leading-none"></i>
                                        </a>
                                        <form action="{{ route('dashboard.deliveries.destroy', $delivery->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{ __('Delete') }}">
                                                <i class="ti ti-trash text-xl leading-none"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- إذا كنت تستخدم Pagination -->
                
            </div>
        </div>
    </div>

</x-dashboard-layout>