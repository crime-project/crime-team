@extends('layouts.app')

@section('content')


<div class="container">

 <h5 class="header text-center p-3">Missing Items</h5>
 <div class="row p-3">



  <div class="col-sm p-3">

    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/shining-3182654_1920.jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>


  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>


  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>

  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>
</div>




<hr class="mt-4 mb-4">
<div class="row p-3">

  <div class="col-sm p-3">

    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>


  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>


  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>

  <div class="col-sm p-3">
    <div class="card">
      <h5 class="card-header">Featured</h5>
      <img class="card-img-top" src="/assets/images/download - Copy (2).jpg" alt="Card image cap">

      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View more</button>
      </div>
    </div>

  </div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination float-right p-3">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title">Modal Header</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Right Panel -->
      <div class="col-lg-12">  
       <!--<div id="right-panel" class="right-panel">-->

        <div class="container-fluid missing-person-container">

          <!--<div class="col-12">-->
            <div class="card Missing-person">
              <h4><strong><div class="card-header text-center bg-info">Missing Persons</div></strong></h4>

              <div class="card-body">
                <form method="POST" action="http://127.0.0.1:8000/register">
                  <input type="hidden" name="_token" value="yV21wMIYxCTasrhiPledHtezmlYqERn0aoJHCXkl">
                  <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Full name </label>

                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control " name="name" value="" required="" autocomplete="name" autofocus="">


                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Address</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email">


                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password">


                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Gender</label>

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
                    <label for="password" class="col-md-4 col-form-label text-md-right">Image</label>

                    <div class="col-md-6">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>


                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-6">
                      <div class="form-group">

                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                      </div>

                    </div>
                  </div>



                  <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-9">

                      <h4><button type="button" class="btn btn-info rounded">

                        Submit
                      </button></h4>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           

          </div>

        </div>


      </div>
    </div>
  </div>-



</div>
@endsection