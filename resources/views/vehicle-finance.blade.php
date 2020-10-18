<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="../../assets/libs/datatables/css/select.dataTables.min.css" rel="stylesheet">
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="fas fa-bars fa-lg"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.blade.php">
                    <!-- Logo icon -->
                    <b class="logo-icon p-l-10">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="../../assets/images/logo-sm.png" alt="homepage" class="light-logo" width="38px" height="38px" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-txt.png" width="152px" height="40px" alt="homepage" class="light-logo" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-ellipsis-h"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="fas fa-bars fa-lg"></i></a></li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fas fa-search fa-lg"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="far fa-user m-r-5 m-l-5"></i> My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-cog m-r-5 m-l-5"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.blade.php" aria-expanded="false"><i class="fas fa-th"></i><span class="hide-menu pl-1">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-users fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Customers</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="wholesale-customer.blade.php" class="sidebar-link"><i class="fas fa-people-carry fa-3x"></i><span class="hide-menu">Wholesale Customer</span></a></li>
                            <li class="sidebar-item"><a href="retail-customer.blade.php" class="sidebar-link"><i class="fas fa-street-view fa-3x" aria-hidden="true"></i><span class="hide-menu">Retail Customers</span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="supplier.blade.php" aria-expanded="false"><i class="fas fa-truck-loading fa-lg"></i></i><span class="hide-menu">&#X00A0;Suppliers</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-th-list fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Categories</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="add-category.blade.php" class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
                            <li class="sidebar-item"><a href="main-categories-summary.blade.php" class="sidebar-link">
                                    <i class="far fa-chart-bar"></i><span class="hide-menu">View Summary</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-exchange-alt" aria-hidden="true"></i><span class="hide-menu pl-1">Transaction</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="wholesale-transactions.blade.php" class="sidebar-link"><i class="fas fa-money-bill-alt" aria-hidden="true"></i><span class="hide-menu">Wholesale transaction </span></a></li>
                            <li class="sidebar-item"><a href="retail-transaction.blade.php" class="sidebar-link">
                                    <i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Retail transactions</span>
                                </a></li>
                            <li class="sidebar-item"><a href="supplier-transaction.blade.php" class="sidebar-link">
                                    <i class="fas fa-credit-card"></i><span class="hide-menu">Supplier transactions</span>
                                </a></li>
                            <li class="sidebar-item"><a href="deposited-returned-cheques.blade.php" class="sidebar-link">
                                    <i class="fas fa-undo"></i><span class="hide-menu">Manage Cheques</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invoice.blade.php" aria-expanded="false"><i class="fas fa-newspaper"></i><span class="hide-menu">Generate Invoice</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="employee.blade.php" aria-expanded="false">
                            <i class="fa fa-address-card" aria-hidden="true"></i><span class="hide-menu pl-1">Employees</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="employee.blade.php" class="sidebar-link"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="hide-menu">Manage Employees </span></a></li>
                            <li class="sidebar-item"><a href="employee-salary.blade.php" class="sidebar-link">
                                    <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Salary Report</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="vehicle.html" aria-expanded="false">
                            <i class="fa fa-car" aria-hidden="true"></i><span class="hide-menu pl-1">Vehicle</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="resources/views/vehicle-management.blade.php" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
                            <li class="sidebar-item"><a href="vehicle-finance.blade.php" class="sidebar-link">
                                    <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Vehicle Finance</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-secret"></i><span class="hide-menu">Authentication </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="authentication-login.blade.php" class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>
                            <li class="sidebar-item"><a href="authentication-register.blade.php" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Register </span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Vehicle Finance</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Vehicle</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vehicle Finance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="card col-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item"> <a class="nav-link active font-weight-bold" data-toggle="tab" href="#add-vehicle" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Add Vehicle Finance Info</span></a> </li>
                        <li class="nav-item" id="reload"> <a class="nav-link font-weight-bold" data-toggle="tab" href="#view-vehicle" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Vehicle Finance Report</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="add-vehicle" role="tabpanel" style="cursor: pointer">
                            <div class="container-fluid">
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <form class="form-horizontal" id="formCreate">

                                                    <div class="col-12 alert" role="alert" id="modalAlert1" style="display:none;">
                                                    </div>

                                                    <div class="col-12">
                                                        <hr>
                                                        <h4 class="card-title py-3">Vehicle Finance Details</h4>
                                                        <hr>

                                                        <div class="form-group row">
                                                            <label for="vehicles" class="col-sm-3 text-left control-label col-form-label">Vehicle Registration Number</label>
                                                            <div class="col-sm-9">
                                                                    <select type="text" class="form-control form-input" id="vehicles" placeholder="Vehicle Registration Number">
                                                                        <option value="" >Select Vehicle </option>
                                                                        @foreach($vehicles as $vehicle)
                                                                            <option value="{{$vehicle->getKey()}}">{{$vehicle->registered_number}}</option>
                                                                        @endForeach
                                                                    </select>
                                                                    <span id="vehiclesError" class="text-danger form-error" ></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="finance_company" class="col-sm-3 text-left control-label col-form-label">Finance Company</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-input" id="finance_company" placeholder="Finance Company Name">
                                                                <span id="finance_companyError" class="text-danger form-error" ></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="account_number" class="col-sm-3 text-left control-label col-form-label">Account Number</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-input" id="account_number" placeholder="Account Number Here">
                                                                <span id="account_numberError" class="text-danger form-error" ></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="monthly_payment_amount" class="col-sm-3 text-left control-label col-form-label">Monthly Payment Amount</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-input" id="monthly_payment_amount" placeholder="XXX XXXX">
                                                                <span id="monthly_payment_amountError" class="text-danger form-error" ></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="payment_date" class="col-sm-3 text-left control-label col-form-label">Payment Date</label>
                                                            <div class="col-sm-9">
                                                                <input type="Date" class="form-control form-input" id="payment_date" placeholder="Payment Date Here">
                                                                <span id="payment_dateError" class="text-danger form-error" ></span>
                                                            </div>
                                                        </div>
                                                        <div class="border-top">
                                                            <div class="card-body float-right">
                                                                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  p-20" id="view-vehicle" role="tabpanel">
                            <div class="container-fluid">
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card-body">
                                                <div class="modal fade bd-confirmation-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title font-weight-bold" id="confirmationModalLabel">Confirmation</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card mb-0">
                                                                    <form id="confirmationModal" class="form-horizontal">
                                                                        <div class="form-group row">
                                                                            <span class="alert col-12" role="alert" style="display:none" id="confirmationAlert"></span>
                                                                        </div>
                                                                        <div> Are you sure to delete.. </div>
                                                                        <div class="card-body float-right">
                                                                            <input type="hidden" name="delete_id" id="deleteId"/>
                                                                            <button data-dismiss="modal" type="button" class="btn btn-secondary">Cancel</button>
                                                                            <button type="submit" id="deleteButton" autofocus class="btn btn-success">Continue</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade bd-form-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add Vehicle Finance Info</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <form id="formModal" class="form-horizontal">
                                                                    <div class="card-body p-1">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <input type="hidden" id="updateId" name="update" />
                                                                                <div class="col-12 alert" role="alert" id="modalAlert" style="display:none;">
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="model1" class="col-sm-3 text-left control-label col-form-label">Vehicle Registration Number</label>
                                                                                    <div class="col-sm-9">
                                                                                        <select type="text" class="form-control form-input" id="model1" placeholder="Vehicle Registration Number">
                                                                                            <option value="" >Select Vehicle Registered Number </option>
                                                                                            @foreach($vehicles as $vehicle)
                                                                                                <option value="{{$vehicle->getKey()}}">{{$vehicle->registered_number}}</option>
                                                                                            @endForeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="finance_company1" class="col-sm-3 text-left control-label col-form-label">Finance Company</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control form-input" id="finance_company1" placeholder="Enter Finance company name">
                                                                                        <span id="finance_company1Error" class="text-danger form-error" ></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="account_number1" class="col-sm-3 text-left control-label col-form-label">Account Number</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control form-input" id="account_number1" placeholder="xxxxxxxx">
                                                                                        <span id="account_number1Error" class="text-danger form-error" ></span>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <label for="monthly_payment_amount1" class="col-sm-3 text-left control-label col-form-label">Monthly Payment Amount</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control form-input" id="monthly_payment_amount1" placeholder="Enter payment amount">
                                                                                        <span id="monthly_payment_amount1Error" class="text-danger form-error" ></span>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <label for="payment_date1" class="col-sm-3 text-left control-label col-form-label">Payment Date</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="Date" class="form-control form-input" id="payment_date1" placeholder="Enter payment Date Here">
                                                                                        <span id="payment_date1Error" class="text-danger form-error" ></span>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive-md">
                                                <table id="example" class="display" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="font-weight-bold">Vehicle Registered Number</th>
                                                        <th class="font-weight-bold">Finance Company</th>
                                                        <th class="font-weight-bold">Account Number</th>
                                                        <th class="font-weight-bold">Monthly payment Amount</th>
                                                        <th class="font-weight-bold">Payment Date</th>

                                                        <th class="font-weight-bold"><a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                                <i class="fas fa-check text-center"></i>
                                                            </a></th>
                                                        <th><a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class=" far fa-times-circle"></i>
                                                            </a> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                 @foreach($vehicle_finances as $key => $vehicle_finance)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{$vehicle_finance->vehicles->registered_number}}</td>
                                                        <td>{{$vehicle_finance->finance_company}}</td>
                                                        <td>{{$vehicle_finance->account_number}}</td>
                                                        <td>{{$vehicle_finance->monthly_payment_amount}}</td>
                                                        <td>{{$vehicle_finance->payment_date}}</td>
                                                        <td><button data-data="{{  $vehicle_finance }}" data-index="{{ $key }}" data-id='{{ $vehicle_finance->getKey() }}' id="editButton{{ $vehicle_finance->getKey() }}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button></td>
                                                        <td><button data-index="{{ $key }}" data-id='{{ $vehicle_finance->getKey() }}' id="deleteButton{{ $vehicle_finance->getKey() }}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button></td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!-- This Page JS -->
