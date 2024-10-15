<div class="row">
    <div class="form-group col-6 mb-3">
        <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name product in arabic')}}" required :value="$product->name_ar" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name product in english')}}"  required :value="$product->name_en" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input name="quantity" label="{{__('Quantity')}}" type="number" min="0" placeholder="{{__('enter quantity')}}"  required :value="$product->quantity" />
    </div>
    <div class="form-group col-6 mb-3">
        <label for="status" class="form-label">{{__('Status')}}</label>
        <select name="status" id="status" class="form-control">
            <option value="active" @selected($product->status == 'active')>{{__('active')}}</option>
            <option value="archive" @selected($product->status == 'archive')>{{__('archive')}}</option>
        </select>
    </div>
    <div class="form-group col-6 mb-3">
        <label for="content_ar" class="form-label">{{__('Content Arabic')}}</label>
        <textarea name="content_ar" id="content_ar" rows="3" class="form-control" required>{{ $product->content_ar }}</textarea>
    </div>
    <div class="form-group col-6 mb-3">
        <label for="content_en" class="form-label">{{__('Content English')}}</label>
        <textarea name="content_en" id="content_en" rows="3" class="form-control">{{ $product->content_en }}</textarea>
    </div>
    <div class="form-group col-6 mb-3">
        <label for="category_id" class="form-label">{{__('Category')}}</label>
        <select id="category_id" name="category_id" class="form-control" >
            <option value="" disabled selected>{{__('Choose')}}</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" @selected($product->category_id == $category->id)>{{$category->name_en . ' - ' . $category->name_ar}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-6">
        <x-form.input name="imageFile" label="{{__('Image')}}" type="file" accept="image/*" />
        @if ($product->image != null)
            <img src="{{$product->image_url}}" alt="img...." width="100px" class="mt-3">
        @endif
    </div>
    <div class="form-group col-6 mb-3">
        <label for="mealCount" class="form-label">{{__('Number of Meals')}}</label>
        <select id="mealCount" name="mealCount" class="form-control" >
            <option value="" disabled selected>{{__('Choose')}}</option>
            <option value="1" @selected($product->meals->count() == 1)>{{__('One main meal')}}</option>
            <option value="2" @selected($product->meals->count() == 2)>{{__('Two meals, family and individual')}}</option>
            <option value="3" @selected($product->meals->count() == 3)>{{__('Three meals')}}</option>
        </select>
    </div>

</div>
<hr>
<div class="row mt-3">
    <h3 class="mb-3">{{__('Meal Sections')}}</h3>
    <table class="table table-hover table-bordered" id="pc-dt-simple">
        <thead>
        <tr>
            <th>#</th>
            <th>{{__('Name_AR')}}</th>
            <th>{{__('Name_EN')}}</th>
            <th>{{__('Price')}}</th>
            <th>{{__('Compare price')}}</th>
        </tr>
        </thead>
        <tbody id="mealsContainer">
            @for ($i = 1; $i <= $product->meals->count(); $i++)
                <tr id="meal_{{$i}}">
                    <td>{{$i}}</td>
                    <td>
                        <x-form.input value="{{$product->meals->where('num_meal',$i)->first()->name_ar}}" name="name_ar_{{$i}}" type="text" placeholder="{{__('Enter Arabic name')}}" required />
                    </td>
                    <td>
                        <x-form.input value="{{$product->meals->where('num_meal',$i)->first()->name_en}}" name="name_en_{{$i}}" type="text" placeholder="{{__('Enter English name')}}" required />
                    </td>
                    <td>
                        <x-form.input value="{{$product->meals->where('num_meal',$i)->first()->price}}" name="price_{{$i}}" type="number" min="0" placeholder="{{__('Enter price')}}" required />
                    </td>
                    <td>
                        <x-form.input value="{{$product->meals->where('num_meal',$i)->first()->sale}}" name="compare_price_{{$i}}" type="number" min="0" placeholder="{{__('Enter compare price')}}" />
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>
<div class="row justify-content-end mt-3">
    <button type="submit" class="btn btn-primary col-2">
        {{$btn_label ?? __('Add')}}
    </button>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        // عند إدخال عدد الوجبات
        $('#mealCount').change(function() {
            let mealCount = $(this).val();
            $('#mealsContainer').empty(); // تفريغ الحاوية لإضافة الوجبات الجديدة
            for (let i = 1; i <= mealCount; i++) {
                let name_ar = "";
                let name_en = "";
                if(i == 1){
                    name_ar = "الوجبة الرئيسية";
                    name_en = "Main meal";
                }
                if(i == 2){
                    name_ar = "الوجبة الفردية";
                    name_en = "Individual meal";
                }
                if(i == 3){
                    name_ar = "وسط";
                    name_en = "Middel";
                }

                let mealRow = `
                <tr id="meal_${i}">
                    <td>${i}</td>
                    <td>
                        <x-form.input value="${name_ar}" id="name_ar_${i}" name="name_ar_${i}" type="text" placeholder="{{__('Enter Arabic name')}}" required />
                    </td>
                    <td>
                        <x-form.input value="${name_en}" id="name_en_${i}" name="name_en_${i}" type="text" placeholder="{{__('Enter English name')}}" required />
                    </td>
                    <td>
                        <x-form.input id="price_${i}" name="price_${i}" type="number" min="0" placeholder="{{__('Enter Price')}}" required />
                    </td>
                    <td>
                        <x-form.input id="sale_price_${i}" name="sale_price_${i}" type="number" min="0" placeholder="{{__('Enter Compare Price')}}" />
                    </td>
                </tr>
                `;
                $('#mealsContainer').append(mealRow); // إضافة صف الوجبة إلى الحاوية
            }
        });
    });
</script>
@endpush
