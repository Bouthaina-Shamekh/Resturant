<x-dashboard-layout>
    @push('styles')
        <style>
            td:last-of-type{
                display: flex;
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
    <div class="col-span-12">
        <div class="card table-card">
            <div class="card-header">
                <div class="sm:flex items-center justify-between">
                    <h5 class="mb-3 sm:mb-0">{{__('Categories')}}</h5>
                    @can('add category')
                    <div>
                        <a href="#" class="btn btn-primary" data-pc-toggle="offcanvas" data-pc-target="#categoryAdd" aria-controls="categoryAdd">
                            {{__('Add Category')}}
                        </a>
                    </div>
                    @endcan
                </div>
            </div>
            <div class="card-body pt-3">
                <div class="table-responsive" style="margin: 0 15px;">
                    <table class="table table-hover table-bordered" id="pc-dt-simple">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Description')}}</th>
                            <th>{{__('status')}}</th>
                            <th>{{__('created_by')}}</th>
                            <th>{{__('Action')}}</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="flex items-center w-44">
                                        <div class="shrink-0">
                                            <img src="{{ $category->image_url }}" alt="user image" class="rounded-full w-10" />
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            @if(App::getLocale() == 'ar')
                                            <h6 class="mb-0">{{$category->name_ar}}</h6>
                                            @else
                                            <h6 class="mb-0">{{$category->name_en}}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                @if(App::getLocale() == 'ar')
                                    <td>{{$category->description_ar}}</td>
                                @else
                                    <td>{{$category->description_en}}</td>
                                @endif
                                <td>{{$category->status}}</td>
                                <td>{{$category->created_by}}</td>
                                <td>
                                    @can('edit category')
                                    <a href="{{route('dashboard.categories.edit',$category->slug)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                        <i class="ti ti-edit text-xl leading-none"></i>
                                    </a>
                                    @endcan

                                    @can('delete category')
                                    <form action="{{route('dashboard.categories.destroy',$category->slug)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary" title="{{__('Delete')}}">
                                            <i class="ti ti-trash text-xl leading-none"></i>
                                        </button>
                                    </form>
                                    @endcan
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

    <!-- Modal -->
    <div class="offcanvas pc-announcement-offcanvas offcanvas-end" tcabindex="-1" id="categoryAdd" aria-labelledby="categoryAddLabel">
        <div class="offcanvas-header">
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
                    <form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name category in arabic')}}" required />
                            </div>
                            <div class="form-group col-6">
                                <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name category in english')}}"  required />
                            </div>
                            <div class="form-group col-12">
                                <label for="description_ar" class="form-label">{{__('Description Arabic')}}</label>
                                <textarea name="description_ar" id="description_ar" rows="2" class="form-control">{{ old('description_ar') }}</textarea>
                            </div>
                            <div class="form-group col-12">
                                <label for="description_en" class="form-label">{{__('Description English')}}</label>
                                <textarea name="description_en" id="description_en" rows="2" class="form-control">{{ old('description_en') }}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="status" class="form-label">{{__('Status')}}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active">{{__('active')}}</option>
                                    <option value="archive">{{__('archive')}}</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="imageFile" class="form-label">{{__('Image')}}</label>
                                <label class="btn btn-outline-secondary" for="imageFile">
                                    <i class="ti ti-upload me-2"></i>
                                    {{__("Choose Image")}}
                                </label>
                                <input type="file" id="imageFile" name="imageFile[]" accept="image/*" hidden multiple>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary col-3">
                                {{__('Add')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                @if ($errors->any())
                    // Open the pop-up when there are validation errors
                    $('#categoryAdd').addClass('show');
                @endif
            });
        </script>
    @endpush
</x-dashboard-layout>
