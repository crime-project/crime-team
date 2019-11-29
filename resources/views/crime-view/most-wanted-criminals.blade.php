@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<!-- Right Panel -->
<div class="col-lg-8"> 
   <!--<div id="right-panel" class="right-panel">-->

    <div class="container-fluid most-wanted-criminals-container">

        <!--<div class="col-12">-->
          <div class="container most-wanted-criminal">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card most-wanted-criminal">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Most Wanted Criminals') }}</div></strong></h4>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Criminal Full Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="cri_full_name" type="text" class="form-control @error('cri_full_name') is-invalid @enderror" name="cri_full_name" value="{{ old('cri_full_name') }}" required autocomplete="cri_full_name" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Other Names ') }}</label>

                                    <div class="col-md-6">
                                        <input id="other_names" type="text" class="form-control @error('other_names') is-invalid @enderror" name="other_names" value="{{ old('other_names') }}" required autocomplete="other_names" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                        
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
    </div>
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