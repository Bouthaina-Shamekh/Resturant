<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.categories.index')}}">{{__('Categories')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit Category')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Edit Category')}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('dashboard.categories.update',$category->slug)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-6">
                                <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name category in arabic')}}" required :value="$category->name_ar" />
                            </div>
                            <div class="form-group col-6">
                                <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name category in english')}}"  required :value="$category->name_en" />
                            </div>
                            <div class="form-group col-6">
                                <label for="description_ar" class="form-label">{{__('Description Arabic')}}</label>
                                <textarea name="description_ar" id="description_ar" rows="3" class="form-control">{{ $category->description_en }}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="description_en" class="form-label">{{__('Description English')}}</label>
                                <textarea name="description_en" id="description_en" rows="3" class="form-control">{{ $category->description_en }}</textarea>
                            </div>
                            <div class="form-group col-6">
                                <label for="status" class="form-label">{{__('Status')}}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active" @selected($category->status == 'active')>{{__('active')}}</option>
                                    <option value="archive" @selected($category->status == 'archive')>{{__('archive')}}</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <x-form.input name="imageFile" label="{{__('Image')}}" type="file" accept="image/*" />
                                @if ($category->image != null)
                                    <img src="{{$category->image_url}}" alt="img...." width="100px" class="mt-3">
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary col-3">
                                {{__('Update')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>
