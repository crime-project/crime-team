@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<!-- Right Panel -->
<div class="col-lg-8"> 

    <div class="container-fluid missing-person-container">       
                    <div class="card Missing-vechicle">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Missing Vehicles') }}</div></strong></h4>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="own_name" type="text" class="form-control @error('own_name') is-invalid @enderror" name="own_name" value="{{ old('own_name') }}" required autocomplete="own_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="mod_number" class="col-md-4 col-form-label text-md-right">{{ __('Model Number ') }}</label>

                                    <div class="col-md-6">
                                        <input id="mod_number" type="number" class="form-control @error('mod_number') is-invalid @enderror" name="mod_number" value="{{ old('mod_number') }}" required autocomplete="mod_number" autofocus>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="num_plate" class="col-md-4 col-form-label text-md-right">{{ __('Number Plate') }}</label>

                                    <div class="col-md-6">
                                        <input id="num_plate" type="number" class="form-control @error('num_plate') is-invalid @enderror" name="email" value="{{ old('num_plate') }}" required autocomplete="num_plate">

                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="email" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="email">

                                        
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required autocomplete="phone_number">

                                        
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

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
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

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

<!-- </div>-->

</div>

<!--</div>-->
</div><!-- /#right-panel -->


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</main>
</div>

@endsection