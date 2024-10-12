<x-dashboard-layout>
    @push('styles')
        <style>
            td a,td button{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            i{
                transition: all 0.3s;
            }
            td:last-of-type{
                display: flex;
            }
            a:hover,button:hover{
                border-radius: 15px;
                background: #ebebebad;
            }
            a:hover i,button:hover i{
                transform: scale(1.6);
            }
            table td.description {
                white-space: nowrap; /* منع التفاف النص */
                overflow: hidden; /* إخفاء النص الذي يتجاوز حدود الخلية */
                text-overflow: ellipsis; /* إظهار النقاط المتقطعة عند تجاوز الحد */
                max-width: 200px; /* تحديد الحد الأقصى لعرض الخلية */
                padding: 10px;
                transition: max-width 0.5s ease; /* تأثير سلس عند تغيير العرض */
            }

            table td.description:hover {
                max-width: 500px; /* تكبير الخلية عند الاقتراب */
                white-space: normal; /* السماح للنص بالالتفاف */
            }
        </style>
    @endpush
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Categories')}}</li>
    </x-slot:breadcrumb>
    <!-- Both borders table start -->
    <div class="col-span-12 xl:col-span-12">
        <div class="card">
            <div class="card-header flex" style="align-items: center; justify-content: space-between">
                <div class="col">
                    <h5>{{__('Categories')}}</h5>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-primary" data-pc-toggle="offcanvas" data-pc-target="#categoryAdd" aria-controls="categoryAdd">
                        {{__('Add Category')}}
                    </a>
                </div>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('Name_AR')}}</th>
                                <th>{{__('Name_EN')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('created_by')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name_ar}}</td>
                                <td>{{$category->name_en}}</td>
                                <td>{{$category->description_ar}}</td>
                                <td>{{$category->status}}</td>
                                <td>{{$category->created_by}}</td>
                                <td>
                                    {{-- <a href="{{route('dashboard.categories.show',$category->id)}}" class="text-success p-3" title="{{__('View')}}">
                                        <i class="fas fa-eye"></i>
                                    </a> --}}
                                    <a href="{{route('dashboard.categories.edit',$category->id)}}" class="text-warning p-3"  title="{{__('Edit')}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('dashboard.categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-danger p-3" title="{{__('Delete')}}">
                                            <i class="fas fa-trash"></i>
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
    <!-- Both borders table end -->

    {{-- @push('modals') --}}
    <!-- Modal -->
    <div class="offcanvas pc-announcement-offcanvas offcanvas-end" tcabindex="-1" id="categoryAdd" aria-labelledby="categoryAddLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="categoryAddLabel">What's new categoryAdd?</h5>
          <button
            data-pc-dismiss="#categoryAdd"
            class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500"
          >
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="offcanvas-body announcement-scroll-block">
            <p class="mb-3">{{__('Add Category')}}</p>
            <div class="card mb-3">
                <div class="card-body">
                    <form action="{{route('dashboard.categories.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name category in arabic')}}" required />
                            </div>
                            <div class="form-group col-6">
                                <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name category in english')}}"  required />
                            </div>
                            <div class="form-group col-6">
                                <label for="description_ar" class="form-label">{{__('Description Arabic')}}</label>
                                <textarea name="description_ar" id="description_ar" rows="3" class="form-control" required>{{ old('description_ar') }}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="description_en" class="form-label">{{__('Description English')}}</label>
                                <textarea name="description_en" id="description_en" rows="3" class="form-control">{{ old('description_en') }}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="status" class="form-label">{{__('Status')}}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active">{{__('active')}}</option>
                                    <option value="archive">{{__('archive')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary col-3">
                                {{__('Submit')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- @endpush --}}

</x-dashboard-layout>
