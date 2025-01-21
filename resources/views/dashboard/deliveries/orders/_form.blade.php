<div class="row">
    <div class="card">
        <div class="card-body">
            <p><strong>Type:</strong> {{ $order->type ?? 'No Type' }}</p>
            <p><strong>Order ID:</strong> {{ $order->order_id ?? 'No Order ID' }}</p>
            <p><strong>Table Number:</strong> {{ $order->table_number ?? 'No Table Number' }}</p>
            <p><strong>Address Name:</strong> {{ $order->address_name ?? 'No Address Name' }}</p>
            <p><strong>Phone:</strong> {{ $order->phone ?? 'No Phone' }}</p>
            <p><strong>Total Amount:</strong> {{ $order->total_amount ?? 'No Total Amount' }}</p>

            <h2>Detiles of Items</h2>
            @php
                // @dd($order->items);
            @endphp

            @foreach ($order->items as $item)
                <p class="ml-4"><strong>Name:</strong> {{ $item->name ?? 'No Name' }}</p>
                <p class="ml-4"><strong>Size:</strong> {{ $item->size ?? 'No Size' }}</p>
                <p class="ml-4"><strong>Quantity:</strong> {{ $item->quantity ?? 'No Quantity' }}</p>
                <p class="ml-4"><strong>Price:</strong> {{ $item->price ?? 'No Price' }}</p>
            @endforeach
            <p><strong>Received at:</strong> {{ $order->created_at }}</p>
        </div>
    </div>
</div>
<hr class="mt-3">
<div class="row justify-content-end mt-3">
    <a href="{{route('delivery.orders.index')}}" class="btn btn-secondary col-1 mr-3">
        {{__('Back')}}
    </a>
    <button type="submit" class="btn btn-primary col-1  mr-3">
        {{$btn_label ?? __('Add')}}
    </button>
</div>