<script type="text/javascript" src="../../assets/libs/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/jszip.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/pdfmake.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="../../assets/libs/datatables/js/buttons.colVis.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    var table ;

    $(document).ready(function() {
        table = $('#example').DataTable({
            dom: 'Bfrtip',
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: 1,
                className: 'noVis'
            }],
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            buttons: {
                dom: {
                    button: {
                        tag: 'button',
                        className: ''
                    }
                },
                buttons: [{
                    extend: 'selectAll',
                    className: 'btn btn-sm btn-secondary border',
                    titleAttr: 'selsect All.',
                    text: 'select All',
                }, {
                    extend: 'selectNone',
                    className: 'btn btn-sm btn-secondary border',
                    titleAttr: 'selsect None.',
                    text: 'select None',
                },
                    {
                        extend: 'colvis',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        columns: ':eq(1),:eq(2),:eq(3),:eq(4),:eq(5)'

                    },

                    {
                        extend: 'collection',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        text: 'Export',
                        exportOptions: {
                            columns: ':not(:last-child)',
                        },
                        buttons: [{
                            extend: 'excel',
                            className: 'dropdown-item',
                            messageTop: 'Vehicle-Finance Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'Vehicle-Finance Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'Vehicle-Finance Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'Vehicle-Finance Records'
                        }],
                    }
                ]

            },
            language: {
                buttons: {
                    selectAll: "Select All",
                    selectNone: "Select None"
                }
            },
            select: {
                style: 'multi',
                selector: 'td:first-child'
            },
            order: [
                [1, 'asc']
            ]
        });
    });




    $(document).on('submit','#formCreate',function(e){
        e.stopPropagation()
        e.preventDefault();

        var vehicles = $("#vehicles").val();
        var finance_company = $("#finance_company").val();
        var account_number = $("#account_number").val();
        var monthly_payment_amount = $("#monthly_payment_amount").val();
        var payment_date = $("#payment_date").val();


        $.ajax({
            method: "POST",
            url: "{{ url('/crud/vehicle_finance/create') }}",
            dataType: "json",
            data: {
                vehicles: vehicles,
                finance_company: finance_company,
                account_number: account_number,
                monthly_payment_amount: monthly_payment_amount,
                payment_date: payment_date
            },
            success: function(data){
                if(data.success){
                    $("#modalAlert1").html(`You have successfully added the finance details.`);
                    $("#modalAlert1").show();
                    $("#modalAlert1").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function(){
                        $("#modalAlert1").alert('close');
                        location.reload();
                        $('.form-input').val('');
                        hideErrors();
                    }, 600)

                }
            },
            error: function(e){

                var data = e.responseJSON;
                    var mainError = "Something went wrong!";
                    switch (e.status) {

                        case 400:
                            var keys = Object.keys(data.errors);
                            mainError = "Some fiedls have incorrect values";

                            for(var i=0; i< keys.length; i++){
                                var id = keys[i];
                                var errorMsg = data.errors[id][0];

                                $("#"+id).addClass("is-invalid");
                                $("#"+id+"Error").html(errorMsg);
                            }
                            break;
                        case 500:
                            mainError = "Server error appeared";
                            break;
                        default:
                            break;
                    }

                    $("#modalAlert1").html(mainError);
                    $("#modalAlert1").removeClass('alert-success').addClass('alert-danger');
                    $("#modalAlert1").show();
                }
            });

        $(document).on('click keyup',".form-input", function(){
            hideErrors();
        });

        function hideErrors(){
            $("#modalAlert1").hide();
            $(".form-error").html("");
            $(".form-input").removeClass("is-invalid");
        }

    });

   $(document).on('click','.btn-edit', function(){
        $(".bd-form-modal-lg").modal('show');

        var updateId = $(this).data("id");
        console.log(updateId);

        var data = $(this).data("data");

        $("#updateId").val(updateId);

        $("#model1").val(data.vehicles.id);
        $("#finance_company1").val(data.finance_company);
        $("#account_number1").val(data.account_number);
        $("#monthly_payment_amount1").val(data.monthly_payment_amount);
        $("#payment_date1").val(data.payment_date);
    });


    $(document).on('submit','#formModal',function(e){
        e.stopPropagation()
        e.preventDefault();

        var updateId = $("#updateId").val();
        var vehicles = $("#model1").val();
        var finance_company = $("#finance_company1").val();
        var account_number = $("#account_number1").val();
        var monthly_payment_amount = $("#monthly_payment_amount1").val();
        var payment_date = $("#payment_date1").val();

        $("#modalAlert").show();



    $.ajax({
        method: "POST",
        url: "{{ url('/crud/vehicle_finance/update') }}",
        dataType: "json",
        data: {
            vehicles: vehicles,
            finance_company: finance_company,
            account_number: account_number,
            monthly_payment_amount: monthly_payment_amount,
            payment_date: payment_date,
            updateId:updateId
        },
        success: function(data){
            if(data.success){
                $("#modalAlert").html(`You have successfully updated the finance details.`);
                $("#modalAlert").show();
                $("#modalAlert").removeClass('alert-danger').addClass('alert-success');
                window.setTimeout(function(){
                    $("#modalAlert").alert('close');
                    $('.form-input').val('');
                    $(".bd-form-modal-lg").modal('hide');
                    hideErrors();
                }, 600)

                var index = $("#editButton"+updateId).data("index");
                table.row(index).data([
                    "",
                    data.vehicle_finance.vehicles.registered_number,
                    data.vehicle_finance.finance_company,
                    data.vehicle_finance.account_number,
                    data.vehicle_finance.monthly_payment_amount,
                    data.vehicle_finance.payment_date,
                    `<button data-data='${JSON.stringify(data.vehicle_finance)}' data-index="${index}" data-id="${data.vehicle_finance.id}" id="editButton${data.vehicle_finance.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                    `<button  data-index="${index}" data-id="${data.vehicle_finance.id}" id="editButton${data.vehicle_finance.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                ]);

            }
        },
        error: function(e){

            var data = e.responseJSON;
            var mainError = "Something went wrong!";
            switch (e.status) {

                case 400:
                    var keys = Object.keys(data.errors);
                    mainError = "Some fiedls have incorrect values";

                    for(var i=0; i< keys.length; i++){
                        var id = keys[i];
                        console.log(id);
                        var errorMsg = data.errors[id][0];

                        $("#"+id+"1").addClass("is-invalid");
                        $("#"+id+"1"+"Error").html(errorMsg);
                    }
                    break;
                case 500:
                    mainError = "Server error appeared";
                    break;
                default:
                    break;
            }

            $("#modalAlert").html(mainError);
            $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
            $("#modalAlert").show();
        }
    });

    $(document).on('click keyup',".form-input", function(){
        hideErrors();
    });

    function hideErrors(){
        $("#modalAlert").hide();
        $(".form-error").html("");
        $(".form-input").removeClass("is-invalid");
    }

    });

    $(document).on('click', '.btn-delete', function(){
        var deleteId = $(this).data('id');

        $("#deleteId").val(deleteId);

        var name = $(this).data("name");

        $("#deleteCustomerName").html(name);

        $(".bd-confirmation-modal-lg").modal('show');
    })

    $(document).on("submit", "#confirmationModal", function(e){
        e.preventDefault();
        var deleteId = $("#deleteId").val();
        $("#confirmationAlert").hide();

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/vehicle_finance/delete') }}",
            dataType: "json",
            data: {
                id: deleteId
            },
            success: function(data){
                if(data.success){
                    $("#confirmationAlert").html(`You have successfully deleted the finance details.`);
                    $("#confirmationAlert").show();
                    $("#confirmationAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function(){
                        $(".bd-confirmation-modal-lg").modal('hide');
                    }, 600);

                    var index = $("#deleteButton"+deleteId).data("index");

                    table.row(index).remove().draw();
                }
            },
            error: function(e){
                var mainError = "Something went wrong!";
                switch (e.status) {
                    case 400:
                        mainError = "Invalid request";
                        break;
                    case 500:
                        mainError = "Server error appeared";
                        break;
                    default:
                        break;
                }

                $("#confirmationAlert").html(mainError);
                $("#confirmationAlert").removeClass('alert-success').addClass('alert-danger');
                $("#confirmationAlert").show();
                $("#deleteButton").html("Try Again");
            }
        });
    })


</script>



</body>

</html>
