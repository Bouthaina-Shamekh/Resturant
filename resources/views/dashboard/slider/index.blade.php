<x-dashboard-layout>

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Hero Slider')}}</li>
    </x-slot:breadcrumb>



<!-- Both borders table start -->
<div class="col-span-12">
    <div class="card table-card">
        <div class="card-header">
            <div class="sm:flex items-center justify-between">
                <h5 class="mb-3 sm:mb-0">{{__('Slider')}}</h5>
                <div>
                    <a href="#" class="btn btn-primary" data-pc-toggle="offcanvas" data-pc-target="#categoryAdd" aria-controls="categoryAdd">
                        {{__('Edit Slider')}}
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-3">
            <div class="table-responsive" style="margin: 0 15px;">
                <table class="table table-hover table-bordered" id="pc-dt-simple">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('Name_AR')}}</th>
                        <th>{{__('Name_EN')}}</th>
                        <th>{{__('Description_AR')}}</th>
                        <th>{{__('Description_EN')}}</th>
                        <th>{{__('Image')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{$slid->name_en}}</td>
                            <td>{{$slid->name_ar}}</td>
                            <td>{{$slid->description_en}}</td>
                            <td>{{$slid->description_ar}}</td>
                            <td>{{$slid->media->file_name}}</td>

                            <td>
                                <a href="{{route('dashboard.slider.edit',$slid->id)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                    <i class="ti ti-edit text-xl leading-none"></i>
                                </a>
                                <form action="{{route('dashboard.slider.destroy',$slid->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('Delete')}}">
                                        <i class="ti ti-trash text-xl leading-none"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Both borders table end -->



</x-dashboard-layout>
