@extends('layouts.app')

@section('content')


@include('layouts.dash-panal')

<!-- Right Panel -->
<div class="col-lg-8">  
 <!--<div id="right-panel" class="right-panel">-->

    <div class="container-fluid missing-person-container">

        <!--<div class="col-12">-->
            <div class="card Missing-person">
                <h4><strong><div class="card-header text-center bg-info">Missing Persons</div></strong></h4>

                <div class="card-body">
                    <form method="POST" action="/people" enctype="multipart/form-data">
                       {{csrf_field()}}

                      
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Full name </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="fullname" value="" required="" autocomplete="name" autofocus="">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="address" value="" required="" autocomplete="email">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="phone_no" required="" autocomplete="new-password">


                            </div>
                        </div>

                      

                              <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" id="defaultInline1" name="gender" <?php if (isset($gender) && $gender=="female") ?> value="female">
                                  <label class="custom-control-label" for="defaultInline1">Female</label>
                              </div>

                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" id="defaultInline2" name="gender" <?php if (isset($gender) && $gender=="male") ?> value="male">
                                  <label class="custom-control-label" for="defaultInline2">Male</label>
                              </div>
                          </div>
                      </div>









      






                      <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Image</label>

                        <div class="col-md-6">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="cover_image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>


                    </div>
                </div>



               <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-8">
                        <div class="form-group">

                          <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="description"></textarea>
                      </div>

                  </div>
              </div>


              


              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-10">

                  <h4><button type="Submit" class="btn btn-info rounded pt-2 pb-2 pl-4 pr-4">

                    Submit
                </button></h4>
            </div>
        </div>


    </form>
</div>
</div>
<!-- </div>-->
</div>
</div>


<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
</main>
</div>

@endsection