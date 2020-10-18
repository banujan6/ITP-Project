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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <a class="navbar-brand" href="index.html">
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
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="fas fa-th"></i><span class="hide-menu pl-1">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fa fa-users fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Customers</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="wholesale-customer.html" class="sidebar-link"><i class="fas fa-people-carry fa-3x"></i><span class="hide-menu">Wholesale Customer</span></a></li>
                            <li class="sidebar-item"><a href="retail-customer.html" class="sidebar-link"><i class="fas fa-street-view fa-3x" aria-hidden="true"></i><span class="hide-menu">Retail Customers</span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="supplier.html" aria-expanded="false"><i class="fas fa-truck-loading fa-lg"></i></i><span class="hide-menu">&#X00A0;Suppliers</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-th-list fa-lg" aria-hidden="true"></i><span class="hide-menu pl-1">Categories</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="add-category.html" class="sidebar-link"><i class="fas fa-tasks"></i><span class="hide-menu">Manage Categories </span></a></li>
                            <li class="sidebar-item"><a href="main-categories-summary.html" class="sidebar-link">
                                    <i class="far fa-chart-bar"></i><span class="hide-menu">View Summary</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-exchange-alt" aria-hidden="true"></i><span class="hide-menu pl-1">Transaction</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="wholesale-transactions.html" class="sidebar-link"><i class="fas fa-money-bill-alt" aria-hidden="true"></i><span class="hide-menu">Wholesale transaction </span></a></li>
                            <li class="sidebar-item"><a href="retail-transaction.html" class="sidebar-link">
                                    <i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Retail transactions</span>
                                </a></li>
                            <li class="sidebar-item"><a href="supplier-transaction.html" class="sidebar-link">
                                    <i class="fas fa-credit-card"></i><span class="hide-menu">Supplier transactions</span>
                                </a></li>
                            <li class="sidebar-item"><a href="deposited-returned-cheques.html" class="sidebar-link">
                                    <i class="fas fa-undo"></i><span class="hide-menu">Manage Cheques</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invoice.html" aria-expanded="false"><i class="fas fa-newspaper"></i><span class="hide-menu">Generate Invoice</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="employee.html" aria-expanded="false">
                            <i class="fa fa-address-card" aria-hidden="true"></i><span class="hide-menu pl-1">Employees</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="employee.html" class="sidebar-link"><i class="fa fa-user-plus" aria-hidden="true"></i><span class="hide-menu">Manage Employees </span></a></li>
                            <li class="sidebar-item"><a href="employee-salary.html" class="sidebar-link">
                                    <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Salary Report</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="vehicle.html" aria-expanded="false">
                            <i class="fa fa-car" aria-hidden="true"></i><span class="hide-menu pl-1">Vehicle</span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="vehicle-management.html" class="sidebar-link"><i class="fas fa-cogs"></i><span class="hide-menu">Manage Vehicles</span></a></li>
                            <li class="sidebar-item"><a href="vehicle-finance.html" class="sidebar-link">
                                    <i class="fas fa-table" aria-hidden="true"></i><span class="hide-menu">Vehicle Finance</span>
                                </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-secret"></i><span class="hide-menu">Authentication </span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="fas fa-sign-in-alt"></i><span class="hide-menu"> Login </span></a></li>
                            <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="fas fa-user-plus"></i><span class="hide-menu"> Register </span></a></li>
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
                    <h4 class="page-title">Employee Managment</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Employees</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Employee Management</li>
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
                <div class="col">
                    <div class="card">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item"> <a class="nav-link active border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#AddEmployee" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">Add Employee</span></a> </li>
                            <li class="nav-item"> <a class="nav-link border-bottom-0 border-right-0 border-top-5 border-success" data-toggle="tab" href="#viewEmployees" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down font-weight-bold">View Employees</span></a> </li>
                        </ul>
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="AddEmployee" role="tabpanel">
                                <!-- <form class="form-horizontal"> -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                    </div>
                                    <div class="col-12">


                                        <hr>
                                        <h4 class="card-title py-3">Employee Personnel details</h4>
                                        <hr>

                                        <form id = "formModal" class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="name" placeholder="Name Here">
                                                    <span id="nameError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="age" class="col-sm-3 text-left control-label col-form-label">Age</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="age" placeholder="Type Your Age Here">
                                                    <span id="ageError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="input-group row my-3">
                                                <label for="dob" class="col-sm-3 text-left control-label col-form-label">Date Of Birth</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control ml-3 form-input" id="dob" placeholder="mm/dd/yyyy">
                                                    <span id="dobError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Gender</label>
                                                <div class="col-md-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="male" name="radio-stacked" value="male" >
                                                        <label class="custom-control-label" for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="female" name="radio-stacked" value="female" >
                                                        <label class="custom-control-label" for="female">Female</label>
                                                    </div>
                                                    <span id="genderError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Marital Status</label>
                                                <div class="col-md-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="single" name="marital" value="single" >
                                                        <label class="custom-control-label" for="single">Single</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input"  id="married" name="marital" value="married" >
                                                        <label class="custom-control-label" for="married">Married</label>
                                                    </div>
                                                    <span id="maritalError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 m-t-15">Blood Group</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control custom-select form-input" id="blood_group" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                        @foreach($bloodGroups as $bloodgroup)
                                                            <option value="{{$bloodgroup->getKey()}}">{{$bloodgroup->name}}</option>
                                                        @endForeach
                                                    </select>
                                                    <span id="blood_groupError" class="text-danger form-error" ></span>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 m-t-15">Education Qualifications</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control m-t-15 form-input" id="education" style="height: 36px;width: 100%;">
                                                        <option>Select</option>
                                                        @foreach($educations as $education)
                                                            <option value="{{$education->getKey()}}">{{$education->name}}</option>
                                                        @endForeach
                                                    </select>
                                                    <span id="education_qualificationError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="address" placeholder="Type Your Address Here">
                                                    <span id="addressError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nic" class="col-sm-3 text-left control-label col-form-label">NIC Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="nic" placeholder="Type Your NIC Here">
                                                    <span id="nicError" class="text-danger form-error" ></span>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lno" class="col-sm-3 text-left control-label col-form-label">Driving Licence Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="lno" placeholder="Type Your Licence Number Here">
                                                    <span id="lic_noError" class="text-danger form-error" ></span>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bno" class="col-sm-3 text-left control-label col-form-label">B Card Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="bno" placeholder="Type Your B Card Number Here">
                                                    <span id="bcard_numberError" class="text-danger form-error" ></span>

                                                </div>
                                            </div>

                                            <hr>
                                            <h4 class="card-title py-3">Employee Details</h4>
                                            <hr>
                                            <div class="form-group row">
                                                <label for="eid" class="col-sm-3 text-left control-label col-form-label">Employee ID Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="eid" placeholder="Type your ID Here">
                                                    <span id="employee_idError" class="text-danger form-error" ></span>

                                                </div>
                                            </div>
                                            <div class="input-group row my-3">
                                                <label for="doj" class="col-sm-3 text-left control-label col-form-label">Date Of Joined</label>
                                                <div class="col-sm-9">
                                                <input type="date" class="form-control ml-3 form-input" id="doj" placeholder="mm/dd/yyyy">
                                                    <span id="dojError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Employee Type</label>
                                                <div class="col-md-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="Internship" name="emptype" value="Internship" >
                                                        <label class="custom-control-label" for="Internship">Internship</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="Permenant" name="emptype" value="Permenant" >
                                                        <label class="custom-control-label" for="Permenant">Permenant</label>
                                                    </div>
                                                    <span id="employee_typeError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="estate" class="col-sm-3 text-left control-label col-form-label">Employement Status</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="estate" placeholder="Type the Status">
                                                    <span id="statusError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 m-t-15">Name of Bank</label>
                                                <div class="col-md-9">
                                                    <select type="text" class="select2 form-control form-input custom-select form-input" id="bank" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                        @foreach($banks as $bank)
                                                            <option value="{{$bank->getKey()}}">{{$bank->name}}</option>
                                                        @endForeach
                                                    </select>
                                                    <span id="bankError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="baccno" class="col-sm-3 text-left control-label col-form-label">Bank Account Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="baccno" placeholder="Type Your Account Number Here">
                                                    <span id="bank_account_numberError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>


                                            <hr>
                                            <h4 class="card-title py-3">Employee Contact Details</h4>
                                            <hr>


                                            <div class="form-group row">
                                                <label for="ecno" class="col-sm-3 text-left control-label col-form-label">Contact Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="contactno" placeholder="Type Your Contact Number Here">
                                                    <span id="contact_numberError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="eemale" class="col-sm-3 text-left control-label col-form-label">Email Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="eemale" placeholder="Type Your Email Address Here">
                                                    <span id="emailError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="caddress" class="col-sm-3 text-left control-label col-form-label">Address for Correspondant</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="caddress" placeholder="Type the address Here">
                                                    <span id="address_correspondentError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="emergancyno" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="emergancyno" placeholder="Type the Number Here">
                                                    <span id="emergency_contact_numberError" class="text-danger form-error" ></span>

                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <label for="emergancyp" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Person</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="emergancyp" placeholder="Type the name Here">
                                                    <span id="emergency_contact_personError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="emergancyr" class="col-sm-3 text-left control-label col-form-label">Relationship with E contact Person</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="emergancyr" placeholder="Type the relationship Here">
                                                    <span id="emergency_contact_person_relationshipError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3">Mediclaim Details Provided?</label>
                                                <div class="col-md-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="yes" name="mediclaim" value="yes" >
                                                        <label class="custom-control-label" for="yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input form-input" id="no" value="no" name="mediclaim" >
                                                        <label class="custom-control-label" for="no">No</label>
                                                    </div>
                                                    <span id="mediclaimError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                            <div class="border-top">
                                                <div class="card-body float-right">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="viewEmployees" role="tabpanel">
                                <div class="container-fluid">
                                    <!-- ============================================================== -->
                                    <!-- Start Page Content -->
                                    <!-- ============================================================== -->
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <div class="card-body"><div class="modal fade bd-confirmation-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                                        <div>NOTICE: You are going to delete the "<b id="deleteEmployeeName"></b>" employee. </div>
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
                                                <div class="form-group row">
                                                    <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                                </div>
                                                <div class="modal fade bd-form-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add Employee Details</h5>
                                                                <button type="button" id="closing" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <form id = "formModal2" class="form-horizontal">
                                                                        <div class="form-group row">
                                                                            <label for="name" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="name1" placeholder="Name Here">
                                                                                <span id="nameErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="age" class="col-sm-3 text-left control-label col-form-label">Age</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="age1" placeholder="Type Your Age Here">
                                                                                <span id="ageErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group row my-3">
                                                                            <label for="dob" class="col-sm-3 text-left control-label col-form-label">Date Of Birth</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="date" class="form-control ml-3 form-input" id="dob1" placeholder="mm/dd/yyyy">
                                                                                <span id="dobErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Gender</label>
                                                                            <div class="col-md-9">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input" id="male" name="radio-stacked1" value="male" >
                                                                                    <label class="custom-control-label" for="male">Male</label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input" id="female" name="radio-stacked1" value="female">
                                                                                    <label class="custom-control-label" for="female">Female</label>
                                                                                </div>
                                                                                <span id="genderErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Marital Status</label>
                                                                            <div class="col-md-9">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input" id="single" name="marital1" value="single" >
                                                                                    <label class="custom-control-label" for="single">Single</label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input" id="married" name="marital1" value="married" required>
                                                                                    <label class="custom-control-label" for="married">Married</label>
                                                                                </div>
                                                                                <span id="maritalErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3 m-t-15">Blood Group</label>
                                                                            <div class="col-md-9">
                                                                                <select class="select2 form-control custom-select form-input" id="blood_group1" style="width: 100%; height:36px;">
                                                                                    <option>Select</option>
                                                                                    @foreach($bloodGroups as $bloodgroup)
                                                                                        <option value="{{$bloodgroup->getKey()}}">{{$bloodgroup->name}}</option>
                                                                                    @endForeach
                                                                                </select>
                                                                                <span id="blood_groupErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3 m-t-15">Education Qualifications</label>
                                                                            <div class="col-md-9">
                                                                                <select class="select2 form-control m-t-15 form-input" id="education1" style="height: 36px;width: 100%;">
                                                                                    <option>Select</option>
                                                                                    @foreach($educations as $education)
                                                                                        <option value="{{$education->getKey()}}">{{$education->name}}</option>
                                                                                    @endForeach
                                                                                </select>
                                                                                <span id="education_qualificationErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="address" class="col-sm-3 text-left control-label col-form-label">Permanent Address</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="address1" placeholder="Type Your Address Here">
                                                                                <span id="addressErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="nic" class="col-sm-3 text-left control-label col-form-label">NIC Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="nic1" placeholder="Type Your NIC Here">
                                                                                <span id="nicError" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="lno" class="col-sm-3 text-left control-label col-form-label">Driving Licence Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="lno1" placeholder="Type Your Licence Number Here">
                                                                                <span id="lic_noErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="bno" class="col-sm-3 text-left control-label col-form-label">B Card Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="bno1" placeholder="Type Your B Card Number Here">
                                                                                <span id="bcard_numberErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                        <h4 class="card-title py-3">Employee Details</h4>
                                                                        <hr>



                                                                        <div class="form-group row">
                                                                            <label for="eid" class="col-sm-3 text-left control-label col-form-label">Employee ID Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-inpu" id="eid1" placeholder="Type your ID Here">
                                                                                <span id="employee_idErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="input-group row my-3">
                                                                            <label for="doj" class="col-sm-3 text-left control-label col-form-label">Date Of Joined</label>

                                                                            <div class="col-sm-9">
                                                                                <input type="date" class="form-control ml-3" id="doj1" placeholder="mm/dd/yyyy">
                                                                                <span id="dojErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Employee Type</label>
                                                                            <div class="col-md-9">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input"  id="Internship" name="emptype1" value="Internship" >
                                                                                    <label class="custom-control-label" for="Internship">Internship</label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input form-input" id="Permenant" name="emptype1" value="Permenant" >
                                                                                    <label class="custom-control-label" for="Permenant">Permenant</label>
                                                                                </div>
                                                                                <span id="employee_typeErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label for="estate" class="col-sm-3 text-left control-label col-form-label">Employement Status</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="estate1" placeholder="Type the Status">
                                                                                <span id="statusErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3 m-t-15">Name of Bank</label>
                                                                            <div class="col-md-9">
                                                                                <select type="text" class="select2 form-control form-input custom-select" id="bank1" style="width: 100%; height:36px;">
                                                                                    <option>Select</option>
                                                                                    @foreach($banks as $bank)
                                                                                        <option value="{{$bank->getKey()}}">{{$bank->name}}</option>
                                                                                    @endForeach
                                                                                </select>
                                                                                <span id="bankErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="baccno" class="col-sm-3 text-left control-label col-form-label">Bank Account Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="baccno1" placeholder="Type Your Account Number Here">
                                                                                <span id="bank_account_numberErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>



                                                                        <hr>
                                                                        <h4 class="card-title py-3">Employee Contact Details</h4>
                                                                        <hr>

                                                                        <div class="form-group row">
                                                                            <label for="ecno" class="col-sm-3 text-left control-label col-form-label">Contact Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="contactno1" placeholder="Type Your Contact Number Here">
                                                                                <span id="contact_numberErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="eemale" class="col-sm-3 text-left control-label col-form-label">Email Address</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="eemale1" placeholder="Type Your Email Address Here">
                                                                                <span id="emailErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="caddress" class="col-sm-3 text-left control-label col-form-label">Address for Correspondant</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="caddress1" placeholder="Type the address Here">
                                                                                <span id="address_correspondentErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="emergancyno" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Number</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="emergancyno1" placeholder="Type the Number Here">
                                                                                <span id="emergency_contact_numberErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="emergancyp" class="col-sm-3 text-left control-label col-form-label">Emergancy Contact Person</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="emergancyp1" placeholder="Type the name Here">
                                                                                <span id="emergency_contact_person_relationshipErro" class="text-danger form-error" ></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="emergancyr" class="col-sm-3 text-left control-label col-form-label">Relationship with E contact Person</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control form-input" id="emergancyr1" placeholder="Type the relationship Here">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Mediclaim Details Provided?</label>
                                                                            <div class="col-md-9">
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" id="yes" name="mediclaim1" value="yes" required>
                                                                                    <label class="custom-control-label" for="yes">Yes</label>
                                                                                </div>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" id="no" value="no" name="mediclaim1" required>
                                                                                    <label class="custom-control-label" for="no">No</label>
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
                                            </div>
                                            <div class="table-responsive-md">
                                                <table id="example" class="display" style="width:100%">
                                                    <thead  class="bg-light">
                                                    <tr>
                                                        <th></th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>DOB</th>
                                                        <th>Gender</th>
                                                        <th>Marital status</th>
                                                        <th>Blood Group</th>
                                                        <th>Education</th>
                                                        <th>Address</th>
                                                        <th>NIC</th>
                                                        <th>License No</th>
                                                        <th>B Card No</th>
                                                        <th>Employee Id</th>
                                                        <th>DOJ</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                        <th>Bank</th>
                                                        <th>Bank Account</th>
                                                        <th>Contact No</th>
                                                        <th>Email Address</th>
                                                        <th>Address for Correspondant</th>
                                                        <th>Emergancy Contact Number</th>
                                                        <th>Emergancy Contact Person</th>
                                                        <th>Relationship with E contact Person</th>
                                                        <th>Medicalim</th>
                                                        <th class="font-weight-bold"><a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                                <i class="fas fa-check text-center"></i>
                                                            </a></th>
                                                        <th><a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class=" far fa-times-circle"></i>
                                                            </a> </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($employees as $key=> $employee)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{$employee->name}}</td>
                                                            <td>{{$employee->age}}</td>
                                                            <td>{{$employee->dob}}</td>
                                                            <td>{{$employee->gender}}</td>
                                                            <td>{{$employee->marital_status}}</td>
                                                            <td>{{$employee->bloodGroup->name}}</td>
                                                            <td>{{$employee->education->name}}</td>
                                                            <td>{{$employee->address}}</td>
                                                            <td>{{$employee->nic}}</td>
                                                            <td>{{$employee->driving_licence_no}}</td>
                                                            <td>{{$employee->bcard_no}}</td>
                                                            <td>{{$employee->employee_id}}</td>
                                                            <td>{{$employee->doj}}</td>
                                                            <td>{{$employee->employee_type}}</td>
                                                            <td>{{$employee->employee_status}}</td>
                                                            <td>{{$employee->bank->name}}</td>
                                                            <td>{{$employee->account_number}}</td>
                                                            <td>{{$employee->phone_number}}</td>
                                                            <td>{{$employee->email}}</td>
                                                            <td>{{$employee->correspondent_address}}</td>
                                                            <td>{{$employee->emergency_contact_number}}</td>
                                                            <td>{{$employee->emergency_contact_person}}</td>
                                                            <td>{{$employee->emergency_contact_person_relationship}}</td>
                                                            <td>{{$employee->mediclaim}}</td>



                                                            <td><button type="button" data-data="{{$employee}}" data-index="{{ $key }}" data-id = '{{ $employee->getkey() }}' id="editButton{{ $employee->getKey() }}"  class="btn btn-cyan btn-sm btn-edit">Edit</button></td>
                                                            <td><button type="button" data-name="{{$employee->name}}" data-index="{{ $key }}" data-id = '{{ $employee->getkey() }}' id="deleteButton{{ $employee->getKey() }}" class="btn btn-danger btn-sm btn-delete">Delete</button></td>
                                                        </tr>
                                                    @endForeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="m-5"></div>
                                            <table class="display" id = "report"  style="width:100%">
                                                <thead>
                                                <th></th>
                                                <th>Employee id</th>
                                                <th>Employee type</th>
                                                <th>Status</th>
                                                <th>Phone Number</th>
                                                <th>Account number</th>
                                                </thead>
                                                <tbody class="customtable">
                                                @foreach($employees as $key=> $employee)
                                                    <tr>
                                                        <td></td>
                                                        <td>{{$employee->employee_id}}</td>
                                                        <td>{{$employee->employee_type}}</td>
                                                        <td>{{$employee->employee_status}}</td>
                                                        <td>{{$employee->phone_number}}</td>
                                                        <td>{{$employee->account_number}}</td>
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
            </div></div>
        <footer class="footer text-center">
            All Rights Reserved by Mass Line (pvt) Ltd. Designed and Developed by <a href="#">####</a>.
        </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

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
        var table1;



        $(document).ready(function() {
            table = $('#example').DataTable({
                dom: 'Bfrtip',
                scrollX: true,
                scrollCollapse: true,
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
        $(document).ready(function() {
            table1 = $('#report').DataTable({
                dom: 'Bfrtip',
                // scrollX: true,
                scrollCollapse: true,
                paging: true,
                // fixedColumns: {
                //     leftColumns: 1,
                //     rightColumns: 2
                // },
                // autoWidth: false,
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

        $(document).on('click','.btn-delete',function (e){

            var deleteId = $(this).data('id');

            $("#deleteId").val(deleteId);

            var name = $(this).data("name");

            $("#deleteEmployeeName").html(name);

            $(".bd-confirmation-modal-lg").modal('show');

        });

        $(document).on('submit','#confirmationModal', function (e) {
            e.preventDefault();
            var deleteId = $("#deleteId").val();
            $("#confirmationAlert").hide();

            $.ajax({
                method: "POST",
                url: "{{ url('/employee/delete') }}",
                dataType: "json",
                data: {
                    id: deleteId
                },
                success: function (data) {
                    if (data.success) {
                        $("#confirmationAlert").html(`You have successfully deleted the employee`);
                        $("#confirmationAlert").show();
                        $("#confirmationAlert").removeClass('alert-danger').addClass('alert-success');
                        window.setTimeout(function () {
                            $(".bd-confirmation-modal-lg").modal('hide');
                            $("#confirmationAlert").hide();

                        }, 600);

                        var index = $("#deleteButton" + deleteId).data("index");

                        table.row(index).remove().draw();
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

        });




        $(document).on('click','.btn-edit', function (e) {




            var updateId = $(this).data("id");
            console.log(updateId)
            $("#updateId").val(updateId);

            var data = $(this).data("data");

            $("#name1").val(data.name);
            $("#age1").val(data.age);
            $("#dob1").val(data.dob);
            $("input[name='radio-stacked1']").val([data.gender]);
            $("input[name='marital1']").val([data.marital_status]);
            $("#blood_group1").val(data.blood_group_id);
            $("#education1").val(data.education_qualification_id);
            $("#address1").val(data.address);
            $("#nic1").val(data.nic);
            $("#lno1").val(data.driving_licence_no);
            $("#bno1").val(data.bcard_no);
            $("#eid1").val(data.employee_id);
            $("#doj1").val(data.doj);
            $("input[name='emptype1']").val([data.employee_type]);
            $("#estate1").val(data.employee_status);
            $("#bank1").val(data.bank_id);
            $("#baccno1").val(data.account_number);
            $("#contactno1").val(data.phone_number);
            $("#eemale1").val(data.email);
            $("#caddress1").val(data.correspondent_address);
            $("#emergancyno1").val(data.emergency_contact_number);
            $("#emergancyp1").val(data.emergency_contact_person);
            $("#emergancyr1").val(data.emergency_contact_person_relationship);
            $("input[name='mediclaim1']").val([data.mediclaim]);

            $(".bd-form-modal-lg").modal('show');



        });

        $(document).on('submit','#formModal2',function (e) {

            e.stopPropagation();
            e.preventDefault();



            var updateId = $("#updateId").val();
            var name = $("#name1").val();
            var age = $("#age1").val();
            var dob = $("#dob1").val();
            var gender = $("input[name='radio-stacked1']:checked").val();
            var marital = $("input[name='marital1']:checked").val();
            var blood_group = $("#blood_group1").val();
            var education_qualification = $("#education1").val();
            var address = $("#address1").val();
            var nic = $("#nic1").val();
            var lic_no = $("#lno1").val();
            var bcard_number = $("#bno1").val();
            var employee_id = $("#eid1").val();
            var doj = $("#doj1").val();
            var employee_type = $("input[name='emptype1']:checked").val();
            var status = $("#estate1").val();
            var bank = $("#bank1").val();
            var bank_account_number = $("#baccno1").val();
            var contact_number = $("#contactno1").val();
            var email = $("#eemale1").val();
            var address_correspondent = $("#caddress1").val();
            var emergency_contact_number = $("#emergancyno1").val();
            var emergency_contact_person = $("#emergancyp1").val();
            var emergency_contact_person_relationship = $("#emergancyr1").val();
            var mediclaim = $("input[name='mediclaim1']:checked").val();

            $.ajax({
                method: "POST",
                url: "{{ url('/employee/update') }}",
                dataType: "json",
                data: {

                    name: name,
                    age : age,
                    dob : dob,
                    gender : gender,
                    marital : marital,
                    blood_group : blood_group,
                    education_qualification : education_qualification,
                    address : address,
                    nic : nic,
                    lic_no : lic_no,
                    bcard_number : bcard_number,
                    employee_id : employee_id,
                    doj : doj,
                    employee_type : employee_type,
                    status : status,
                    bank : bank,
                    bank_account_number : bank_account_number,
                    contact_number : contact_number,
                    email :email,
                    address_correspondent : address_correspondent,
                    emergency_contact_number : emergency_contact_number,
                    emergency_contact_person : emergency_contact_person,
                    emergency_contact_person_relationship : emergency_contact_person_relationship,
                    mediclaim : mediclaim,
                    updateId: updateId


                },

                success: function (data) {

                    if(data.success) {

                        $(".bd-form-modal-lg").modal('hide');

                        var index = $("#editButton"+updateId).data("index");
                        $("#modalAlert").html(`You have successfully updated the supplier.`);
                        $("#modalAlert").show();
                        $("#modalAlert").removeClass('alert-danger').addClass('alert-success');

                        // window.setTimeout(function () {
                        //     $(".bd-form-modal-lg").modal('hide');
                        //     $('.form-input').val('');
                        //     hideErrors();
                        // }, 800)

                        data.employee['driving_licence_no'] = data.employee.lic_no;
                        data.employee['bcard_no'] = data.employee.bcard_number;
                        data.employee['marital_status'] = data.employee.marital;
                        data.employee['blood_group_id'] = data.employee.blood_group.name;
                        data.employee['education_qualification_id'] = data.employee.education_qualification.name;
                        // data.supplier['bank_name'] = data.supplier.bankname;

                        console.log(data.employee.education_qualification.name);

                        table.row(index).data([

                            "",

                            data.employee.name,
                            data.employee.age,
                            data.employee.dob,
                            data.employee.gender,
                            data.employee.marital,
                            data.employee.blood_group.name,
                            data.employee.education_qualification.name,
                            data.employee.address,
                            data.employee.nic,
                            data.employee.lic_no,
                            data.employee.bcard_number,
                            data.employee.employee_id,
                            data.employee.doj,
                            data.employee.employee_type,
                            data.employee.status,
                            data.employee.bank.name,
                            data.employee.bank_account_number,
                            data.employee.contact_number,
                            data.employee.email,
                            data.employee.address_correspondent,
                            data.employee.emergency_contact_number,
                            data.employee.emergency_contact_person,
                            data.employee.emergency_contact_person_relationship,
                            data.employee.mediclaim,
                            `<button data-data='${JSON.stringify(data.employee)}' data-index="${index}" data-id="${data.employee.id}" id="editButton${data.employee.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-index="${index}" data-id="${data.employee.id}" id="deleteButton${data.employee.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]).draw();


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
                                $("#"+id+"Erro").html(errorMsg);
                            }
                            break;
                        case 500:
                            mainError = "Server error appeared";
                            break;
                        default:
                            break;
                    }

                    // $("#modalAlert").html(mainError);
                    // $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
                    // $("#modalAlert").show();
                }



            });
        });


        $(document).on('submit','#formModal', function (e) {

            e.stopPropagation();
            e.preventDefault();


            var name = $("#name").val();
            var age = $("#age").val();
            var dob = $("#dob").val();
            var gender = $("input[name='radio-stacked']:checked").val();
            var marital = $("input[name='marital']:checked").val();
            var blood_group = $("#blood_group").val();
            var education_qualification = $("#education").val();
            var address = $("#address").val();
            var nic = $("#nic").val();
            var lic_no = $("#lno").val();
            var bcard_number = $("#bno").val();
            var employee_id = $("#eid").val();
            var doj = $("#doj").val();
            var employee_type = $("input[name='emptype']:checked").val();
            var status = $("#estate").val();
            var bank = $("#bank").val();
            var bank_account_number = $("#baccno").val();
            var contact_number = $("#contactno").val();
            var email = $("#eemale").val();
            var address_correspondent = $("#caddress").val();
            var emergency_contact_number = $("#emergancyno").val();
            var emergency_contact_person = $("#emergancyp").val();
            var emergency_contact_person_relationship = $("#emergancyr").val();
            var mediclaim = $("input[name='mediclaim']:checked").val();

            console.log(bank);


            $.ajax({
                method: "POST",
                url: "{{ url('/employee/create') }}",
                dataType: "json",
                data: {

                    name: name,
                    age : age,
                    dob : dob,
                    gender : gender,
                    marital : marital,
                    blood_group : blood_group,
                    education_qualification : education_qualification,
                    address : address,
                    nic : nic,
                    lic_no : lic_no,
                    bcard_number : bcard_number,
                    employee_id : employee_id,
                    doj : doj,
                    employee_type : employee_type,
                    status : status,
                    bank : bank,
                    bank_account_number : bank_account_number,
                    contact_number : contact_number,
                    email :email,
                    address_correspondent : address_correspondent,
                    emergency_contact_number : emergency_contact_number,
                    emergency_contact_person : emergency_contact_person,
                    emergency_contact_person_relationship : emergency_contact_person_relationship,
                    mediclaim : mediclaim



                },

                success: function (data) {

                    if(data.success) {
                        $("#modalAlert").html(`You have successfully added the employee.`);
                        $("#modalAlert").show();
                        $("#modalAlert").removeClass('alert-danger').addClass('alert-success');

                        window.setTimeout(function () {
                            $("#modalAlert").hide();

                        }, 6000)


                        var index = table.rows().count();


                        console.log(data.employee.name,)

                        table.rows.add([[

                            "",

                            data.employee.name,
                            data.employee.age,
                            data.employee.dob,
                            data.employee.gender,
                            data.employee.marital,
                            data.employee.blood_group.name,
                            data.employee.education_qualification.name,
                            data.employee.address,
                            data.employee.nic,
                            data.employee.lic_no,
                            data.employee.bcard_number,
                            data.employee.employee_id,
                            data.employee.doj,
                            data.employee.employee_type,
                            data.employee.status,
                            data.employee.bank.name,
                            data.employee.bank_account_number,
                            data.employee.contact_number,
                            data.employee.email,
                            data.employee.address_correspondent,
                            data.employee.emergency_contact_number,
                            data.employee.emergency_contact_person,
                            data.employee.emergency_contact_person_relationship,
                            data.employee.mediclaim,
                            `<button data-data='${JSON.stringify(data.employee)}' data-index="${index}" data-id="${data.employee.id}" id="editButton${data.employee.id}" type="button" class="btn btn-cyan btn-sm btn-edit">Edit</button>`,
                            `<button data-index="${index}" data-id="${data.employee.id}" id="deleteButton${data.employee.id}" type="button" class="btn btn-danger btn-sm btn-delete">Delete</button>`
                        ]]).draw();

                        $("#name").val("");
                        $("#age").val("");
                        $("#dob").val("");
                        $("input[name='radio-stacked']").val([""]);
                        $("input[name='marital']").val([""]);
                        $("#blood_group").val("");
                        $("#education").val("");
                        $("#address").val("");
                        $("#nic").val("");
                        $("#lno").val("");
                        $("#bno").val("");
                        $("#eid").val("");
                        $("#doj").val("");
                        $("input[name='emptype']").val([""]);
                        $("#estate").val("");
                        $("#bank").val("");
                        $("#baccno").val("");
                        $("#contactno").val("");
                        $("#eemale").val("");
                        $("#caddress").val("");
                        $("#emergancyno").val("");
                        $("#emergancyp").val("");
                        $("#emergancyr").val("");
                        $("input[name='mediclaim']").val([""]);

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

                    // $("#modalAlert").html(mainError);
                    // $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
                    // $("#modalAlert").show();
                }



            });
        });

        $(document).on('click',"#closing", function(){
            hideErrors();
        });

        $(document).on('click keyup',".form-input", function(){
            hideErrors();
        });

        function hideErrors(){
            $("#modalAlert").hide();
            $(".form-error").html("");
            $(".form-input").removeClass("is-invalid");
        };


    </script>
</div>
</body>

</html>
