<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.role.index')}}">{{__('Roles')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit Role')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit Role')}}</h5>
                </div>
                <div class="card-body">

                    {{-- <form action="{{ route('dashboard.role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Role Name Input -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <label for="roleName" class="col-span-12 sm:col-span-3 col-form-label">{{ __('Role Name') }}</label>
                            <div class="col-span-12 sm:col-span-9">
                                <input type="text" name="name" class="form-control" id="roleName" placeholder="Enter role name" value="{{ $role->name }}">
                            </div>
                        </div>

                        <!-- Permissions -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <div class="col-form-label col-span-12 sm:col-span-3 pt-0">{{ __('Permissions') }}</div>
                            <div class="col-span-12 sm:col-span-9">
                                @foreach($permissions as $permission)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}"
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="perm{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mb-4">{{ __('Update') }}</button>
                    </form> --}}

                    <form action="{{ route('dashboard.role.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Role Name Input -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <label for="roleName" class="col-span-12 sm:col-span-3 col-form-label">{{ __('Role Name') }}</label>
                            <div class="col-span-12 sm:col-span-9">
                                <input type="text" name="name" class="form-control" id="roleName" placeholder="Enter role name" value="{{ $role->name }}">
                            </div>
                        </div>

                        <!-- Permissions -->
                        <div class="grid grid-cols-12 gap-6 mb-4">
                            <div class="col-form-label col-span-12 sm:col-span-3 pt-0">{{ __('Permissions') }}</div>
                            <div class="col-span-12 sm:col-span-9">
                                {{-- @foreach($permissions as $permission)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}"
                                            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="perm{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endforeach --}}

                                @foreach($permissions as $permission)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="perm{{ $permission->id }}"
            {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>
        <label class="form-check-label" for="perm{{ $permission->id }}">{{ $permission->name }}</label>
    </div>
@endforeach


                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mb-4">{{ __('Update') }}</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
