<x-dashboard-layout>
    @push('styles')
        <style>
            /* تخصيص شبكة الصور */
            .masonry-column {
                column-count: 4; /* عدد الأعمدة */
                column-gap: 1.5rem;
            }
            @media (max-width: 1024px) {
                .masonry-column {
                    column-count: 3; /* عدد الأعمدة */
                }
            }
            @media (max-width: 768px) {
                .masonry-column {
                    column-count: 1; /* عدد الأعمدة */
                }
            }
            .masonry-item {
                break-inside: avoid;
                margin-bottom: 1.5rem;
                background-color: #f8f9fa;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s;
            }
            .masonry-item:hover {
                transform: scale(1.03); /* تكبير الصورة عند التمرير */
            }
            .masonry-item img {
                width: 100%;
                height: auto;
                display: block;
                border-bottom: 5px solid #ddd;
            }
            /* نص توضيحي أسفل كل صورة */
            .caption {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
                color: #555;
                text-align: center;
                font-family: 'Arial', sans-serif;
            }
        </style>
        <style>
            .del{
                width: 25px;
                height: 25px;
                transition: all 0.3s ease-in;
                top: -75px;
                right: 0;
                background-color: red;
                border-radius: 50%;
                font-size: 16px;
                font-weight: bold;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 5px;
            }
            .masonry-item:hover > .del{
                top : 0px !important;
                right: 0px !important;
            }
            .del:hover{
                transform: scale(1.1); /* تكبير الصورة عند التمرير */
            }
        </style>
    @endpush
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Media')}}</li>
    </x-slot:breadcrumb>
    <!-- Both borders table start -->
    <div class="col-span-12">
        <div class="card table-card">
            <div class="card-header" style="padding: 15px 25px;">
                <div class="sm:flex items-center justify-between">
                    <h5 class="mb-3 sm:mb-0">{{__('Media Gallery')}}</h5>
                    <div>
                        <form id="uploadForm" action="{{ route('dashboard.media.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <label class="btn btn-outline-secondary" for="imageFile">
                                    <i class="ti ti-upload me-2"></i>
                                    {{__("Click to Upload")}}
                                </label>
                                <input type="file" id="imageFile" name="imageFile[]" accept="image/*" hidden multiple>
                                {{-- <input type="text" name="path" id="pathImage" hidden> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body pt-3 container  masonry-column">
                @foreach ($images as $image)
                <div class="masonry-item relative" id="image-{{$image->id}}">
                    <img src="{{$image->path_url}}" alt="صورة 1">
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
    <!-- Both borders table end -->
    <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title h4" id="mediaModalLabel">Large Modal</h5>
                <button data-pc-modal-dismiss="#bd-example-modal-lg" class="text-lg flex items-center justify-center rounded w-7 h-7 text-secondary-500 hover:bg-danger-500/10 hover:text-danger-500">
                    <i class="ti ti-x"></i>
                </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#imageFile').on('change', function() {
                $('#uploadForm').submit();
            });
        </script>
        <script>
            $(document).ready(function() {
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
            });
        </script>
    @endpush
</x-dashboard-layout>
