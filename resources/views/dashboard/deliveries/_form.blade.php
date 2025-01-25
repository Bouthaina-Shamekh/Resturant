<div class="row">
    <div class="form-group col-6 mb-3">
        <x-form.input name="name" label="{{__('Name Delivery')}}" placeholder="{{__('Enter Name')}}" required :value="$delivery->name" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input type="email" name="email" label="{{__('Email')}}" placeholder="{{__('Enter Email')}}" required :value="$delivery->email" />
    </div>
    <div class="form-group col-6 mb-3">
        <x-form.input type="password" name="password" label="{{__('Password')}}" placeholder="{{__('Enter Password')}}" required :value="$delivery->password" />
    </div>

    <input type="hidden" name="status_accept_order" value="1">
    
    <div class="form-group col-6 mb-3">
        <label for="gender" class="form-label">{{__('Gender')}}</label>
        <select name="gender" id="gender" class="form-control">
            <option value="0" @selected($delivery->gender == 0)>{{__('Male')}}</option>
            <option value="1" @selected($delivery->gender == 1)>{{__('Female')}}</option>
        </select>
    </div>
    <div class="form-group col-6 mb-3">
        <label for="status" class="form-label">{{__('Status')}}</label>
        <select name="status" id="status" class="form-control">
            <option value="1" @selected($delivery->status == '1')>{{__('Active')}}</option>
            <option value="0" @selected($delivery->status == '0')>{{__('Archive')}}</option>
        </select>
    </div>
    <div class="form-group col-6">
        <x-form.input name="imageFile" label="{{__('Image')}}" type="file" accept="image/*" />
        @if ($delivery->image != null)
            <img src="{{$delivery->image_url}}" alt="img...." width="100px" class="mt-3">
        @endif
    </div>


    <div class="form-group col-6 mb-3">
        <x-form.input type="number" name="age" label="{{__('Age')}}" placeholder="{{__('Enter Age')}}" required :value="$delivery->age" />
    </div>


    <div class="form-group col-6 mb-3">
        <x-form.input type="number" name="phone" label="{{__('Phone')}}" placeholder="{{__('Enter phone')}}" required :value="$delivery->phone" />
    </div>
   

</div>
<hr class="mt-3">
<div class="row justify-content-end mt-3">
    <a href="{{route('dashboard.deliveries.index')}}" class="btn btn-secondary col-1 mr-3">
        {{__('Back')}}
    </a>
    <button type="submit" class="btn btn-primary col-1  mr-3">
        {{$btn_label ?? __('Add')}}
    </button>
</div>
