<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
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
                                <li class="sidebar-item"><a href="/categories" class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
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
                        <h4 class="page-title">Supplier Transactions</h4>
                    </div>
                    <div class="col-md-6 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Transactions</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Supplier Transactions</li>
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
                            <li class="nav-item"> <a class="nav-link active font-weight-bold  border-bottom-0 border-right-0 border-top-5 border-primary" data-toggle="tab" href="#supplier-transaction" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Supplier Transaction Details</span></a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold  border-bottom-0 border-right-0 border-top-5 border-primary" data-toggle="tab" href="#invoice-list" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Invoice List</span></a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="supplier-transaction" role="tabpanel" style="cursor: pointer;">
                                <div class="bg-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                    <i class="fas fa-plus text-white p-2"></i><span class="font-weight-bold text-white">Add A Supplier Transaction</span>
                                </div>
                                <div class="container-fluid">
                                    <!-- ============================================================== -->
                                    <!-- Start Page Content -->
                                    <!-- ============================================================== -->
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add a Supplier customer Transaction</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <form class="form-horizontal">
                                                                        <div class="card-body p-1">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control" id="fname" placeholder="Date Here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                                                        <div class="col-sm-9">
                                                                                            <textarea class="form-control"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Price</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control" id="email1" placeholder="Price Here">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Invoice Number</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control" id="cono1" placeholder="Invoice number Here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Qty/Pcs</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control" id="email1" placeholder="Qty/Pcs here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                                        <input type="radio" id="customRadioInline1" class="custom-control-input" name="collapseGroup" value="cash">
                                                                                        <label class="custom-control-label" for="customRadioInline1">Cash</label>
                                                                                    </div>
                                                                                    <div class="custom-control custom-radio custom-control-inline">
                                                                                        <input type="radio" id="customRadioInline2" class="custom-control-input" name="collapseGroup" value="cheque">
                                                                                        <label class="custom-control-label" for="customRadioInline2">Cheque</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row collapse" id="collapseCheque">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Payment Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control" id="fname" placeholder="Payment Date Here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Cheque Number</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control" id="email1" placeholder="Cheque number here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Amount</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control" id="email1" placeholder="Amount Here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-md-3">Dep/Paid</label>
                                                                                        <div class="col-sm-9">
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                                                                <label class="custom-control-label" for="customControlValidation1">Depositted</label>
                                                                                            </div>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                                                                <label class="custom-control-label" for="customControlValidation2">Paid</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Bank</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control" id="cono1" placeholder="Bank name Here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Branch</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control" id="email1" placeholder="Branch here">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">cheque date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="date" class="form-control" id="email1" placeholder="cheque date here">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row collapse" id="collapseCash">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="email1" class="col-sm-3 text-left control-label col-form-label">Debit</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control" id="email1" placeholder="Debit Here">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
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
                                                                <th class="font-weight-bold">Item code</th>
                                                                <th class="font-weight-bold">Name</th>
                                                                <th class="font-weight-bold">Brand</th>
                                                                <th class="font-weight-bold">Colours Available</th>
                                                                <th class="font-weight-bold">Initial stocks</th>
                                                                <th class="font-weight-bold">Links of suppliers</th>
                                                                <th class="font-weight-bold">Sizes Available</th>
                                                                <th class="font-weight-bold">Whole Sale price</th>
                                                                <th class="font-weight-bold">supplier Sale price</th>
                                                                <th class="font-weight-bold">Description</th>
                                                                <th class="font-weight-bold">Image</th>
                                                                <th class="font-weight-bold"><a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                                        <i class="fas fa-check text-center"></i>
                                                                    </a></th>
                                                                <th><a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class=" far fa-times-circle"></i>
                                                                    </a> </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td>P001</td>
                                                                <td>Bottom1</td>
                                                                <td>Brand1</td>
                                                                <td>Black<br>white</td>
                                                                <td>100</td>
                                                                <td>https://www.google.com/</td>
                                                                <td>xl<br>large</td>
                                                                <td>500</td>
                                                                <td>3000</td>
                                                                <td>Lorem ipsum dolor sit amet</td>
                                                                <td class='clickable-row' data-href='index.html'>1.jpg</td>
                                                                <td><button type="button" class="btn btn-cyan btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button></td>
                                                                <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>P001</td>
                                                                <td>Bottom1</td>
                                                                <td>Brand1</td>
                                                                <td>Black<br>white</td>
                                                                <td>100</td>
                                                                <td>https://www.google.com/</td>
                                                                <td>xl<br>large</td>
                                                                <td>500</td>
                                                                <td>3000</td>
                                                                <td>Lorem ipsum dolor sit amet</td>
                                                                <td class='clickable-row' data-href='index.html'>1.jpg</td>
                                                                <td><button type="button" class="btn btn-cyan btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button></td>
                                                                <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>P001</td>
                                                                <td>Bottom1</td>
                                                                <td>Brand1</td>
                                                                <td>Black<br>white</td>
                                                                <td>100</td>
                                                                <td>https://www.google.com/</td>
                                                                <td>xl<br>large</td>
                                                                <td>500</td>
                                                                <td>3000</td>
                                                                <td>Lorem ipsum dolor sit amet</td>
                                                                <td class='clickable-row' data-href='index.html'>1.jpg</td>
                                                                <td><button type="button" class="btn btn-cyan btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button></td>
                                                                <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>P001</td>
                                                                <td>Bottom1</td>
                                                                <td>Brand1</td>
                                                                <td>Black<br>white</td>
                                                                <td>100</td>
                                                                <td>https://www.google.com/</td>
                                                                <td>xl<br>large</td>
                                                                <td>500</td>
                                                                <td>3000</td>
                                                                <td>Lorem ipsum dolor sit amet</td>
                                                                <td class='clickable-row' data-href='index.html'>1.jpg</td>
                                                                <td><button type="button" class="btn btn-cyan btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button></td>
                                                                <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="invoice-list" role="tabpanel">
                                <h1>Invoice List Goes Here</h1>
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
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"></script>
    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 2
            },
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
                            messageTop: 'wholesale-customer Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'wholesale-customer Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'wholesale-customer Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'wholesale-customer Records'
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

    $('[name="collapseGroup"]').on('change', function() {
        if ($(this).val() === "cheque") {
            $('#collapseCheque').collapse('show')
        } else {
            $('#collapseCheque').collapse('hide')
        }

        if ($(this).val() === "cash") {
            $('#collapseCash').collapse('show')
        } else {
            $('#collapseCash').collapse('hide')
        }
    });
    </script>>
</body>

</html>
