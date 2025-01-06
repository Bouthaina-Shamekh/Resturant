<x-dashboard-layout>
    @php
        $name = 'name_' . app()->currentLocale();
        $feedback = 'feedback_' . app()->currentLocale();
    @endphp

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.notification.index') }}">{{ __('Notifications') }}</a>
        </li>
        <li class="breadcrumb-item" aria-current="page">{{ __('Notification Details') }}</li>
    </x-slot:breadcrumb>

    <!-- تفاصيل الإشعار -->
    {{-- @can('view', 'App\\Models\Notification') --}}
    <div class="col-span-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-3 sm:mb-0">{{ __('admin.Notification Details') }}</h5>
            </div>
            <div class="card-body pt-3">
                <div class="table-responsive">
                    @if($notificationData->source == 'order')
                    <div class="card-body">
                        <p><strong>Type:</strong> {{ $notificationData->order->type ?? 'No Type' }}</p>
                        <p><strong>Order ID:</strong> {{ $notificationData->order->order_id ?? 'No Order ID' }}</p>
                        <p><strong>Table Number:</strong> {{ $notificationData->order->table_number ?? 'No Table Number' }}</p>
                        <p><strong>Address Name:</strong> {{ $notificationData->order->address_name ?? 'No Address Name' }}</p>
                        <p><strong>Phone:</strong> {{ $notificationData->order->phone ?? 'No Phone' }}</p>
                        <p><strong>Total Amount:</strong> {{ $notificationData->order->total_amount ?? 'No Total Amount' }}</p>

                        <h2>Detiles of Items</h2>
                        @php
                            // @dd($notificationData->order->items);
                        @endphp

                        @foreach ($notificationData->order->items as $item)
                            <p class="ml-4"><strong>Name:</strong> {{ $item->name ?? 'No Name' }}</p>
                            <p class="ml-4"><strong>Size:</strong> {{ $item->size ?? 'No Size' }}</p>
                            <p class="ml-4"><strong>Quantity:</strong> {{ $item->quantity ?? 'No Quantity' }}</p>
                            <p class="ml-4"><strong>Price:</strong> {{ $item->price ?? 'No Price' }}</p>
                        @endforeach
                        <p><strong>Received at:</strong> {{ $notification->created_at }}</p>
                    </div>
                    @else
                    <div class="card-body">
                        <p><strong>Name :</strong> {{ $notificationData->massege->name ?? 'No Name' }}</p>
                        <p><strong>Phone :</strong> {{ $notificationData->massege->phone ?? 'No Phone' }}</p>
                        <p><strong>Email:</strong> {{ $notificationData->massege->email ?? 'No Email' }}</p>
                        <p><strong>message:</strong> {{ $notificationData->massege->message ?? 'No message' }}</p>

                        <p><strong>Received at:</strong> {{ $notification->created_at }}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('dashboard.notification.index') }}"
                    class="btn btn-secondary">{{ __('admin.Back to Notifications') }}</a>
                <a href="{{ route('dashboard.orders.show', $notificationData->order->order_id ?? 'No Order ID') }}"
                    class="btn btn-primary">{{ __('Go To Orders') }}</a>
            </div>
        </div>
    </div>
    {{-- @endcan --}}
</x-dashboard-layout>
