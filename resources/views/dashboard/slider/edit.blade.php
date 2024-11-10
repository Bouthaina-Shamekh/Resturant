<x-dashboard-layout>
    @push('styles')
        <link rel="stylesheet" href="{{asset('assets-dashboard/css/media.css')}}">
    @endpush
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.slider.index')}}">{{__('Slider')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Edit Slider')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                    {{-- @can('add product') --}}
                <div class="card-header">
                    <h5>{{__('Edit Slider')}}</h5>
                </div>
                {{-- @endcan --}}
                <div class="card-body">
                    <form action="{{route('dashboard.slider.update',$slid->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-6 mb-3">
                                <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name restarant in arabic')}}" required :value="$slid->name_ar" />
                            </div>
                            <div class="form-group col-6 mb-3">
                                <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name restarant in english')}}" required :value="$slid->name_en"/>
                            </div>

                            <div class="form-group col-6 mb-3">
                                <label for="content_en" class="form-label">{{__('Content Arabic')}}</label>
                                <textarea name="description_ar" id="description_ar" rows="3" class="form-control" required>{{$slid->description_ar}}</textarea>
                            </div>

                            <div class="form-group col-6 mb-3">
                                <label for="content_en" class="form-label">{{__('Content English')}}</label>
                                <textarea name="description_en" id="description_en" rows="3" class="form-control" required>{{$slid->description_en}}</textarea>
                            </div>

                            <div class="form-group col-6">

                                <label for="imageFile" class="form-label">{{__('Image')}}</label>
                                <label class="btn btn-outline-secondary" for="imageFile">
                                    <i class="ti ti-upload me-2"></i>
                                    {{__("Choose Image")}}
                                </label>
                                <button type="button" id="imageFile" class="d-none" data-pc-toggle="modal" data-pc-target="#mediaModal"></button>
                                <input type="text" id="imagePathInput" value="" name="imagePath" accept="image/*" readonly>

                                    <img src="{{asset('storage/' . $slid->image)}}" alt="img...." width="100px" class="mt-3">

                            </div>


                        </div>
                        <div class="row justify-content-end mt-3">
                            <a href="{{route('dashboard.slider.index')}}" class="btn btn-secondary col-1 mr-3">
                                {{__('Back')}}
                            </a>
                            <button type="submit" class="btn btn-primary col-1  mr-3">
                                {{__('Update')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="mediaModalLabel">
                    {{__('Choose Image')}}
                </h5>
                <div class="row align-items-center">
                    <form class="col-9" id="uploadForm" action="{{ route('dashboard.media.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="btn btn-outline-secondary" for="imageFileUpload">
                            <i class="ti ti-upload me-2"></i>
                            {{__("Click to Upload")}}
                        </label>
                        <input type="file" id="imageFileUpload" name="imageFile[]" accept="image/*" hidden multiple>
                    </form>
                    <button data-pc-modal-dismiss="#mediaModal" class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body masonry-column">
                @foreach ($images as $image)
                    <div class="masonry-item relative" data-image-path="{{$image->path}}" id="image-{{$image->id}}">
                        <img src="{{asset('storage/'.$image->path)}}" alt="صورة 1">
                        <div class="caption">
                            {{$image->file_name}} - {{ App\Helpers\FormatSize::formatSize($image->size) }}
                        </div>
                        <div class="absolute p-[9px] text-white del" id="del-{{$image->id}}" data-id="{{$image->id}}">
                            <button>X</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


    @push('scripts')
<script>
    $(document).ready(function() {
        $('.masonry-item').on('click', function() {
            let pathImage = $(this).data('image-path');
            $('#imagePathInput').val(pathImage); // تخزين المسار في حقل إدخال مخفي أو عرضه في مكان آخر
        });
        $('.del').on('click', function() {
            let id = $(this).data('id');
            $('#image-'+id).remove();
            $.ajax({
                url: "/dashboard/media/" + id,
                type: "DELETE",
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    // console.log(response);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
        $('#imageFileUpload').on('change', function() {
            $('#uploadForm').submit();
        });

    });
</script>
    @endpush
</x-dashboard-layout>
