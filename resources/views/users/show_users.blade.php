<x-dashboard-layout>
    @push('styles')
    <style>

</style>
@endpush


 <div class="card-header">
        <div class="card-header pb-0">
            <div class="col-sm-1 col-md-2">
                {{-- @can('اضافة مستخدم') --}}
                    <a class="btn btn-primary btn-sm" href="{{route('dashboard.user.create')}}">{{__('Add User')}}</a>
                {{-- @endcan --}}
            </div>
        </div>
      </div>
<div class="col-span-12">
    <div class="card">

      <div class="card-body table-border-style">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Email')}}</th>
                <th>{{__('Status')}}</th>
                <th>{{__('Roles')}}</th>
                <th>{{__('Action')}}</th>
              </tr>
            </thead>


            <tbody>
                @foreach ($data as $key => $admin)
              <tr class="bg-secondary-500/20">
                <td>{{ ++$i }}</td>
                <td> {{$admin->name}}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    @if ($admin->status == 'online')
                        <span class="label text-success d-flex">
                            <div class="dot-label bg-success ml-1"></div>{{ $admin->status }}
                        </span>
                    @else
                        <span class="label text-danger d-flex">
                            <div class="dot-label bg-danger ml-1"></div>{{ $admin->status }}
                        </span>
                    @endif
                </td>

                <td>
                    @if (!empty($admin->getRoleNames()))
                        @foreach ($admin->getRoleNames() as $v)
                            <span>{{$v}}</span> ,
                            
                        @endforeach
                    @endif
                </td>


                <td class="d-flex align-item-center">
                    <a href="{{route('dashboard.user.edit', $admin->id)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                        <i class="ti ti-edit text-xl leading-none"></i>
                    </a>
                    <form action="{{route('dashboard.user.destroy',$admin->id )}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('Delete')}}">
                            <i class="ti ti-trash text-xl leading-none"></i>
                        </button>
                    </form>
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
