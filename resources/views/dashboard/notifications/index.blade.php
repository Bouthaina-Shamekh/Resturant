<x-dashboard-layout>
    @php
        $name = 'name_' . app()->currentLocale();
        $feedback = 'feedback_' . app()->currentLocale();
    @endphp

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">{{ __('dashboard.Home') }}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{ __('dashboard.Notifications') }}</li>
    </x-slot:breadcrumbs>

    {{-- @can('view', 'App\\Models\Notification') --}}
    <div class="col-span-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-3 sm:mb-0">{{ __('admin.Notifications') }}</h5>
            </div>
            <div class="card-body pt-3">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="notifications-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('dashboard.Type') }}</th>
                                <th>{{ __('dashboard.Order ID') }}</th>
                                <th>{{ __('dashboard.Table Number') }}</th>
                                <th>{{ __('dashboard.Address Name') }}</th>
                                <th>{{ __('dashboard.Total Amount') }}</th>
                                <th>{{ __('dashboard.Source') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Auth::guard('admin')->user()->notifications as $notificationS)
                                @php
                                    // $notificationData = json_decode($notificationS->data);
                                    $notificationData = $notificationS->data;
                                @endphp
                                @if ($notificationData['source'] == 'order')
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notificationData['order']['type'] }}</td>
                                    <td>{{ $notificationData['order']['order_id'] }}</td>
                                    <td>{{ $notificationData['order']['table_number'] }}</td>
                                    <td>{{ $notificationData['order']['address_name'] }}</td>
                                    <td>{{ $notificationData['order']['total_amount'] }}</td>
                                    <td>{{ $notificationData['source'] }}</td>
                                    <td>{{ $notificationS->created_at->format('Y-m-d h:i') }}</td>
                                    <td>
                                        @if ($notificationS->read_at)
                                            <span class="badge bg-success">{{ __('admin.Read') }}</span>
                                        @else
                                            <span class="badge bg-warning">{{ __('admin.Unread') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('dashboard.notification.show', $notificationS['id']) }}" class="badge bg-success">{{ __('admin.View') }}</a>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notificationS->data['first_name'] }} {{ $notificationS->data['last_name'] }}</td>
                                    <td>{{ $notificationS->data['email'] }}</td>
                                    <td>{{ $notificationS->data['phone'] }}</td>
                                    <td></td>
                                    <td>
                                        <span class="badge bg-primary-500">{{ $notificationS->data['source'] ?? 'Unknown' }}</span>
                                    </td>
                                    <td>{{ $notificationS->created_at->format('Y-m-d h:i') }}</td>
                                    <td>
                                        @if ($notificationS->read_at)
                                            <span class="badge bg-success">{{ __('admin.Read') }}</span>
                                        @else
                                            <span class="badge bg-warning">{{ __('admin.Unread') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($notificationS->deleted_at)
                                            <span class="badge bg-danger">{{ __('admin.Deleted') }}</span>
                                        @else
                                            <a href="{{ route('admin.notification.show', $notificationS['id']) }}" class="badge bg-success">{{ __('admin.View') }}</a>
                                        @endif
                                    </td>
                                </tr>
                                @endif

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- @endcan --}}
</x-dashboard-layout>
