<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.role.index')}}">{{__('Roles')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Add Role')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Add Role')}}</h5>
                </div>
                <div class="card-body">
                    {{-- <form action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('dashboard.products._form')
                    </form> --}}
                    <div class="card">
                        <div class="card-header">
                          <h5>{{__('Add Role')}}</h5>
                        </div>
                        <div class="card-body">
                          <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 lg:col-span-6">

                              <hr class="my-4 border-0 border-t border-theme-border dark:border-themedark-border" />
                              {{-- <form>
                                <div class="grid grid-cols-12 gap-6 mb-4">
                                  <label for="inputEmail3" class="col-span-12 sm:col-span-3 col-form-label">{{__('Role Name')}}</label>
                                  <div class="col-span-12 sm:col-span-9">
                                    <input type="email" class="form-control" id="inputEmail3" />
                                  </div>
                                </div>


                                <div class="grid grid-cols-12 gap-6 mb-4">
                                  <div class="col-form-label col-span-12 sm:col-span-3 pt-0">{{__('Roles')}}</div>
                                  <div class="col-span-12 sm:col-span-9">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="gridCheck1" />
                                      <label class="form-check-label" for="gridCheck1">Example checkbox</label>
                                    </div>
                                  </div>
                                </div>


                                <button type="submit" class="btn btn-primary mb-4">{{__('Add')}}</button>
                              </form> --}}
                              <form action="{{ route('dashboard.role.store') }}" method="POST">
                                @csrf
                                <!-- Role Name Input -->
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
                            </form>

                            </div>


                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
