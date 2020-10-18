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
    <style>
        .select,
        #locale {
            width: 100%;
        }

        .like {
            margin-right: 10px;
        }
    </style>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
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
                            <li class="sidebar-item"><a href="vehicle-management.blade.php" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
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
                <div class="col-md-6 d-flex no-block align-items-center">
                    <h4 class="page-title">Supplier Management</h4>
                </div>
                <div class="col-md-6 d-flex no-block align-items-center">
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Supplier</li>
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
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item"> <a class="nav-link active border-bottom-0 border-right-0 border-top-5 border-primary" data-toggle="tab" href="#supplier" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">Supplier Details</span></a> </li>
                        <li class="nav-item"> <a class="nav-link border-bottom-0 border-right-0 border-top-5 border-primary" data-toggle="tab" href="#debit-report" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">Debit Report</span></a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active" id="supplier" role="tabpanel" style="cursor: pointer;">
                            <div class="bg-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <div class="btn-create" id="createButton">
                                    <i class="fas fa-plus text-white p-2" data-toggle="tooltip" data-placement="top"  ></i><span class="font-weight-bold text-white">Add A Supplier</span>
                                </div>
                            </div>
                            <div class=" container-fluid">
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card-body p-0 mt-">
                                            <div class="modal fade bd-confirmation-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title font-weight-bold" id="confirmationModalLabel">Confirmation</h5>
                                                            <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card mb-0">
                                                                <form id="confirmationModal" class="form-horizontal">
                                                                    <div class="form-group row">
                                                                        <span class="alert col-12" role="alert" style="display:none" id="confirmationAlert"></span>
                                                                    </div>
                                                                    <div>NOTICE: You are going to delete the "<b id="deleteSupplierName"></b>" supplier. </div>
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

                                            <div class="modal fade bd-form-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="formModalLabel">Supplier Info</h5>
                                                            <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card">
                                                                <form id="formModal" class="form-horizontal">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input1" id="name" placeholder="Name Here">
                                                                                <span id="nameError" class="text-danger form-error1" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Contact No</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input2" id="contactNo" placeholder="Contact No Here">
                                                                                <span id="contactNoError" class="text-danger form-error2" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="email1" class="col-sm-3 text-left control-label col-form-label">Address</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input3" id="address" placeholder="Address Here">
                                                                                <span id="addressError" class="text-danger form-error3" ></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                                            <div class="col-sm-9">
                                                                                <textarea class="form-control form-input4" id="description"></textarea>
                                                                                <span id="descriptionError" class="text-danger form-error4" ></span>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group row">
                                                                            <label for="lname" class="col-sm-3 text-left control-label col-form-label">Name of bank</label>
                                                                            <div class="col-sm-9">
                                                                                <select type="text" class="form-control form-input5" id="bankname" placeholder="Occupation">
                                                                                    <option value="" >Select An Bank</option>
                                                                                    @foreach($banks as $bank)
                                                                                        <option value="{{$bank->getKey()}}">{{$bank->name}}</option>
                                                                                    @endForeach
                                                                                </select>
                                                                                <span id="bankError" class="text-danger form-error5" ></span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <input type="hidden" id="products">
                                                                    <div class="border-top">
                                                                        <div class="card-body">
                                                                            <input type="hidden" id="updateId" name="update" />
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
                                                        <th class="font-weight-bold">Name</th>
                                                        <th class="font-weight-bold">Contact No</th>
                                                        <th class="font-weight-bold">Address</th>
                                                        <th class="font-weight-bold">Mostly Purchasing Products</th>
                                                        <th class="font-weight-bold">Description</th>

                                                        <th class="font-weight-bold">Bank Name</th>
                                                        <th class="font-weight-bold"><a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                                <i class="fas fa-check text-center"></i>
                                                            </a></th>
                                                        <th><a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                </i><i class=" far fa-times-circle"></i>
                                                            </a> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach($suppliers as $key=>$supplier)
                                                        <tr>

                                                            <td></td>
                                                            <td>{{$supplier->name}}</td>
                                                            <td>{{$supplier->phone_number}}</td>
                                                            <td>{{$supplier->address}}</td>
                                                            <td>@foreach ($supplier->readymades as $readymade)

                                                                    {{ $readymade->item_code }}

                                                                    {{ " | " }}
                                                                    @if ($loop->iteration == 3)
                                                                        @break
                                                                    @endif

                                                                @endforeach


                                                            </td>
                                                            <td>{{$supplier->description}}</td>
                                                            <td>{{$supplier->bank->name}}</td>
                                                            <td><button type="button" data-data="{{$supplier}}" data-index="{{ $key }}" data-id = '{{ $supplier->getkey() }}' id="editButton{{ $supplier->getKey() }}"  class="btn btn-cyan btn-sm btn-edit">Edit</button></td>
                                                            <td><button type="button" data-name="{{$supplier->name}}" data-index="{{ $key }}" data-id = '{{ $supplier->getkey() }}' id="deleteButton{{ $supplier->getKey() }}" class="btn btn-danger btn-sm btn-delete">Delete</button></td>
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th class="font-weight-bold">Name</th>
                                                        <th class="font-weight-bold">Contact No</th>
                                                        <th class="font-weight-bold">Address</th>
                                                        <th class="font-weight-bold">Mostly Purchasing Products</th>
                                                        <th class="font-weight-bold">Description</th>

                                                        <th class="font-weight-bold">Bank Name</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
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
                        <div class="tab-pane  p-20" id="debit-report" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title m-b-0 font-weight-bold">Monthly Supplier Debt Summary</h5>
                                </div>
                                <div class="table-responsive-md">
                                    <table class="table mb-2" class="display" style="width: 100%" id="debt-table">

                                        <thead class="bg-light">
                                        <tr>
                                            <th></th>
                                            <th>Supplier Name</th>
                                            <th>Debt</th>
                                        </tr>
                                        </thead>
                                        <tbody class="customtable">
                                        @foreach($sum as $return)
                                            <tr>
                                                <td></td>
                                                <td>{{$return->name}}</td>
                                                <td>{{$return->total_sales}}</td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    <td><button role="button" data-toggle="collapse" href="#debtReport" aria-expanded="false" aria-controls="debtReport" class="btn btn-success btn btn-outline-info shadow-none font-weight-bold">View details</button></td>


                                    <div id="debtReport" class="collapse" >
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title m-b-0 font-weight-bold">Monthly Supplier - Returned Cheque Details</h5>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table" id="cheque-table">

                                                    <thead class="bg-light">
                                                    <tr>
                                                        <th></th>
                                                        <th>Supplier Name</th>
                                                        <th>Cheque No</th>
                                                        <th>Amount</th>
                                                        <th>Last Payment Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                    @foreach($share as $return)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{$return->name}}</td>
                                                            <td>{{$return->cheque_number}}</td>
                                                            <td>{{$return->amount}}</td>
                                                            <td>{{$return->payment_Date}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="row mb-5 mx-5">--}}
{{--                                        <div class="col">--}}
                                            <a class="btn btn-outline-info shadow-none font-weight-bold float-right" role="button" data-toggle="collapse" href="#collapseNewCategory" aria-expanded="false" aria-controls="collapseNewCategory">
                                                <i class="fas fa-chart-bar"></i> View Supplier Stock Report </a>
                                        </div>
                                        <div class="collapse" id="collapseNewCategory">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title m-b-0 font-weight-bold">Supplier Stock Summary</h5>
                                                </div>
                                                <div class="table-responsive-md">
                                                    <table  class="display" style="width:100%" id ="stock">

                                                        <thead class="bg-light">
                                                        <tr>
                                                            <th></th>
                                                            <th scope="col">Supplier Name</th>
                                                            <th scope="col">Item code and stock size</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($suppliers as $supplier)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{$supplier->name}}</td>
                                                            <td>@foreach ($supplier->readymades as $readymade)

                                                                    {{ $readymade->item_code }}

                                                                    {{ " = " }}

                                                                    {{ nl2br(e($readymade->initial_stocks)) }}

                                                                <br class="m-2">


                                                                @endforeach
                                                            </td>

                                                        </tr>
                                                        @endforeach


                                                        </tbody>
                                                    </table>
{{--                                                </div>--}}
{{--                                            </div>--}}
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
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Mass Line (pvt) Ltd. Designed and Developed by <a href="#">####</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
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
<script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>


