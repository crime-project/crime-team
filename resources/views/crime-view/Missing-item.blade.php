@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<!-- Right Panel -->
<div class="col-lg-8"> 
   <!--<div id="right-panel" class="right-panel">-->

    <div class="container-fluid missing-item-container">

  <!-- <div class="col-12">-->
         <!--  <div class="container missing-item-container">-->
            <!-- <div class="row justify-content-center">-->
                 <!--<div class="col-md-10">-->
                    <div class="card missing-item">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Missing Items') }}</div></strong></h4>

                        <div class="card-body">

                    <form method="post" action="/lostitem" enctype="multipart/form-data">
                        {{csrf_field()}}


                                <div class="form-group row">
                                    <label for="item_own_name" class="col-md-4 col-form-label text-md-right">{{ __('Item Owner Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="item_own_name" type="text" class="form-control @error('item_own_name') is-invalid @enderror" name="item_own_name" value="{{ old('item_own_name') }}" required autocomplete="item_own_name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="item_name" class="col-md-4 col-form-label text-md-right">{{ __('Item Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="item_name" type="text" class="form-control @error('item_name') is-invalid @enderror" name="item_name" value="{{ old('item_name') }}" required autocomplete="item_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="email">
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
                                            aria-describedby="inputGroupFileAddon01" name="cover_image">

                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                      
                                      <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="description"></textarea>
                                  </div>
                                  
                              </div>
                          </div>



                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-9">
                               
                              <h4><button type="Submit" class="btn btn-info rounded">

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
</main>
</div>

@endsection