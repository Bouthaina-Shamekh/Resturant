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
    <div class="col-span-12 xl:col-span-12">
        <div class="card">
            <div class="card-header flex" style="align-items: center; justify-content: space-between">
                <div class="col">
                    <h5>{{__('Products')}}</h5>
                </div>
                <div class="col-auto">
                    <a href="{{route('dashboard.products.create')}}" class="btn btn-primary">
                        {{__('Add Product')}}
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
                                <th>{{__('Content')}}</th>
                                <th>{{__('Quantity')}}</th>
                                <th>{{__('Category')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('created_by')}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name_ar}}</td>
                                <td>{{$product->name_en}}</td>
                                <td>{{$product->content_ar}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->category->name_ar}}</td>
                                <td>{{$product->status}}</td>
                                <td>{{$product->created_by}}</td>
                                <td>
                                    {{-- <a href="{{route('dashboard.products.show',$product->id)}}" class="text-success p-3" title="{{__('View')}}">
                                        <i class="fas fa-eye"></i>
                                    </a> --}}
                                    <a href="{{route('dashboard.products.edit',$product->id)}}" class="text-warning p-3"  title="{{__('Edit')}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('dashboard.products.destroy',$product->id)}}" method="post">
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

</x-dashboard-layout>
