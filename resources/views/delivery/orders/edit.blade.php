<x-delivery-layout>

<style>
    .btn-map {
        background-color: #4CAF50; /* اللون الأخضر */
        border-color: #4CAF50;
        color: white;
    }

    .btn-map:hover {
        background-color: #45a049; /* درجة أغمق من الأخضر عند التمرير */
        border-color: #45a049;
    }
</style>

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{ route('delivery.home') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('delivery.orders.index') }}">{{ __('Orders') }}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{ __('Edit Order') }}</li>
        </x-slot:breadcrumb>

        <div class="col-span-12 xl:col-span-12">
            <div class="col-md-12">
                <div class="card shadow-sm rounded-lg" style="max-width: 600px; margin: auto;">
                    <div class="card-header text-white" style="background-color: #f06292; border-radius: 8px;">
                        <h5 class="mb-0" style="font-weight: bold;">{{ __('Order Number ') . " : " . $order->number }}</h5>
                    </div>
                    <div class="card-body bg-light p-4 rounded">
                        <form action="{{ route('delivery.orders.update', $order->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card border-0 mb-3">
                                        <div class="card-body p-3 bg-pink-light rounded">
                                            <p><strong style="font-weight: bold;">Type:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->type ?? 'No Type' }}</span></p>
                                            <!-- <p><strong style="font-weight: bold;">Order ID:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->order_id ?? 'No Order ID' }}</span></p> -->
                                            <p><strong style="font-weight: bold;">Table Number:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->table_number ?? 'No Table Number' }}</span></p>
                                            <p><strong style="font-weight: bold;">Address Name:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->address_name ?? 'No Address Name' }}</span></p>
                                            <p><strong style="font-weight: bold;">Phone:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->phone ?? 'No Phone' }}</span></p>
                                            <p><strong style="font-weight: bold;">Total Amount:</strong> <span class="text-muted" style="font-weight: bold;">{{ $order->total_amount ?? 'No Total Amount' }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row mt-4">
                            <h5 class="mb-3" style="font-weight: bold; color: #f06292;">Details of Items</h5>
                            @foreach ($order->items as $item)
                                <div class="col-12">
                                    <div class="card border-0 mb-2">
                                        <div class="card-body p-3 bg-pink-light rounded">
                                            <p><strong>Name:</strong> <span class="text-muted">{{ $item->name ?? 'No Name' }}</span></p>
                                            <p><strong>Size:</strong> <span class="text-muted">{{ $item->size ?? 'No Size' }}</span></p>
                                            <p><strong>Quantity:</strong> <span class="text-muted">{{ $item->quantity ?? 'No Quantity' }}</span></p>
                                            <p><strong>Price:</strong> <span class="text-muted">{{ $item->price ?? 'No Price' }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> -->

                            <p><strong>Received at:</strong> <span class="text-muted">{{ $order->created_at }}</span></p>

                            <hr class="mt-4">

                            <div class="row justify-content-end mt-3">
                                <a href="{{ route('delivery.orders.index') }}" class="btn btn-secondary col-2 mr-3">
                                    {{ __('Back') }}
                                </a>
                                <a href="{{ route('delivery.orders.show', $order->id) }}" class="btn btn-map col-2 mr-3">
                                    {{ __('Map') }}
                                </a>
                                <button type="submit" class="btn btn-primary col-2">
                                    {{ $btn_label ?? __('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-delivery-layout>