@extends('layouts.app')

@section('content')


<!-- Left Panel -->
<div class="col-lg-3 dashboard-panal">
	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">

			<div class="navbar-header">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>


			</div>

			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
					</li>
					<h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>Missing persons</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-plus"></i><a href="missing-persons">Add</a></li>
							<li><i class="fa fa-eye"></i><a href="ui-badges.html">View</a></li>

						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Missing Items</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-plus"></i><a href="tables-basic.html">Add</a></li>
							<li><i class="fa fa-eye"></i><a href="tables-data.html">View</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-car"></i> Missing Vehicles</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-plus"></i><a href="">Add</a></li>
							<li><i class="menu-icon fa fa-eye"></i><a href="forms-advanced.html">View</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i> Registered users</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-plus"></i><a href="forms-basic.html">Add</a></li>
							<li><i class="menu-icon fa fa-eye"></i><a href="forms-advanced.html">View</a></li>
						</ul>
					</li>



					<h3 class="menu-title">Icons</h3><!-- /.menu-title -->

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
							<li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
					</li>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
							<li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
							<li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
						</ul>
					</li>

					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
						<ul class="sub-menu children dropdown-menu">
							<li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
							<li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
						</ul>
					</li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside><!-- /#left-panel -->
</div>
<!-- Left Panel -->




<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row pt-3">
			<div class="col-md-12 border pt-3">

				<h2 class="page-title pt-3">Missing persons</h2><br>

				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">Person Details</div>
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
									<th>Full name</th>
									<th>Address</th>
									<th>Phone Number </th>
									<th>Fuel Type</th>
									<th>Gender</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Full name</th>
									<th>Address</th>
									<th>Phone Number </th>
									<th>Fuel Type</th>
									<th>Gender</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</tr>
						</tfoot>
						<tbody>

							<tr>
								<td></td>
								<td>Brand </td>
								<td>Brand </td>
								<td>Brand </td>
								<td>Brand </td>
								<td>Brand </td>
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
								<td>Brand </td>
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