@extends('layouts.app')

@section('content')


<div class="container">

 <h5 class="header text-center p-3">Missing Persons</h5>
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

        <h4 class="modal-title">Please Help Us to Find !</h4>
        <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
      </div>

      <!-- Right Panel -->
      <div class="col-lg-12">  
       <!--<div id="right-panel" class="right-panel">-->

        <div class="container-fluid missing-person-container">

          <!--<div class="col-12">-->
            <div class="card Missing-person">
              <h4><strong><div class="card-header text-center bg-secondary text-light">Missing Person</div></strong></h4>

              <div class="card-body">
                <form method="POST" action="http://127.0.0.1:8000/register">
                  <input type="hidden" name="_token" value="yV21wMIYxCTasrhiPledHtezmlYqERn0aoJHCXkl">


                     <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                  <div class="col-sm-4 p-3">

                    <div class="card">

                      <img class="card-img-top" src="/assets/images/u1.png" alt="Card image cap">

                    </div>
                  </div>
                </div>




                  <div class="form-group row">
                    <label for="name" class="col-md-2">Full name </label>

                    <div class="col-md-8">
                     <input id="email" type="email" class="form-control bg-light" name="email" value="" required="" autocomplete="email" disabled>


                   </div>
                 </div>

                 <div class="form-group row">
                  <label for="email" class="col-md-2">Address</label>

                  <div class="col-md-8">
                    <input id="email" type="email" class="form-control bg-light" name="email" value="" required="" autocomplete="email" disabled>


                  </div>
                </div>
                    
                   <div class="form-group row">
                  <label for="email" class="col-md-2">NIC No</label>

                  <div class="col-md-8">
                    <input id="email" type="email" class="form-control bg-light" name="email" value="" required="" autocomplete="email" disabled>


                  </div>
                </div>

               

                <div class="form-group row">
                <!--  <label for="password" class="col-md-4 col-form-label text-md-right ">Description</label>-->

                  <div class="col-md-12">
                    <div class="form-group">
                       <label for="password" class="">Description</label>
                     <textarea class="form-control bg-light" id="exampleFormControlTextarea3" rows="7" disabled></textarea>
                    </div>

                  </div>
                </div>


                 <div class="form-group row">
                <!--  <label for="password" class="col-md-4 col-form-label text-md-right ">Description</label>-->

                  <div class="col-md-12">
                    <div class="form-group">
                      <h4><label for="password" class="">If any clue call this number - 072-222555</label></h4>
                    
                    </div>

                  </div>
                </div>


                <!--<div class="form-group row float-right">

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>-->
              </form>
            </div>
          </div>


        </div>

      </div>


    </div>
  </div>
</div>



</div>
@endsection