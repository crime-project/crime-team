@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row pt-3">
			<div class="col-md-12 border pt-3">

				<h2 class="page-title pt-3"> Registered users</h2><br>

				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">user Details</div>
					<div class="panel-body">

						<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">

								<div class="row">
						<div class="col-sm-6">
						<div class="dataTables_length" id="zctb_length">
						<label>Show <select name="zctb_length" aria-controls="zctb" class="form-control input-sm">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
						</select> entries</label></div></div>
						<div class="col-sm-6">
						<div id="zctb_filter" class="dataTables_filter">
						<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zctb"></label>
						</div>
						</div>
						</div>



							<thead>
								<tr>
									<th>#</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</tr>
						</tfoot>
						<tbody>

							<tr>
								<td></td>
								<td>Registered </td>
								<td>Brand </td>
								<td>Brand </td>
								<td><a href=""><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
									<a href="" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
								</tr>

								<tr>
								<td></td>
								<td>Brand </td>
								<td>Brand </td>
								<td>Brand </td>
								<td><a href=""><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
									<a href="" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
								</tr>


							</tbody>
						</table>						
					</div>
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
</div>



<script src="vendors/jquery/dist/jquery.min.js"></script>
     <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

@endsection