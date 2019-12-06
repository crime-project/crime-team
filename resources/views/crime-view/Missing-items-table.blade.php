@extends('layouts.app')

@section('content')

@include('layouts.dash-panal')

<link rel="stylesheet" href="https://mode.github.io/alamode/alamode.min.css">
<script src="https://mode.github.io/alamode/alamode.min.js"></script>

<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row pt-3">
			<div class="col-md-12 border pt-3">

				<h2 class="page-title pt-3">Missing Items</h2><br>

				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">Item Details</div>
					<div class="panel-body">

						<table id="table_54f226026ff5" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">

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
									<th>Item Owner Name</th>
									<th>Item Name</th>
									<th>Address</th>
									<th>Phone Number</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>

						
						<tfoot>
								<tr>
									<th>#</th>
									<th>Item Owner Name</th>
									<th>Item Name</th>
									<th>Address</th>
									<th>Phone Number</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</tfoot>
					
					
							<tbody>
							<tr>
								@foreach($itemdata as $row)

								<td></td>
								<td>{{$row['owner_name']}}</td>
								<td>{{$row['address']}}</td>
								<td>{{$row['phone_no']}}</td>
								<td>{{$row['item_name']}}</td>
								<!--<td>{{$row['Image']}}</td>-->
								
						<td><img src='img/{{$row['Image']}}.jpg' style='width:175px;height:75px;'/></td>  
								


								<!--<td border=3 height=10 width=1000>{{$row['description']}}</td>-->
								<td>{{$row['description']}}</td>
							
								<td><a href="{{action('itemController@edit', $row['id'])}}"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
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


<script>

alamode.customizeTable([{
  vizId: 'table_54f226026ff5',
  addImages: {
    columnNames: ['image'],
    rowHeightOverride: 100
  }
}])

</script>

</div>

<script src="vendors/jquery/dist/jquery.min.js"></script>
 <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

@endsection