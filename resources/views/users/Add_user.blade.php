<x-dashboard-layout>
    @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.user.index')}}">{{__('Users')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Add Users')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Add User')}}</h5>
                </div>
                <div class="card-body">
                    {{-- <form action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('dashboard.products._form')
                    </form> --}}

                    {{-- <form action="{{ route('dashboard.user.store') }}" method="POST">
                        @csrf
                        <!-- User Name Input -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <label for="roleName" class="col-span-12 sm:col-span-3 col-form-label">{{ __('Role Name') }}</label>
                            <div class="col-span-12 sm:col-span-9">
                                <input type="text" name="name" class="form-control" id="roleName" placeholder="Enter role name">
                            </div>
                        </div>

                        <!-- Permissions -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <div class="col-form-label col-span-12 sm:col-span-3 pt-0">{{ __('Permissions') }}</div>
                            <div class="col-span-12 sm:col-span-9">
                                @foreach($permissions as $permission)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}">
                                        <label class="form-check-label" for="perm{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mb-4">{{ __('Add') }}</button>
                    </form> --}}

                    <div class="card-body">
                        <form action="{{route('dashboard.user.store')}}" method="post" enctype="multipart/form-data">
                          @csrf


                            <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputAddress">{{__('User Name')}}</label>
                                <input type="text" class="form-control" name="name" id="inputAddress" placeholder="Enter your Name" />
                              </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputEmail4">{{__('Email')}}</label>
                              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" />
                            </div>
                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputPassword4">{{__('Password')}}</label>
                              <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" />
                            </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputPassword4">{{__('Confirm Password')}}</label>
                                <input type="password" class="form-control" name="confirm-password" id="inputPassword4" placeholder="Confirm Password" />
                              </div>
                          </div>


                          <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-4 mb-4">
                              <label class="form-label" for="inputState">{{__('Status')}}</label>
                              <select id="inputState" class="form-select" name="status">
                                <option value="online" selected>{{__('Online')}}</option>
                                <option value="ofline">{{__('Ofline')}}</option>
                              </select>
                            </div>

                            <div class="col-span-12 md:col-span-4 mb-4">
                                <label class="form-label" for="inputState">{{__('Role Name')}}</label>
                                {!! Form::select('roles_name[]', $roles,[], array('class' => ['form-control','basic-multiple'],'multiple')) !!}
                              </div>


                          </div>

                          <button type="submit" class="btn btn-primary">{{__('Add User')}}</button>
                        </form>
                      </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.basic-multiple').select2();
        });
    </script>
    @endpush

</x-dashboard-layout>
