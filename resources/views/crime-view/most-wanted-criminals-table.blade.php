@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row pt-3">
			<div class="col-md-12 border pt-3">

				<h2 class="page-title pt-3">  Most Wanted Criminals</h2><br>

				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">Criminal Details</div>
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
									<th>Other Names</th>
									<th>Address</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Full Name</th>
									<th>Other Names</th>
									<th>Address</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								@foreach($criminaldata as $row)

								<td></td>
								<td>{{$row['owner_name']}}</td>
								<td>{{$row['full_name']}}</td>
								<td>{{$row['other_name']}}</td>
								<td>{{$row['address']}}</td>
								<td>{{$row['nic']}}</td>
								<td>{{$row['gender']}}</td>
								<td><img src='$row['image']'/></td>
								<td border=3 height=10 width=1000>{{$row['description']}}</td>
					

								<!--<td>{{$row['description']}}</td>-->
								
								<td><a href=""><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
									<a href="" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
								</tr>
								@endforeach	
							
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