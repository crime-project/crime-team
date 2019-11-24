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
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
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
                            <li><i class="fa fa-plus"></i><a href="missing-items">Add</a></li>
                            <li><i class="fa fa-eye"></i><a href="tables-data.html">View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-car"></i> Missing Vehicles</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-plus"></i><a href="missing-vehicles">Add</a></li>
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

<!-- Right Panel -->
<div class="col-lg-8"> 
   <!--<div id="right-panel" class="right-panel">-->

    <div class="container-fluid missing-person-container">

        <!--<div class="col-12">-->
          <div class="container missing-vechicle-container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card Missing-vechicle">
                        <h4><strong><div class="card-header text-center bg-info">{{ __('Missing Vehicles') }}</div></strong></h4>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name ') }}</label>

                                    <div class="col-md-6">
                                        <input id="own_name" type="text" class="form-control @error('own_name') is-invalid @enderror" name="own_name" value="{{ old('own_name') }}" required autocomplete="own_name" autofocus>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="mod_number" class="col-md-4 col-form-label text-md-right">{{ __('Model Number ') }}</label>

                                    <div class="col-md-6">
                                        <input id="mod_number" type="number" class="form-control @error('mod_number') is-invalid @enderror" name="mod_number" value="{{ old('mod_number') }}" required autocomplete="mod_number" autofocus>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="num_plate" class="col-md-4 col-form-label text-md-right">{{ __('Number Plate') }}</label>

                                    <div class="col-md-6">
                                        <input id="num_plate" type="number" class="form-control @error('num_plate') is-invalid @enderror" name="email" value="{{ old('num_plate') }}" required autocomplete="num_plate">

                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                                    <div class="col-md-6">
                                        <input id="address" type="email" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="email">

                                        
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