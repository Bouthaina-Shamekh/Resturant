<div class="row">
    <div class="form-group col-6 mb-3">
        <x-form.input name="name_ar" label="{{__('Name_AR')}}" type="text" placeholder="{{__('enter name product in arabic')}}" required :value="$product->name_ar" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input name="name_en" label="{{__('Name_EN')}}" type="text" placeholder="{{__('enter name product in english')}}"  required :value="$product->name_en" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input name="price" label="{{__('Price')}}" type="number" min="0" placeholder="{{__('enter Price')}}"  required :value="$product->price" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input name="sale_price" label="{{__('Sale price')}}" type="number" min="0" placeholder="{{__('enter Sale price')}}" :value="$product->sale_price" />
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
    <div class="form-group col-6">
        <x-form.input name="imageFile" label="{{__('Image')}}" type="file" accept="image/*" />
        @if ($product->image != null)
            <img src="{{$product->image_url}}" alt="img...." width="100px" class="mt-3">
        @endif
    </div>

</div>
<div class="row justify-content-end mt-3">
    <button type="submit" class="btn btn-primary col-3">
        {{__('Submit')}}
    </button>
</div>