<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    var table;
    var table1;
    var table2;
    var table3;


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
                        columns: ':eq(1),:eq(2),:eq(3),:eq(4),:eq(5),:eq(6),:eq(7) '

                    },

                    {
                        extend: 'collection',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        text: 'Export',
                        buttons: [{
                            extend: 'excel',
                            className: 'dropdown-item',
                            messageTop: 'Supplier Records',
                            exportOptions: {
                                columns: [1,2,3,4,5,6]
                            }
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records',
                            exportOptions: {
                                columns: [1,2,3,4,5,6]
                            }
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records',
                            exportOptions: {
                                columns: [1,2,3,4,5,6]
                            },

                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records',
                            exportOptions: {
                                columns: [1,2,3,4,5,6]
                            }
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

    $(document).ready(function() {
        table1 = $('#debt-table').DataTable({
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
                        columns: ':eq(1),:eq(2),:eq(3),:eq(4),:eq(5),:eq(6),:eq(7)'

                    },

                    {
                        extend: 'collection',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        text: 'Export',
                        buttons: [{
                            extend: 'excel',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
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



    $(document).ready(function() {
        table2 = $('#cheque-table').DataTable({
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
                        columns: ':eq(1),:eq(2),:eq(3),:eq(4),:eq(5),:eq(6),:eq(7)'

                    },

                    {
                        extend: 'collection',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        text: 'Export',
                        buttons: [{
                            extend: 'excel',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
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



    $(document).ready(function() {
        table3 = $('#stock').DataTable({
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
                        columns: ':eq(1),:eq(2),:eq(3),:eq(4),:eq(5),:eq(6),:eq(7)'

                    },

                    {
                        extend: 'collection',
                        className: 'btn btn-sm btn-secondary dropdown-toggle border',
                        text: 'Export',
                        buttons: [{
                            extend: 'excel',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'supplier Records'
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

    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/

    $(document).on('click','.btn-create', function(){

        $("#updateId").val("");

        $("#name").val("");
        $("#contactNo").val("");
        $("#address").val("");
        $("#products").val("");
        $("#description").val("");
        $("#bankname").val("");

        $(".bd-form-modal-lg").modal('show');
    });

    $(document).on('click','.btn-edit', function () {

        $(".bd-form-modal-lg").modal('show');
        var updateId = $(this).data("id");
        console.log(updateId)
        $("#updateId").val(updateId);

        var data = $(this).data("data");


        $("#name").val(data.name);
        $("#contactNo").val(data.phone_number);
        $("#address").val(data.address);
        $("#products").val(data.products);
        $("#description").val(data.description);
        $("#bankname").val(data.bank.id);


    });

    $(document).on('submit','#formModal', function (e) {

        e.stopPropagation();
        e.preventDefault();

        var updateId = $("#updateId").val();

        var name = $("#name").val();
        var contactNo = $("#contactNo").val();
        var address = $("#address").val();
        var products = $("#products").val();
        var description = $("#description").val();
        var bank = $("#bankname").val();

        var mode = isNaN(parseInt(updateId))?"create":"update";

        $.ajax({
            method: "POST",
            url: "{{ url('/supplier') }}/" + mode,
            dataType: "json",
            data: {
                name: name,
                contactNo: contactNo,
                address: address,
                products:products,
                description: description,
                bank: bank,
                updateId: updateId
            },

            success: function (data) {

                if(data.success) {
                    $("#modalAlert").html(`You have successfully ${mode}d the supplier.`);
                    $("#modalAlert").show();
                    $("#modalAlert").removeClass('alert-danger').addClass('alert-success');

                    window.setTimeout(function () {
                        $(".bd-form-modal-lg").modal('hide');
                        $('.form-input').val('');
                        hideErrors();
                    }, 800)

                    if (mode == "update") {
                        var index = $("#editButton" + updateId).data("index");
                        data.supplier['phone_number'] = data.supplier.contactNo;
                        data.supplier['bank_name'] = data.supplier.bank.name;


                        table.row(index).data([
                            "",
                            data.supplier.name,
                            data.supplier.contactNo,
                            data.supplier.address,
                            data.supplier.products,
                            data.supplier.description,
                            data.supplier.bank.name,
                            `<button data-data='${JSON.stringify(data.supplier)}' data-index="${index}" data-id="${data.supplier.id}" id="editButton${data.supplier.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-index="${index}" data-name="${data.supplier.name}" data-id="${data.supplier.id}" id="deleteButton${data.supplier.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]);


                    } else {
                        var index = table.rows().count();
                        console.log(index);
                        data.supplier['phone_number'] = data.supplier.contactNo;
                        data.supplier['bank_name'] = data.supplier.bank.name;

                        table.rows.add([[

                            "",
                            data.supplier.name,
                            data.supplier.contactNo,
                            data.supplier.address,
                            data.supplier.products,
                            data.supplier.description,
                            data.supplier.bank.name,
                            `<button data-data='${JSON.stringify(data.supplier)}' data-index="${index}" data-id="${data.supplier.id}" id="editButton${data.supplier.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-index="${index}"  data-name="${data.supplier.name}" data-id="${data.supplier.id}" id="deleteButton${data.supplier.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]]).draw();




                    }

                }
            },

            error: function(e){
                var data = e.responseJSON;
                var mainError = "Something went wrong!";
                switch (e.status) {

                    case 400:
                        var keys = Object.keys(data.errors);
                        mainError = "Some fields have incorrect values";

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

                $("#modalAlert").html(mainError);
                $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
                $("#modalAlert").show();
            }



        });
    });

    $(document).on('click',"#close", function(){
        hideErrors();
    });


    $(document).on('click keypress',".form-input1", function(){
        $("#modalAlert").hide();
        $(".form-error1").html("");
        $(".form-input1").removeClass("is-invalid");
    });

    $(document).on('click keypress',".form-input2", function(){
        $("#modalAlert").hide();
        $(".form-error2").html("");
        $(".form-input2").removeClass("is-invalid");
    });

    $(document).on('click keypress',".form-input3", function(){
        $("#modalAlert").hide();
        $(".form-error3").html("");
        $(".form-input3").removeClass("is-invalid");
    });

    $(document).on('click keypress',".form-input4", function(){
        $("#modalAlert").hide();
        $(".form-error4").html("");
        $(".form-input4").removeClass("is-invalid");
    });

    $(document).on('click keypress',".form-input5", function(){
        $("#modalAlert").hide();
        $(".form-error5").html("");
        $(".form-input5").removeClass("is-invalid");
    });

    function hideErrors(){
        $("#modalAlert").hide();
        $(".form-error1").html("");
        $(".form-input1").removeClass("is-invalid");

        $(".form-error2").html("");
        $(".form-input2").removeClass("is-invalid");

        $(".form-error3").html("");
        $(".form-input3").removeClass("is-invalid");

        $(".form-error4").html("");
        $(".form-input4").removeClass("is-invalid");

        $(".form-error5").html("");
        $(".form-input5").removeClass("is-invalid");

        $(".form-error6").html("");
        $(".form-input6").removeClass("is-invalid");
    };

    // function hideErrors(){
    //     $("#modalAlert").hide();
    //     $(".form-error").html("");
    //     $(".form-input").removeClass("is-invalid");
    // };

    $(document).on('click', '.btn-delete', function(){
        var deleteId = $(this).data('id');

        var delid = $("#deleteId").val(deleteId);

        var name = $(this).data("name");

        $("#deleteSupplierName").html(name);

        $(".bd-confirmation-modal-lg").modal('show');
    });

    $(document).on("submit", "#confirmationModal", function(e) {
        e.preventDefault();

        var deleteId = $("#deleteId").val();
        $("#confirmationAlert").hide();

        $.ajax({
            method: "POST",
            url: "{{ url('/supplier/delete') }}",
            dataType: "json",
            data: {
                id: deleteId
            },
            success: function (data) {
                if (data.success) {
                    $("#confirmationAlert").html(`You have successfully deleted the supplier`);
                    $("#confirmationAlert").show();
                    $("#confirmationAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function () {
                        $(".bd-confirmation-modal-lg").modal('hide');
                        $("#confirmationAlert").hide();

                    }, 600);

                    var index = $("#deleteButton"+deleteId).data("index");
                    console.log(index)
                    table.row(index).remove().draw();
                    console.log(index)

                }
            },
            error: function (e) {
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

        $(document).on('click',"#close", function(){
            $("#confirmationAlert").hide();
        });

        $(document).on('click',"#close", function(){
            $("#confirmationAlert").hide();
        });


        $('.demo').each(function () {

            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });
        });

    })






</script>

</body>

</html>
