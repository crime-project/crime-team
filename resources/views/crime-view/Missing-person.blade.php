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
                            <li><i class="fa fa-plus"></i><a href="tables-basic.html">Add</a></li>
                            <li><i class="fa fa-eye"></i><a href="tables-data.html">View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-car"></i> Missing Vehicals</a>
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

<!-- Right Panel -->
<div class="col-lg-8">  
 <!--<div id="right-panel" class="right-panel">-->
     
    <div class="container-fluid missing-person-container">
        
        <!--<div class="col-12">-->
            <div class="card Missing-person">
                <h4><strong><div class="card-header text-center bg-info">{{ __('Missing Persons') }}</div></strong></h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full name ') }}</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                
=======
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofoaddress
                              
>>>>>>> 40fac6bc3b4c86aa9fdc2de5018d047d84cbd3e1
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

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


<<<<<<< HEAD
=======
                        <div class="form-group row">
                            <label for="person_image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
>>>>>>> 40fac6bc3b4c86aa9fdc2de5018d047d84cbd3e1

                      <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

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



<<<<<<< HEAD
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
=======
                            <div class="form-group row">
                            <label for="person_description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
>>>>>>> 40fac6bc3b4c86aa9fdc2de5018d047d84cbd3e1

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
<!-- </div>-->
</div>
<!--</div>-->
</div>

<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>



@endsection



