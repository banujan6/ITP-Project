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
                    <a class="navbar-brand" href={{"/"}}>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{"/"}} aria-expanded="false"><i class="fas fa-th"></i><span class="hide-menu pl-1">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-users fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Customers</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/crud/wholesale"}} class="sidebar-link"><i class="fas fa-people-carry fa-3x"></i><span class="hide-menu">Wholesale Customer</span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/retail_customer"}} class="sidebar-link"><i class="fas fa-street-view fa-3x" aria-hidden="true"></i><span class="hide-menu">Retail Customers</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{"/supplier"}} aria-expanded="false"><i class="fas fa-truck-loading fa-lg"></i></i><span class="hide-menu">&#X00A0;Suppliers</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-th-list fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Categories</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/crud/add_cat"}} class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/main_category_summary"}} class="sidebar-link">
                                        <i class="far fa-chart-bar"></i><span class="hide-menu">View Summary</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-exchange-alt" aria-hidden="true"></i><span class="hide-menu pl-1">Transaction</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/crud/wholesale_transaction"}} class="sidebar-link"><i class="fas fa-money-bill-alt" aria-hidden="true"></i><span class="hide-menu">Wholesale transaction </span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/retail_transaction"}} class="sidebar-link">
                                        <i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Retail transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href={{"/crud/supplier_transaction"}} class="sidebar-link">
                                        <i class="fas fa-credit-card"></i><span class="hide-menu">Supplier transactions</span>
                                    </a></li>
                                <li class="sidebar-item"><a href={{"/crud/manage_cheques"}} class="sidebar-link">
                                        <i class="fas fa-undo"></i><span class="hide-menu">Manage Cheques</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{"/crud/invoice"}} aria-expanded="false"><i class="fas fa-newspaper"></i><span class="hide-menu">Generate Invoice</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href={{"/employee"}} aria-expanded="false">
                                <i class="fa fa-address-card" aria-hidden="true"></i><span class="hide-menu pl-1">Employees</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/employee"}} class="sidebar-link"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="hide-menu">Manage Employees </span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/employee_salary"}} class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Salary Report</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="vehicle.html" aria-expanded="false">
                                <i class="fa fa-car" aria-hidden="true"></i><span class="hide-menu pl-1">Vehicle</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/crud/vehicle_management"}} class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/vehicle_finance"}} class="sidebar-link">
                                        <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Vehicle Finance</span>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-secret"></i><span class="hide-menu">Authentication </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href={{"/crud/login"}} class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>
                                <li class="sidebar-item"><a href={{"/crud/register"}} class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Register </span></a></li>
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
                        <h4 class="page-title">Retail Transactions</h4>
                    </div>
                    <div class="col-md-6 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Transactions</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Wholesale Transactions</li>
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
                            <li class="nav-item"> <a class="nav-link active font-weight-bold border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#wholesale-transaction" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Retail Transaction Details</span></a> </li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#invoice-list" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Invoice List</span></a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="wholesale-transaction" role="tabpanel" style="cursor: pointer;">
                                <div class="bg-success btn-create" id="createButton" data-toggle="modal" data-target=".bd-form-modal-lg">
                                    <i class="fas fa-plus text-white p-2"></i><span class="font-weight-bold text-white">Add A Retail Transaction</span>
                                </div>
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
                                                                        <div>NOTICE: You are going to delete the  invoice number "<b id="deleteInvoiceNumber"></b>". </div>
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
                                                                <h5 class="modal-title" id="exampleModalLabel">Add a Retail customer Transaction</h5>
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
                                                                                    <div class="form-group row">
                                                                                        <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                                                                    </div>
                                                                                    <input type="hidden" id="ptype" name="ptype" value="cash" />
                                                                                    <input type="hidden" id="updateId" name="update" />
                                                                                    <div class="form-group row">
                                                                                        <label for="date" class="col-sm-3 text-left control-label col-form-label">Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control form-input" id="date" placeholder="Date Here">
                                                                                            <span id="dateError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="invoice_number" class="col-sm-3 text-left control-label col-form-label">Invoice Number</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control form-input" id="invoice_number" placeholder="Invoice number Here">
                                                                                            <span id="invoice_numberError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                         <label for="retail_customer" class="col-sm-3 text-left control-label col-form-label">Customer Name</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select type="text" class="form-control form-input" id="retail_customer" placeholder="Occupation">
                                                                                                <option value="" >Select Retail Customer </option>
                                                                                                @foreach($retail_customers as $retail_customer)
                                                                                                    <option value="{{$retail_customer->getKey()}}">{{$retail_customer->name}}</option>
                                                                                                @endForeach
                                                                                            </select>
                                                                                            <span id="retail_customerError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="description" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                                                        <div class="col-sm-9">
                                                                                            <textarea id="description" class="form-control form-input"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="price_per_quantity" class="col-sm-3 text-left control-label col-form-label">Price Per quantity</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="price_per_quantity" placeholder="Price Here">
                                                                                            <span id="price_per_quantityError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="quantity_or_peices" class="col-sm-3 text-left control-label col-form-label">Qty/Pcs</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="quantity_or_peices" placeholder="Qty/Pcs here">
                                                                                            <span id="quantity_or_peicesError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="cash" class="col-sm-3 text-left control-label col-form-label">Cash</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="cash" placeholder="Cash here">
                                                                                            <span id="cashError" class="text-danger form-error" ></span>
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
                                                                <th class="font-weight-bold sorting_desc">Invoice Number</th>
                                                                <th class="font-weight-bold sorting_desc">Retail Customer Name</th>
                                                                <th class="font-weight-bold">Date</th>
                                                                <th class="font-weight-bold">Description</th>
                                                                <th class="font-weight-bold">Quantity / Peices</th>
                                                                <th class="font-weight-bold">Price Per Quantity</th>
                                                                <th class="font-weight-bold">Cash</th>
                                                                <th class="font-weight-bold"><a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                                        <i class="fas fa-check text-center"></i>
                                                                    </a></th>
                                                                <th><a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class=" far fa-times-circle"></i>
                                                                    </a> </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($transactions as $key=> $transaction)
                                                            <tr>
                                                                <td></td>
                                                                <td>{{ $transaction ->invoice_number }}</td>
                                                                <td>{{ $transaction ->retail_customer->name }}</td>
                                                                <td>{{ $transaction ->date }}</td>
                                                                <td>{{ $transaction ->description }}</td>
                                                                <td>{{ $transaction ->quantity_or_peices }}</td>
                                                                <td>{{ $transaction ->price_per_quantity }}</td>
                                                                <td>{{ $transaction ->cash }}</td>
                                                                <td><button data-data="{{  $transaction }}" data-index="{{ $key }}" data-id='{{ $transaction->getKey() }}' id="editButton{{ $transaction->getKey() }}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button></td>
                                                                <td><button data-invoice="{{ $transaction->invoice_number }}" data-index="{{ $key }}" data-id='{{ $transaction->getKey() }}' id="deleteButton{{ $transaction->getKey() }}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button></td>
                                                            </tr>
                                                            @endForeach
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

    var table;

    $(document).ready(function() {
        table = $('#example').DataTable({
            dom: 'Bfrtip',
            // scrollX: true,
            // scrollCollapse: true,
            paging: true,
            // fixedColumns: {
            //     leftColumns: 1,
            //     rightColumns: 2
            // },
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                className: 'noVis'
            }],
            columnDefs: [{
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

    $(document).on('click','.btn-edit', function(){
        $(".bd-form-modal-lg").modal('show');

        var updateId = $(this).data("id");

        var data = $(this).data("data");
        
        $("#updateId").val(updateId);

        console.log($("#updateId").val(updateId));

        $("#date").val(data.date);
        $("#description").val(data.description);
        $("#price_per_quantity").val(data.price_per_quantity);
        $("#invoice_number").val(data.invoice_number);
        $("#quantity_or_peices").val(data.quantity_or_peices);
        $("#cash").val(data.cash);
        $("#retail_customer").val(data.retail_customer.id);

        hideErrors();

    });

    $(document).on('click','.btn-create', function(){
        
        $("#updateId").val("");

        $("#date").val("");
        $("#description").val("");
        $("#price_per_quantity").val("");
        $("#invoice_number").val("");
        $("#quantity_or_peices").val("");
        $("#cash").val("");
        $("#retail_customer").val("");
        
        $(".bd-form-modal-lg").modal('show');
    });


    $(document).on('submit', '#formModal', function(e){

        e.stopPropagation();
        e.preventDefault();

        var updateId = $("#updateId").val();
        console.log(updateId+"submitId");

        var payment_type = $("#ptype").val();

        var date = $("#date").val();
        var description = $("#description").val();
        var price_per_quantity = $("#price_per_quantity").val();
        var invoice_number = $("#invoice_number").val();
        var quantity_or_peices = $("#quantity_or_peices").val();
        var cash = $("#cash").val();
        var retail_customer =$("#retail_customer").val();

        $("#modalAlert").alert();

        var mode = isNaN(parseInt(updateId))?"create":"update";

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/retail_transaction') }}/"+mode,
            dataType: "json",
            data: {
                date:date,
                description:description,
                price_per_quantity:price_per_quantity,
                invoice_number:invoice_number,
                quantity_or_peices:quantity_or_peices,
                cash:cash,
                payment_type:payment_type,
                updateId:updateId,
                retail_customer:retail_customer
            },
            success: function(data){
                if(data.success){
                    console.log("success");
                    $("#modalAlert").html(`You Have Success Fully  ${mode}d ${data.transaction.invoice_number} invoice`);
                    $("#modalAlert").show();
                    $("#modalAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function(){
                        $(".bd-form-modal-lg").modal('hide');
                        $('.form-input').val('');
                        hideErrors(); 
                    }, 600)
                    if(mode=="update"){
                        var index = $("#editButton"+updateId).data("index");
                        console.log(index+"index");

                        table.row(index).data([
                            "",
                            data.transaction.invoice_number,
                            data.transaction.date,
                            data.transaction.description,
                            data.transaction.quantity_or_peices,
                            data.transaction.price_per_quantity,
                            data.transaction.cash,
                            data.transaction.retail_customer.name,
                            `<button data-data='${JSON.stringify(data.transaction)}' data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-invoice="${data.transaction.invoice_number}" data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]);
                    } else {
                        var index = table.count();

                        table.rows.add([[
                            "",
                            data.transaction.invoice_number,
                            data.transaction.date,
                            data.transaction.description,
                            data.transaction.quantity_or_peices,
                            data.transaction.price_per_quantity,
                            data.transaction.cash,
                            data.transaction.retail_customer.name,
                            `<button data-data='${JSON.stringify(data.transaction)}' data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-invoice="${data.transaction.invoice_number}" data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]]).draw();
                    }
                }           
            },
            error: function(e){
                console.log(e);
                var data = e.responseJSON;
                var mainError = "Something went wrong!";

                switch (e.status){
                    
                    case 400:
                        mainError = "Something went wrong!";
                        var key = Object.keys(data.errors);

                        for(var i = 0; i < key.length; i++){
                            var id = key[i];
                            var errorMsg=data.errors[id][0];

                            
                            $("#"+id).addClass("is-invalid");
                            $("#"+id+"Error").html(errorMsg);
                        }
                        break;
                    case 500:
                        mainError = "Server Error!"
                        break;
                    default:
                        break;
                }

                $("#modalAlert").html(mainError);
                $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
                $("#modalAlert").show();  
                
            }

        })
    })  

    $(document).on('click keyup',".form-input", function(){
        hideErrors();
    });

    function hideErrors(){
        $("#modalAlert").hide();
        $(".form-error").html("");
        $(".form-input").removeClass("is-invalid");
    }

    $(document).on('click', '.btn-delete', function(){
        var deleteId = $(this).data('id');

        $("#deleteId").val(deleteId);

        var invoice = $(this).data("invoice");

        $("#deleteInvoiceNumber").html(invoice);
        $("#confirmationAlert").hide();

        $(".bd-confirmation-modal-lg").modal('show');
    })

    $(document).on("submit", "#confirmationModal", function(e){
        e.preventDefault();
        var deleteId = $("#deleteId").val();
        $("#confirmationAlert").hide();

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/retail_transaction/delete') }}",
            dataType: "json",
            data: {
                id: deleteId
            },
            success: function(data){
                if(data.success){
                    $("#confirmationAlert").html(`You have successfully deleted the invoice`);
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