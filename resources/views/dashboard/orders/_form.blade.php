<div class="row">
@php
    $name = 'name_'.app()->currentLocale();
@endphp
    <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
        <!-- Main Title -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Order Details</h1>
    
        <!-- Basic Order Information -->
        <div class="grid grid-cols-4 md:grid-cols-8 gap-4 mb-8">
            <div>
                <p class="text-gray-600"><strong>Type:</strong> {{ $order->type ?? 'No Type' }}</p>
                <p class="text-gray-600"><strong>Order ID:</strong> {{ $order->order_id ?? 'No Order ID' }}</p>
                <p class="text-gray-600"><strong>Table Number:</strong> {{ $order->table_number ?? 'No Table Number' }}</p>
            </div>
            <div>
                <p class="text-gray-600"><strong>Address Name:</strong> {{ $order->address_name ?? 'No Address' }}</p>
                <p class="text-gray-600"><strong>Phone:</strong> {{ $order->phone ?? 'No Phone' }}</p>
                <p class="text-gray-600"><strong>Total Amount:</strong> {{ $order->total_amount ?? 'No Amount' }}</p>
            </div>
        </div>
    
        <!-- Items Details -->
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Items Details</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-bordered border border-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-2 px-4 border-b text-left">Name</th>
                        <th class="py-2 px-4 border-b text-left">Size</th>
                        <th class="py-2 px-4 border-b text-left">Quantity</th>
                        <th class="py-2 px-4 border-b text-left">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b text-left">{{ $item->product->$name ?? 'No Name' }}</td>
                            <td class="py-2 px-4 border-b text-left">{{ $item->size->$name ?? 'No Size' }}</td>
                            <td class="py-2 px-4 border-b text-left">{{ $item->quantity ?? 'No Quantity' }}</td>
                            <td class="py-2 px-4 border-b text-left">{{ $item->price ?? 'No Price' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        <!-- Order Received At -->
        <p class="text-gray-600 mt-6"><strong>Received at:</strong> {{ $order->created_at }}</p>
    </div>
    @if ($order->type == 'outer')
    <div class="form-group col-6 mb-3">
        <label for="delivery_id" class="form-label">{{__('Choose Delivery')}}</label>
        <select name="delivery_id" id="delivery_id" class="form-control">
            <option value="" disabled @selected($order->delivery_id == null)>{{__('No Delivery')}}</option>
            @foreach($deliveries as $delivery)
                <option value="{{ $delivery->id }}" @selected($order->delivery_id == $delivery->id)>{{ $delivery->name }}</option>
            @endforeach
        </select>
    </div>
    @else
    <input type="hidden" name="order_id" value="{{$order->id}}">
    <input type="hidden" name="table_number" value="{{$order->table_number}}">
    @endif
</div>
<hr class="mt-3">
<div class="row justify-content-end mt-3">
    <a href="{{route('dashboard.users.index')}}" class="btn btn-secondary col-1 mr-3">
        {{__('Back')}}
    </a>
    <button type="submit" class="btn btn-primary col-1  mr-3">
        @if ($order->type == 'outer')
        {{$btn_label ?? __('Add')}}
        @else
        {{__('Choose Table')}}
        @endif
    </button>
</div>
