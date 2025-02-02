<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.users.index')}}">{{__('Users')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Add User')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12">
        <div class="card">
            <!-- Card Header -->
            <div class="card-header flex items-center justify-between p-2">
                <h5 class="mb-sm-0">{{ __('Tables List') }}</h5>
                <button class="btn btn-outline-success" type="button" id="chooseTableBtn">
                    <i class="ti ti-check"></i>
                    {{ __('Choose Table') }}
                </button>
            </div>
        
            <!-- Card Body -->
            <div class="card-body">
                <form id="tableForm" action="{{ route('dashboard.orders.store') }}" method="POST">
                    @csrf
                    @php
                        $request = request();
                    @endphp
                    <input type="hidden" name="order_id" value="{{$request->query('order_id')}}">
                    <input type="hidden" name="table_number" value="{{$request->query('table_number')}}">
                    <div class="grid grid-cols-12 gap-x-6">
                        @foreach ($tables as $table)
                            <div class="col-span-12 lg:col-span-3 md:col-span-6">
                                <!-- Radio Button Card -->
                                <label for="table_{{ $table->id }}" class="cursor-pointer w-100">
                                    <div class="card radio-card {{ $table->status == '1' ? 'bg-success-500' : '' }}">
                                        <div class="card-body">
                                            <h3 class="mb-1">{{ $table->number }}</h3>
                                            <p class="text-muted mb-0">{{ $table->status == '1' ? 'Not Available' : 'Available' }}</p>
                                            <i class="fas fa-chair {{ $table->status == '1' ? 'text-white' : 'text-success-500' }} text-4xl leading-none"></i>
                                        </div>
                                    </div>
                                </label>
                                <!-- Hidden Radio Input -->
                                <input type="radio" name="selected_table" id="table_{{ $table->id }}" value="{{ $table->id }}" class="hidden" {{ $table->status == '1' ? 'disabled' : '' }}>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function () {
            // Add click event to radio cards
            $('.radio-card').click(function () {
                const radioInput = $(this).parent().find('input[type="radio"]');

                // Check if the table is reserved (status = 1)
                if ($(this).hasClass('bg-success-500')) {
                    alert('This table is reserved and cannot be selected.');
                    return; // Stop further execution
                }

                // Remove selected class from all cards
                $('.radio-card').removeClass('bg-blue-500 text-white');

                // Add selected class to the clicked card
                $(this).addClass('bg-blue-500 text-white');

                // Check the corresponding radio button
                radioInput.prop('checked', true);
            });

            // Handle form submission
            $('#chooseTableBtn').click(function () {
                const selectedTable = $('input[name="selected_table"]:checked').val();
                if (selectedTable) {
                    $('#tableForm').submit(); // Submit the form
                } else {
                    alert('Please select a table.');
                }
            });
        });
    </script>
    @endpush
</x-dashboard-layout>
