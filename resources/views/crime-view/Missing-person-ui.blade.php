@extends('layouts.app')

@section('content')


<div class="container">

 <h5 class="header text-center p-3">Missing persons</h5>
  <div class="row p-3 border border-dark">
   


    <div class="col-sm bg-info p-3">

<div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
   <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Large modal</button>
  </div>
</div>

</div>


    <div class="col-sm bg-warning p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>


    <div class="col-sm bg-success p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>

     <div class="col-sm bg-primary p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>
  </div>




<hr class="mt-4 mb-4">
  <div class="row p-3 border border-dark">
   
    <div class="col-sm bg-info p-3">

<div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>


    <div class="col-sm bg-warning p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>


    <div class="col-sm bg-success p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    </div>

     <div class="col-sm bg-primary p-3">
      <div class="card">
  <h5 class="card-header">Featured</h5>
  <img class="card-img-top" src="assets/images/download - Copy (2).jpg" alt="Card image cap">

  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
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




<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       
        <h4 class="modal-title">Modal Header</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




</div>



@endsection