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
        <li class="breadcrumb-item" aria-current="page">{{__('Products')}}</li>
    </x-slot:breadcrumb>
    <!-- Both borders table start -->
    <div class="col-span-12">
        <div class="card table-card">
            <div class="card-header">
                <div class="sm:flex items-center justify-between">
                    <h5 class="mb-3 mb-sm-0">{{__('Products')}}</h5>
                    <div>
                        <a href="{{route('dashboard.products.create')}}" class="btn btn-primary">
                            {{__('Add Product')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-3">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="pc-dt-simple">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Content')}}</th>
                            <th>{{__('Category')}}</th>
                            <th>{{__('Quantity')}}</th>
                            <th>{{__('status')}}</th>
                            <th>{{__('created_by')}}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="flex items-center w-44">
                                        <div class="shrink-0">
                                            <img src="{{ $product->image_url }}" alt="user image" class="rounded-full w-10" />
                                        </div>
                                        <div class="grow ltr:ml-3 rtl:mr-3">
                                            @if(App::getLocale() == 'ar')
                                            <h6 class="mb-0">{{$product->name_ar}}</h6>
                                            @else
                                            <h6 class="mb-0">{{$product->name_en}}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                @if(App::getLocale() == 'ar')
                                    <td>{{$product->content_ar}}</td>
                                    <td>{{$product->category->name_ar}}</td>
                                @else
                                    <td>{{$product->content_en}}</td>
                                    <td>{{$product->category->name_en}}</td>
                                @endif
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->status}}</td>
                                <td>{{$product->created_by}}</td>
                                <td>
                                    <a href="{{route('dashboard.products.edit',$product->slug)}}" class="w-8 h-8 rounded-xl inline-flex items-center justify-center btn-link-secondary">
                                        <i class="ti ti-edit text-xl leading-none"></i>
                                    </a>
                                    <form action="{{route('dashboard.products.destroy',$product->slug)}}" method="post">
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
    <!-- Both borders table end -->

</x-dashboard-layout>
