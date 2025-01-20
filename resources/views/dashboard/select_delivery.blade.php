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

    <div class="container">
    <h1>اختر الديلفري</h1>
    <!-- <form action="{{ route('site.assign.delivery', $order->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="delivery_id">الديلفري:</label>
            <select name="delivery_id" id="delivery_id" class="form-control" required>
                @foreach($deliveries as $delivery)
                    <option value="{{ $delivery->id }}">{{ $delivery->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">إرسال الطلب</button>
    </form> -->

    <form action="{{ route('assign.delivery', ['orderId' => $order->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="delivery_id">اختر الديلفري:</label>
        <select name="delivery_id" id="delivery_id" class="form-control" required>
            @foreach($deliveries as $delivery)
                <option value="{{ $delivery->id }}">{{ $delivery->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">إرسال الطلب</button>
</form>
</div>
</x-dashboard-layout>
