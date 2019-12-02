@extends('layouts.app')

@section('content')

@include('layouts.dash-panal') 

<!-- @include('layouts.date-time') -->

<!-- Right Panel -->
<div class="col-lg-8"> 

    <div class="container-fluid missing-person-container">       
                    <div class="card Missing-vechicle">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Crime Reporting') }}</div></strong></h4>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

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
                                    <label for="reference_number" class="col-md-4 col-form-label text-md-right">{{ __('Reference Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="reference_number" type="tel" class="form-control @error('reference_number') is-invalid @enderror" name="reference_number" required autocomplete="reference_number">

                                        
                                    </div>
                                </div>

                        <!--        <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Time picker ') }}</label>

                                    <div class="col-md-6">
                                     <input class="date form-control" type="text" >
                                    <script type="text/javascript">
									    $('.date').datepicker({  
									       format: 'mm-dd-yyyy'
									     });  

									</script> 

									</div>
                                </div>  -->         


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
         <!--   </div>-->
        <!-- </div>-->
   <!-- </div>-->
</div>
</div>
</div>
</div><!-- /#right-panel -->


                                   


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  -->
</main>
</div>

@endsection