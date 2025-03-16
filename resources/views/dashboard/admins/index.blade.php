<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('admin.Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('admin.Admins')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12">
    <div class="card">
        <div class="card-header">
            <div class="sm:flex items-center justify-between">
                <h5 class="mb-3 mb-sm-0">{{__('admin.Admins List')}}</h5>
                <div>
                    <a href="{{route('dashboard.admins.create')}}" class="btn btn-primary">
                        {{__('admin.Add Admin')}}
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
                            <th class="text-center">{{__('admin.Active')}}</th>
                            <th>{{__('admin.Name')}}</th>
                            <th>{{__('admin.Email')}}</th>
                            <th>{{__('admin.Last Activity')}}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="text-center">
                                @if ($admin->last_active_at && $admin->last_active_at >= now()->subMinutes(5))
                                    <!-- دائرة خضراء مع تأثير الرمش -->
                                    <i class="fas fa-circle active-circle"></i>
                                @else
                                    <i class="fas fa-circle text-danger"></i> <!-- دائرة حمراء غير نشطة -->
                                @endif
                            </td>
                            <td>
                                <div class="flex items-center w-44">
                                    <div class="shrink-0">
                                        <img src="{{ $admin->avatar_url }}" alt="admin image" class="rounded-full w-10" />
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0">{{$admin->name}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->last_active_at}}</td>
                            <td class="d-flex">
                                <a href="{{route('dashboard.admins.edit',$admin->id)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                    <i class="ti ti-edit text-xl leading-none"></i>
                                </a>
                                <form action="{{route('dashboard.admins.destroy',$admin->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('admin.Delete')}}">
                                        <i class="ti ti-trash text-xl leading-none"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <style>
        /* إضافة تأثير الرمش */
        .active-circle {
            color: green;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</x-dashboard-layout>
