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
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="supplier-transaction" role="tabpanel" style="cursor: pointer;">
                                <div class="bg-primary" data-toggle="modal" data-target=".bd-form-modal-xl">
                                    <i class="fas fa-plus text-white p-2"></i><span class="font-weight-bold text-white">Add A Supplier Transaction</span>
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
                                                <div class="modal fade bd-form-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add a Supplier Transaction</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <form id="formModal" class="form-horizontal">
                                                                        <div class="card-body p-1">
                                                                            <div class="row d-flex justify-content-around align-items-stretch ">
                                                                            <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                                                                <div class="col-md-6">

                                                                                    <input type="hidden" id="ptype" name="ptype" value="cheque_supplier" />
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
                                                                                        <label for="supplier" class="col-sm-3 text-left control-label col-form-label">Customer</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select type="text" class="form-control form-input" id="supplier" placeholder="Supplier Name">
                                                                                                <option value="" >Select Supplier </option>
                                                                                                @foreach($suppliers as $supplier)
                                                                                                    <option value="{{$supplier->getKey()}}">{{$supplier->name}}</option>
                                                                                                @endForeach
                                                                                            </select>
                                                                                            <span id="supplierError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                         <label for="item_code" class="col-sm-3 text-left control-label col-form-label">Product Code</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select type="text" class="form-control form-input" id="item_code" placeholder="Item Code">
                                                                                                <option value="" >Select Product Code </option>
                                                                                                @foreach($readymade_subs as $readymade_sub)
                                                                                                    <option value="{{$readymade_sub->item_code}}" >{{$readymade_sub->item_code}}</option>
                                                                                                @endForeach
                                                                                                @foreach($bottoms as $bottom)
                                                                                                    <option value="{{$bottom->item_code}}" >{{$bottom->item_code}}</option>
                                                                                                @endForeach
                                                                                            </select>
                                                                                            <span id="item_codeError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div> 
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group row">
                                                                                        <label for="payment_Date" class="col-sm-3 text-left control-label col-form-label">Payment Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control form-input" id="payment_Date" placeholder="Payment Date">
                                                                                            <span id="payment_DateError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <div class="form-group row">
                                                                                        <label for="cheque_number" class="col-sm-3 text-left control-label col-form-label">Cheque Number</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="cheque_number" placeholder="Cheque Number Here">
                                                                                            <span id="cheque_numberError" class="text-danger form-error"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="cheque_Date" class="col-sm-3 text-left control-label col-form-label">Cheque Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control form-input" id="cheque_Date" placeholder="Cheque Date Here">
                                                                                            <span id="cheque_DateError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <div class="form-group row">
                                                                                        <label for="amount" class="col-sm-3 text-left control-label col-form-label">Cheque Amount</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="amount" placeholder="Cheque Amount">
                                                                                            <span id="amountError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <div class="form-group row">
                                                                                        <label for="bank" class="col-sm-3 text-left control-label col-form-label">Bank</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control form-input" id="bank" placeholder="Bank Name Here">
                                                                                            <span id="bankError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="branch" class="col-sm-3 text-left control-label col-form-label">Branch</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" class="form-control form-input" id="branch" placeholder="Branch Name Here">
                                                                                            <span id="branchError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row p-0 m-b-0">
                                                                                        <label for="description" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                                                        <div class="col-sm-9">
                                                                                            <textarea id="description" class="form-control form-input" row="5"></textarea>
                                                                                            <span id="descriptionError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>   
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group row d-flex-column">
                                                                                        <label id="transaction_status_label" for="transaction_status" class="col-12 text-left control-label col-form-label">Cheque Status</label>
                                                                                        <div class="col-12" id="status_select">
                                                                                            <select type="text" class="form-control form-input" id="transaction_status" placeholder="Transaction Status">
                                                                                                <option value="" selected>Select Transaction Status </option>
                                                                                                    @foreach ($status as $status)
                                                                                                        <option value="{{$status}}">{{$status}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            <span id="transaction_statusError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="status_1" class="col-md-6" style="display:none;">
                                                                                <div class="form-group row">
                                                                                            <label for="deposited_bank" class="col-sm-3 text-left control-label col-form-label">Depositted Bank</label>
                                                                                            <div class="col-sm-9">
                                                                                                <input type="text" class="form-control form-input" id="deposited_bank" placeholder="Deposited Bank">
                                                                                                <span id="deposited_bankError" class="text-danger form-error" ></span>
                                                                                            </div>
                                                                                        </div>
                                                                                
                                                                                    <div class="form-group row">
                                                                                        <label for="deposited_bank_account" class="col-sm-3 text-left control-label col-form-label">Depositted Bank Account</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="number" class="form-control form-input" id="deposited_bank_account" placeholder="Depositted Bank Account Number Here">
                                                                                            <span id="deposited_bank_accountError" class="text-danger form-error" ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="status_2" class="col-md-6" style="display:none;">
                                                                                <div class="form-group row">
                                                                                        <label for="new_cheque_date" class="col-sm-3 text-left control-label col-form-label">New Cheque Date</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="Date" class="form-control form-input" id="new_cheque_date" placeholder="New Cheque Date">
                                                                                            <span id="new_cheque_dateError" class="text-danger form-error" ></span>
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
                                                                <th>Invoice_number</th>
                                                                <th>Date</th>
                                                                <th>Wholesale Customer</th>
                                                                <th>Description</th>
                                                                <th>Cheque Number</th>
                                                                <th>Cheque Date</th>
                                                                <th>Cheque Amount</th>
                                                                <th>Payment Date</th>
                                                                <th>Bank</th>
                                                                <th>Branch</th>
                                                                <th>Deposited Bank Account</th>
                                                                <th>Deposited Bank</th>
                                                                <th>New Cheque Date</th>
                                                                <th>Transaction Status</th>
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
                                                                <td>{{ $transaction ->date }}</td>
                                                                <td>{{ $transaction ->supplier->name }}</td>
                                                                <td>{{ $transaction ->description }}</td>
                                                                <td>{{ $transaction ->cheque_payment->cheque_number }}</td>
                                                                <td>{{ $transaction ->cheque_payment->cheque_Date }}</td>
                                                                <td>{{ $transaction ->cheque_payment->amount }}</td>
                                                                <td>{{ $transaction ->cheque_payment->payment_Date }}</td>
                                                                <td>{{ $transaction ->cheque_payment->bank }}</td>
                                                                <td>{{ $transaction ->cheque_payment->branch }}</td>
                                                                <td>{{ $transaction ->cheque_payment->deposited_bank_account }}</td>
                                                                <td>{{ $transaction ->cheque_payment->deposited_bank }}</td>
                                                                <td>{{ $transaction ->cheque_payment->new_cheque_date }}</td>
                                                                <td>{{ $transaction ->cheque_payment->transaction_status }}</td>
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
    <script type="text/javascript" src="../../assets/libs/datatables/js/fixedColumns.min.js"></script>
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
                            messageTop: 'Supplier Transaction Records'
                        }, {
                            extend: 'copy',
                            className: 'dropdown-item',
                            messageTop: 'Supplier Transaction Records'
                        }, {
                            extend: 'pdf',
                            className: 'dropdown-item',
                            messageTop: 'Supplier Transaction Records'
                        }, {
                            extend: 'print',
                            className: 'dropdown-item',
                            messageTop: 'Supplier Transaction Records'
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

    $(document).ready(function(){

        $("#status_select").on('change', function() {


            var option = $('#status_select option:selected').text();
            
            if(option === 'depositted'){
                $( "#status_1" ).css( "display", "block" ); 
                $( "#status_2" ).css( "display", "none" );
            } else if(option === 'returned'){
                $( "#status_1" ).css( "display", "block" ); 
                $( "#status_2" ).css( "display", "block" );
            } else {
                $( "#status_1" ).css( "display", "none" ); 
                $( "#status_2" ).css( "display", "none" );
            } 
            
        });
    });

    $(document).on('click','.btn-edit', function(){
        $(".bd-form-modal-xl").modal('show');

        var updateId = $(this).data("id");

        var data = $(this).data("data");
        
        $("#updateId").val(updateId);

        $("#date").val(data.date);
        $("#invoice_number").val(data.invoice_number);
        $("#quantity_or_peices").val(data.quantity_or_peices);
        $("#cheque_number").val(data.cheque_payment.cheque_number);
        $("#cheque_Date").val(data.cheque_payment.cheque_Date);
        $("#payment_Date").val(data.cheque_payment.payment_Date);
        $("#bank").val(data.cheque_payment.bank);
        $("#deposited_bank_account").val(data.cheque_payment.deposited_bank_account);
        $("#transaction_status").val(data.cheque_payment.transaction_status);
        $("#new_cheque_date").val(data.cheque_payment.new_cheque_date);
        $("#supplier").val(data.supplier.id);
        $("#amount").val(data.cheque_payment.amount);
        $("#payment_Date").val(data.cheque_payment.payment_Date);
        $("#branch").val(data.cheque_payment.branch);
        $("#deposited_bank").val(data.cheque_payment.deposited_bank);
        $("#description").val(data.description);
        $("#price_per_quantity").val(data.price_per_quantity);
        $("#cash").val(data.cash);
        $("#item_code").val(data.item_code);

        hideErrors();
    });

    $(document).on('click','.btn-create', function(){
        
        $("#updateId").val("");

        $("#date").val("");
        $("#invoice_number").val("");
        $("#cheque_number").val("");
        $("#cheque_Date").val("");
        $("#payment_Date").val("");
        $("#bank").val("");
        $("#deposited_bank_account").val("");
        $("#transaction_status").val("");
        $("#new_cheque_date").val("");
        $("#supplier").val("");
        $("#amount").val("");
        $("#branch").val("");
        $("#deposited_bank").val("");
        $("#description").val("");
        $("#item_code").val("");
        
        $(".bd-form-modal-xl").modal('show');

    });


    $(document).on('submit', '#formModal', function(e){


        e.stopPropagation();
        e.preventDefault();

        var updateId = $("#updateId").val();

        var payment_type = $("#ptype").val();

        var date = $("#date").val();
        var description = $("#description").val();
        var invoice_number = $("#invoice_number").val();
        var cheque_number = $("#cheque_number").val();
        var cheque_Date = $("#cheque_Date").val();
        var payment_Date = $("#payment_Date").val();
        var deposited_bank_account = $("#deposited_bank_account").val();
        var transaction_status = $("#transaction_status").val();
        var new_cheque_date = $("#new_cheque_date").val();
        var supplier = $("#supplier").val();
        var amount = $("#amount").val();
        var deposited_bank = $("#deposited_bank").val();
        var branch = $("#branch").val();
        var bank = $("#bank").val();
        var item_code = $("#item_code").val();
        var cheque_payment = $("#cheque_payment").val()

        $("#modalAlert").alert();

        var mode = isNaN(parseInt(updateId))?"create":"update";

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/supplier_transaction') }}/"+mode,
            dataType: "json",
            data: {
                date:date, 
                description:description, 
                invoice_number:invoice_number, 
                payment_type:payment_type, 
                cheque_number:cheque_number, 
                cheque_Date:cheque_Date, 
                payment_Date:payment_Date, 
                bank:bank,
                deposited_bank_account:deposited_bank_account, 
                transaction_status:transaction_status, 
                new_cheque_date:new_cheque_date, 
                supplier:supplier, 
                amount:amount,
                branch:branch,
                deposited_bank:deposited_bank,
                item_code:item_code, 
                updateId:updateId, 

            },
            success: function(data){
                if(data.success){
                    console.log("success");
                    $("#modalAlert").html(`You Have Success Fully  ${mode}d ${data.transaction.invoice_number} invoice`);
                    $("#modalAlert").show();
                    $("#modalAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function(){
                        $(".bd-form-modal-xl").modal('hide');
                        $('.form-input').val('');
                        hideErrors(); 
                    }, 600)
                    if(mode=="update"){
                        var index = $("#editButton"+updateId).data("index");
                        console.log(index);

                        table.row(index).data([
                            "",   
                            data.transaction.invoice_number,
                            data.transaction.date,
                            data.transaction.supplier.name,
                            data.transaction.description,
                            data.transaction.cheque_payment.cheque_number,
                            data.transaction.cheque_payment.cheque_Date,
                            data.transaction.cheque_payment.amount,
                            data.transaction.cheque_payment.payment_Date,
                            data.transaction.cheque_payment.bank,
                            data.transaction.cheque_payment.branch,
                            data.transaction.cheque_payment.deposited_bank_account,
                            data.transaction.cheque_payment.deposited_bank,
                            data.transaction.cheque_payment.new_cheque_date,
                            data.transaction.cheque_payment.transaction_status,
                            `<button data-data='${JSON.stringify(data.transaction)}' data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-invoice="${data.transaction.invoice_number}" data-index="${index}" data-id="${data.transaction.id}" id="deleteButton${data.transaction.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]);
                    } else {
                        var index = table.rows().count();

                        console.log(data.transaction);

                        table.rows.add([[
                            "",   
                            data.transaction.invoice_number,
                            data.transaction.date,
                            data.transaction.supplier.name,
                            data.transaction.description,
                            data.transaction.cheque_payment.cheque_number,
                            data.transaction.cheque_payment.cheque_Date,
                            data.transaction.cheque_payment.amount,
                            data.transaction.cheque_payment.payment_Date,
                            data.transaction.cheque_payment.bank,
                            data.transaction.cheque_payment.branch,
                            data.transaction.cheque_payment.deposited_bank_account,
                            data.transaction.cheque_payment.deposited_bank,
                            data.transaction.cheque_payment.new_cheque_date,
                            data.transaction.cheque_payment.transaction_status,
                            `<button data-data='${JSON.stringify(data.transaction)}' data-index="${index}" data-id="${data.transaction.id}" id="editButton${data.transaction.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-invoice="${data.transaction.invoice_number}" data-index="${index}" data-id="${data.transaction.id}" id="deleteButton${data.transaction.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]]).draw();
                    }
                }           
            },
            error: function(e){
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
            url: "{{ url('/crud/supplier_transaction/delete') }}",
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
                        

                        var index = $("#deleteButton"+deleteId).data("index");

                        table.row(index).remove().draw();
                    }, 600);
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

    </script>>
</body>

</html>
