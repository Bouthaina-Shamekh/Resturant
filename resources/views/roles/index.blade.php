<x-dashboard-layout>
    @push('styles')
    <style>
</style>
@endpush


<div class="col-span-12">
    <div class="card">
        <div class="card-header d-flex justify-content-end align-items-center">
            <div class="col-md-2">
                {{-- @can('اضافة مستخدم') --}}
                    <a class="btn btn-primary" href="{{route('dashboard.role.create')}}">{{__('Add Role')}}</a>
                {{-- @endcan --}}
            </div>
        </div>
      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Action')}}</th>

              </tr>
            </thead>


            <tbody>
                @foreach ($roles as $key => $role)
              <tr class="bg-secondary-500/20">
                <td>{{ ++$i }}</td>
                <td> {{ $role->name }}</td>
                {{-- <td>{{ $admin->email }}</td> --}}
                {{-- <td>
                    @if ($admin->status == 'online')
                        <span class="label text-success d-flex">
                            <div class="dot-label bg-success ml-1"></div>{{ $admin->status }}
                        </span>
                    @else
                        <span class="label text-danger d-flex">
                            <div class="dot-label bg-danger ml-1"></div>{{ $admin->status }}
                        </span>
                    @endif
                </td> --}}

                {{-- <td>
                    @if (!empty($admin->getRoleNames()))
                        @foreach ($admin->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td> --}}


                <td class="d-flex align-item-center">
                    <a href="{{route('dashboard.role.edit',$role->id)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                        <i class="ti ti-edit text-xl leading-none"></i>
                    </a>

                    @if ($role->name !== 'owner')
                    <form action="{{route('dashboard.role.destroy',$role->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('Delete')}}">
                            <i class="ti ti-trash text-xl leading-none"></i>
                        </button>
                    </form>
                    @endif
                </td>

              </tr>



              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


</x-dashboard-layout>
