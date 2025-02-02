<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Tables')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12">
        <div class="card">
            <div class="card-header flex items-center justify-between p-2">
                <div class="sm:flex items-center justify-between">
                    <h5 class="mb-sm-0">{{__('Tables List')}}</h5>
                </div>
                <div class="sm:flex items-center justify-between">
                    <form action="{{ route('dashboard.tables.store') }}" method="post">
                        @csrf
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Number" name="num">
                                <button class="btn btn-outline-success" type="submit">
                                    <i class="ti ti-check"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                    @foreach ($tables as $table)
                    <div class="col-span-12 lg:col-span-3 md:col-span-6">
                        <div class="card table-card-view cursor-pointer" id="table_{{$table->id}}" data-status="{{$table->status}}" data-id="{{$table->id}}">
                            <div class="card-body {{ $table->status == '1' ? 'bg-success-500' : '' }}">
                                <div class="grid grid-cols-12 gap-x-3">
                                    <div class="col-span-8">
                                        <h3 class="mb-1">{{$table->number}}</h3>
                                        <p class="text-muted mb-0">{{$table->status == '1' ? 'Not Available' : 'Available'}}</p>
                                    </div>
                                    <div class="col-span-4 ltr:text-right rtl:text-left">
                                        <i class="fas fa-chair {{ $table->status == '1' ? 'text-white' : 'text-success-500' }} text-4xl leading-none"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.table-card-view ').click(function() {
                    let table_id = $(this).data('id');
                    let state = $(this).data('status');
                    if(state != '1') {
                        return;
                    }
                    if(confirm('Are you sure you want to cancel this table?')) {
                        $.ajax({
                            url: '/dashboard/tables/' + table_id,
                            type: "PUT",
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                window.location.href = "{{route('dashboard.tables.index')}}";
                            }
                        });
                    }
                    
                });
            })
        </script>
    @endpush
</x-dashboard-layout>
