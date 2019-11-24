@extends('layouts.app')

@section('content')
<div class="container missing-person-container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card Missing-person">
                <h4><strong><div class="card-header text-center bg-info">{{ __('Missing Persons') }}</div></strong></h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full name ') }}</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofoaddress
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                              <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline1">Male</label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
  <label class="custom-control-label" for="defaultInline2">Female</label>
</div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="person_image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

                               
                            </div>
                        </div>



                            <div class="form-group row">
                            <label for="person_description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <div class="form-group">
  
  <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
</div>
                               
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-9">
                         
                  <h4><button type="button" class="btn btn-info rounded">

                                    {{ __('Submit') }}
                                </button></h4>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

