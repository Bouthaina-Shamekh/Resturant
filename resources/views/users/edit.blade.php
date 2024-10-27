<x-dashboard-layout>
    @push('styles')
    <link href="{{asset('assets-dashboard/css/plugins/select2.min.css')}}" rel="stylesheet" />
    @endpush

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.user.index')}}">{{__('Users')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit User')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit User')}}</h5>
                </div>
                {{-- @if ($errors->any())
                    {{$errors}}
                @endif --}}
                <div class="card-body">
                    <form action="{{route('dashboard.user.update',$admin->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputAddress">{{__('User Name')}}</label>
                                <input type="text" class="form-control" name="name" id="inputAddress" placeholder="Enter your Name" value="{{ $admin->name }}" />
                              </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputEmail4">{{__('Email')}}</label>
                              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email"value="{{ $admin->email }}" />
                            </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputPassword4">{{__('Password')}}</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                            </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputPassword4">{{__('Confirm Password')}}</label>
                                <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password" />
                              </div>
                          </div>


                          <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-4 mb-4">
                              <label class="form-label" for="inputState">{{__('Status')}}</label>
                              <select id="status" class="form-select" name="status">
                                <option value="online" @selected($admin->status == "online")>{{__('Online')}}</option>
                                <option value="ofline" @selected($admin->status == "ofline")>{{__('Ofline')}}</option>
                              </select>
                            </div>

                            <div class="col-span-12 md:col-span-4 mb-4">
                                <label class="form-label" for="inputState">{{__('Role Name')}}</label>
                                {{-- {!! Form::select('roles_name[]', $roles,[], array('class' => ['basic-multiple','form-select'],'multiple',)) !!} --}}
                                <select id="roles_name" class="form-select basic-multiple" name="roles_name[]" multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{$role}}" @selected($admin->roles->where('name',$role)->first() == $role)>{{$role}}</option>
                                    @endforeach
                                </select>
                            </div>


                          </div>
                          <button type="submit" class="btn btn-primary">{{__('Update')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('assets-dashboard/js/plugins/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.basic-multiple').select2();
            // ضبط العناصر المحددة استنادًا إلى البيانات الحالية
            let selectedRoles = @json($admin->roles->pluck('name')->toArray());
            $('#roles_name').val(selectedRoles).trigger('change');
        });
    </script>
    @endpush
</x-dashboard-layout>
