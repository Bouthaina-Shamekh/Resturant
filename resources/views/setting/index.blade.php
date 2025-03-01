<x-dashboard-layout>
    @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush

    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.setting.index')}}">{{__('Settings')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Add Setting')}}</li>
    </x-slot:breadcrumb>
    <div class="col-span-12 xl:col-span-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{__('Add Seetings')}}</h5>
                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <div class="alert alert-danger" role="alert">
                                    {{$err}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="card-body">


                    <div class="card-body">
                        {{-- <form action="{{route('dashboard.user.store')}}" method="post" enctype="multipart/form-data">
                          @csrf


                            <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputAddress">{{__('User Name')}}</label>
                                <input type="text" class="form-control" name="name" id="inputAddress" placeholder="Enter your Name" />
                              </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputEmail4">{{__('Email')}}</label>
                              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" />
                            </div>
                            <div class="col-span-12 md:col-span-6 mb-4">
                              <label class="form-label" for="inputPassword4">{{__('Password')}}</label>
                              <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" />
                            </div>

                            <div class="col-span-12 md:col-span-6 mb-4">
                                <label class="form-label" for="inputPassword4">{{__('Confirm Password')}}</label>
                                <input type="password" class="form-control" name="confirm-password" id="inputPassword4" placeholder="Confirm Password" />
                              </div>
                          </div>


                          <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 md:col-span-4 mb-4">
                              <label class="form-label" for="inputState">{{__('Status')}}</label>
                              <select id="inputState" class="form-select" name="status">
                                <option value="online" selected>{{__('Online')}}</option>
                                <option value="ofline">{{__('Ofline')}}</option>
                              </select>
                            </div>

                            <div class="col-span-12 md:col-span-4 mb-4">
                                <label class="form-label" for="inputState">{{__('Role Name')}}</label>
                                {!! Form::select('roles_name[]', $roles,[], array('class' => ['form-control','basic-multiple'],'multiple')) !!}
                              </div>


                          </div>

                          <button type="submit" class="btn btn-primary">{{__('Add User')}}</button>
                        </form> --}}

                        <form action="{{route('dashboard.setting.update')}}" method="POST"  enctype="multipart/form-data">
                            @csrf


                            <div class="mb-4">
                                <label class="form-label">{{ __('Facebook') }}</label>
                                <input type="text"  class="form-control" placeholder="Facebook" name="facebook" value="{{ old('facebook',$settings['facebook'] ?? '')}}" />
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('Snapshat') }}</label>
                                <input type="text"  class="form-control" placeholder="Snapshat" name="snapshat" value="{{ old('snapshat',$settings['snapshat'] ?? '')}}" />
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('WhatsApp') }}</label>
                                <input type="text"  class="form-control" placeholder="WhatsApp" name="whatsapp" value="{{ old('whatsapp',$settings['whatsapp'] ?? '')}}">
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('Twitter') }}</label>
                                <input type="text"  class="form-control" placeholder="twitter" name="twitter" value="{{ old('twitter',$settings['twitter'] ?? '')}}">
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('Instagram') }}</label>
                                <input type="text"  class="form-control" placeholder="instagram" name="instagram" value="{{ old('instagram',$settings['instagram'] ?? '')}}">
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('Location') }}</label>
                                <input type="text"  class="form-control" placeholder="location" name="location" value="{{ old('location',$settings['location'] ?? '')}}">
                              </div>


                              <div class="mb-4">
                                <label class="form-label">{{ __('Website') }}</label>
                                <input type="text"  class="form-control" placeholder="website" name="website" value="{{ old('website',$settings['website'] ?? '')}}">
                              </div>

                              <div class="mb-4">
                                <label class="form-label" for="inputState">{{ __('Currency') }}</label>
                                <select name="currency" class="form-select">
                                    <option value="SAR" {{ old('currency', data_get($settings, 'currency')) === 'SAR' ? 'selected' : '' }}>{{__('Riyal')}}</option>
                                    <option value="USD" {{ old('currency', data_get($settings, 'currency')) === 'USD' ? 'selected' : '' }}>{{__('Dollar')}}</option>
                                    <option value="JOD" {{ old('currency', data_get($settings, 'currency')) === 'JOD' ? 'selected' : '' }}>{{__('Dinar')}}</option>
                                    <option value="EUR" {{ old('currency', data_get($settings, 'currency')) === 'EUR' ? 'selected' : '' }}>{{__('Euro')}}</option>
                                    <option value="ILS" {{ old('currency', data_get($settings, 'currency')) === 'ILS' ? 'selected' : '' }}>{{__('Shekels')}}</option>
                                </select>
                              </div>

                            <div class="mb-4">
                                <label class="form-label">{{ __('Title in English') }}</label>
                                <textarea id="mytextarea" rows="5" name="titel_en">{{ old('titel_en', $settings['titel_en'] ?? '') }}</textarea>
                              </div>



                            <div class="mb-4">
                                <label class="form-label">{{ __('Title in Arabic') }}</label>
                                <textarea id="mytextarea" rows="5" name="titel_ar">{{ old('titel_ar', $settings['titel_ar'] ?? '') }}</textarea>
                              </div>



                              <div class="mb-4">
                                <label class="form-label"> {{ __('Logo') }}</label>
                             <input type="file" class="form-control"  name="logo"/>

                                <?php
        $logos = App\Models\Setting::Where('key','logo')->first();
                                ?>
                        @if ($logos)
                            <img src="{{ asset('uploads/logos/'.$logos->value) }}" alt="Logo" style="max-width: 100px; max-height: 100px;">
                        @elseif (old('logo'))
                            <img src="{{ asset(old('logo')) }}" alt="Logo" style="max-width: 100px; max-height: 100px;">
                        @endif
                              </div>



                              <div class="mb-4">
                                <label class="form-label">{{ __('Contact Email') }}</label>
                                <input type="email" class="form-control"  name="contact_email" value="{{ old('contact_email', $settings['contact_email'] ?? '') }}" />
                              </div>


                              <div class="mb-4">
                                <label class="form-label">{{ __('About in English') }}</label>
                                <textarea id="mytextarea" name="about_en" rows="10">{{ old('about_en', $settings['about_en'] ?? '')}}</textarea>
                              </div>


                              <div class="mb-4">
                                <label class="form-label">{{ __('About in Arabic') }} </label>
                                <textarea id="mytextarea" name="about_ar" rows="10">{{ old('about_ar', $settings['about_ar'] ?? '')}}</textarea>
                              </div>


                              <div class="mb-4">
                                <label class="form-label">{{ __('Policy in English') }}</label>
                                <textarea id="mytextarea"  name="policy_en" rows="10">{{ old('policy_en', $settings ['policy_en'] ?? '')}}</textarea>
                              </div>

                              <div class="mb-4">
                                <label class="form-label">{{ __('Policy in Arabic') }} </label>
                                <textarea id="mytextarea" name="policy_ar" rows="10">{{ old('policy_ar', $settings['policy_ar'] ?? '')}}</textarea>
                              </div>




                            <button type="submit" class="btn btn-primary mb-4">{{ __('Update') }}</button>
                          </form>

                      </div>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.4.1/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>


    @endpush


</x-dashboard-layout>

