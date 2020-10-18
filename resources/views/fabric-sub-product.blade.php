<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Fabric 1</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
									<li class="breadcrumb-item"><a href="#">Fabric Main Product</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Fabric Sub Product</li>
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
                <div class="card">
                    <div class="shadow-sm bg-white-rounded">
                        <ul class="float-right list-style-none">
                            <li class="dropdown">
                                <a class="pr-2" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-v p-2"></i>
                                </a>
                                <div class="dropdown-menu mr-3 shadow-sm bg-white-rounded" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item pl-2" href="#">Edit</a>
                                    <a class="dropdown-item pl-2" href="#">Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="row m-5">
                        <div class="col d-flex flex-column">
                            <div class="header mb-1">
                                <h2 class="text-right display-5">Fabric 1</h2>
                                <p class="text-right text-muted">Description Goes Here</p>
                            </div>
                            <div class="row product-description shadow-sm bg-white-rounded">
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Brand</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Addidas</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Meterial</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Cotton</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Design</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Abstract</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Construction Style</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>Woven</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Supplier Link</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark><a href="https://www.google.com" class="text-decoration-none">Alpha</a></Mark></p>
                                </div>
                            </div>
                            <div class="row colors-category mt-5">
                                <div class="col-lg-2 col-md-6">
                                    <p class="font-weight-bold display-7">Colors</p>
                                </div>
                                <div class="col-md-10 col-md-6 pt-2">
                                    <a href="fabric-sub-product-view.blade.php" class="btn btn-info"></a>
                                    <a href="fabric-sub-product-view.blade.php" class="btn btn-success"></a>
                                    <a href="fabric-sub-product-view.blade.php" class="btn btn-secondary"></a>
                                    <a href="fabric-sub-product-view.blade.php" class="btn btn-warning"></a>
                                    <a href="fabric-sub-product-view.blade.php" class="btn btn-danger"></a>
                                    <div class="pt-2" style="display: inline-block;">
                                        <div data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus fa-1x text-white rounded-circle bg-secondary p-2 d-inline" data-toggle="tooltip" data-placement="top" title="Add color" style="cursor: pointer;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Fabric Colors</h5>
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
                                                        <label for="fname" class="col-sm-3 text-left control-label col-form-label">Item Code</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="item-code" placeholder="Item code Here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="name" placeholder="Name Here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">GSM value</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="brand" placeholder="GSM Value Here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Average yards per role</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="colors" placeholder="Average yards per role Here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Weight Type</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>Choose.. </option>
                                                                <option>Heavy Weight </option>
                                                                <option>Light Weight</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Water Proof</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>Choose.. </option>
                                                                <option>Yes </option>
                                                                <option>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-6">
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Thickness</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="colors" placeholder="Thickness">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Initial Stocks</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="colors" placeholder="Initial tocks Here">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-3 col-md-12 text-left">
                                                            <label>Wholesale Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="100.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 align-items-center">
                                                        <div class="col-lg-3 col-md-12 text-left">
                                                            <label>Retail Price</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="50.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">$</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3">Image</label>
                                                        <div class="col-md-9 custom-file">
                                                            <input type="file" class="custom-file-input border border-secondary" id="validatedCustomFile" accept="image/*" required>
                                                            <label class="custom-file-label mx-2 border-2" for="validatedCustomFile">Choose an image...</label>
                                                            <div class="invalid-feedback remove">Remove</div>
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
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                <a>All Rights Reserved by Mass Line (pvt) Ltd. Designed and Developed by <a href="#">####</a>.
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
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script>
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
        $('.invalid-feedback').css({ "display": "block", "cursor": "pointer" })
    });

    $(".invalid-feedback").click(function() {
        $('.custom-file-label').html("Choose an image");
        $('.invalid-feedback').css("display", "none")
    });
    </script>
</body>

</html>
