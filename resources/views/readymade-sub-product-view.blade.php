<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <!-- icon -->
    <link rel="icon" type="image/png" href="../../assets/images/logo-sm2.png">
    <title>Mass Line (pvt) Ltd</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link href="../../../dist/css/custom.css" rel="stylesheet">
    <link href="{{url('/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet">
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
                        <img src="/assets/images/logo-sm.png" alt="homepage" class="light-logo" width="38px" height="38px" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="/assets/images/logo-txt.png" width="152px" height="40px" alt="homepage" class="light-logo" />
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
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
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
                    <h4 class="page-title">Blue Readymade Jeans</h4>                            <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                                <li class="breadcrumb-item"><a href="#">Readymade Main Product</a></li>
                                <li class="breadcrumb-item"><a href="#">Readymade Sub Product</a></li>
                                <li class="breadcrumb-item" aria-current="page">Product</li>
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
                            @foreach($products as $key => $product)
                                <div class="dropdown-menu mr-3 shadow-sm bg-white-rounded" aria-labelledby="navbarDropdown">
                                    <span data-data="{{  $product }}" data-index="{{ $key }}" data-id='{{ $product->getKey() }}' id="editButton{{ $product->getKey() }}" class="dropdown-item pl-2 btn-edit">Edit</span>
                                    <span data-name="{{  $product->name }}" data-index="{{ $key }}" data-id='{{ $product->getKey() }}' id="editButton{{ $product->getKey() }}" class="dropdown-item pl-2 btn-delete">Delete</span>
                                </div>
                            @endforeach
                        </li>
                    </ul>
                </div>

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
                                        <div>NOTICE: You are going to delete the "<b id="deleteProductName"></b>" product. </div>
                                        <div class="card-body float-right">
                                            @foreach($products as $product)
                                                <input type="hidden" name="delete_id" id="deleteId"/>
                                                <input type="hidden" name="main_id" id="mainId" value="{{$product->main_id}}"/>
                                                <button data-dismiss="modal" type="button" class="btn btn-secondary">Cancel</button>
                                                <button type="submit" id="deleteButton" onclick="window.location.href='/crud/ready_made_sub/{{ $product->main_id }}'" autofocus class="btn btn-success">Continue</button>
                                            @endforeach
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
                                <h5 class="modal-title" id="formModalLabel">ReadyMade Sub Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                <label for="lname" class="col-sm-3 text-left control-label col-form-label">Item Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="item-code" placeholder="RSP0000" readonly>
                                                    <span id="itemCodeError" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="name" placeholder="Name Here" required>
                                                    <span id="nameError" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Material</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-input" id="material" placeholder="Material Here" required>
                                                    <span id="materialError" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Colors Code</label>
                                                <div class="col-sm-9">
                                                    <input type="color" class="form-control form-input" id="colour" placeholder="#ffffff" required>
                                                    <span id="colourError" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Initial Stocks</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control form-input" id="stock" placeholder="0" required>
                                                    <span id="initialStockError" >@error('name') {{$message}} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Links Of Suppliers</label>
                                                <div class="col-sm-9">
                                                    <select type="text" class="form-control form-input" id="links-of-suppliers" placeholder="Supplier Link">
                                                        <option value="" >Select Suppliers Link</option>
                                                        @foreach($suppliers as $supplier)
                                                            <option value="{{$supplier->getKey()}}">{{$supplier->name}}</option>
                                                        @endForeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 m-t-15">Sizes Available</label>
                                                <div class="col-md-9">
                                                    <select name="size[]" class="select2 form-control m-t-15 form-input" id="size" multiple="multiple" style="height: 50px;width: 100%;" required>
                                                        @foreach($sizesCategories as $catName=> $sizes)
                                                            <optgroup label="{{$catName}}">
                                                                @foreach($sizes as $size)
                                                                    <option value="{{ $size->getKey() }}">{{$size->size}}</option>
                                                                @endForeach
                                                            </optgroup>
                                                        @endForeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3 align-items-center">
                                                <div class="col-lg-3 col-md-12 text-left">
                                                    <label>Wholesale Price</label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-input" id="wholesale-price" placeholder="0.00" aria-label="Recipient 's username" aria-describedby="basic-addon2" >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">Rs</span>
                                                        </div>
                                                        <span id="wholeSalePriceError" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3 align-items-center">
                                                <div class="col-lg-3 col-md-12 text-left">
                                                    <label>Retail Price</label>
                                                </div>
                                                <div class="col-lg-9 col-md-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-input" id="retail-price" placeholder="0.00" aria-label="Recipient 's username" aria-describedby="basic-addon2" >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">Rs</span>
                                                        </div>
                                                        <span id="retailPriceError" >@error('name') {{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea id="description" class="form-control form-input"></textarea>
                                                    <span id="descriptionError" class="text-danger form-error" ></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
{{--                                            <label class="col-md-3">Image</label>--}}
{{--                                            <div class="col-md-9 custom-file">--}}
{{--                                                <input type="file" class="custom-file-input form-input" id="validatedCustomFile" accept="image/*">--}}
{{--                                                <label class="custom-file-label mx-2" for="validatedCustomFile">Choose an image...</label>--}}
{{--                                                <div class="invalid-feedback remove">Remove</div>--}}
{{--                                            </div>--}}
                                            <div class="col-md-6" style="margin: auto">
                                                <div class="form-group row">
                                                    <label class="col-md-3">Image</label>
                                                    <div class="image-thumbnail" style="background-image: url('{{url('/assets/images/placeholder.jpeg')}}')" id="uploadImage"></div>
                                                    <input type="hidden" name="file_name" id="fileName" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top">
                                            <div class="card-body">
                                                <input type="hidden" id="updateId" name="update" />
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @foreach($products as $key => $product)
                    <div class="row m-5">
                        <div class="col-md-6">
                            @if(empty($product->image) == false)
                                <img src="{{ url('/storage/images/readyMade')}}/{{$product -> image}}" alt="bottom1" class="img-thumbnail rounded border-0 bg-light" width="70%">
                            @else
                                <span>This product does not contain any image file</span>
                            @endif
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <div class="header mb-1">

                                <h2 class="text-right display-5">{{$product -> name}}</h2>

                                @if(empty($product->description) == false)
                                    <p class="text-right text-muted">{{$product -> description}}</p>
                                @else
                                    <p class="text-right text-muted">No description....</p>
                                @endif
                            </div>
                            <div class="row product-description shadow-sm bg-white-rounded">

                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Initial Stocks</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><span>{{$product -> initial_stocks}}</span></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Colour Code</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><span style="background:{{ $product -> colour_id }}" >{{$product -> colour_id}}</span></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">WholeSale Price</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>{{$product -> whole_sale_price}}</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Retail Price</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8"><Mark>{{$product -> retail_price}}</Mark></p>
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Supplier Link</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    @foreach($product->productSupplier as $supplier)
                                        <p class="font-weight-bold display-8"><Mark>{{ $supplier-> supplier_id }}</Mark></p>
                                    @endforeach
                                </div>
                                <div class="col-sm-4 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">Sizes Availble</p>
                                </div>
                                <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    @foreach($product->productSizes as $productSize)
                                    <span class="badge badge-pill badge-info">{{ $productSize->size->size }}</span>
                                    @endForeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row mb-5 mx-5">
                    <div class="col">
                        <a class="btn btn-outline-info shadow-none font-weight-bold float-right" role="button" data-toggle="collapse" href="#collapseNewCategory" aria-expanded="false" aria-controls="collapseNewCategory">
                            <i class="fas fa-chart-bar"></i> View Report </a>
                    </div>
                    <div class="collapse" id="collapseNewCategory">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Monthly Sub Product Summary</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody class="customtable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Item Code</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Main Catogory</th>
                                        <th scope="col">Monthly Left Quantity</th>
                                        <th scope="col">Monthly Sold Quanity</th>
                                        <th scope="col">Monthly Sales Amount</th>
                                        <th scope="col">Date of Last Payment</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td>P001</td>
                                        <td>Blue Jacket</td>
                                        <td>Ready Made</td>
                                        <td>60</td>
                                        <td>1740</td>
                                        <td>80000</td>
                                        <td>2020/02/30</td>
                                    </tr>
                                    <tr>
                                        <td>P002</td>
                                        <td>Black Jacket</td>
                                        <td>Ready Made</td>
                                        <td>130</td>
                                        <td>1670</td>
                                        <td>74000</td>
                                        <td>2019/11/30</td>
                                    </tr>
                                    <tr>
                                        <td>P008</td>
                                        <td>Black Jeans</td>
                                        <td>Ready Made</td>
                                        <td>20</td>
                                        <td>1880</td>
                                        <td>120000</td>
                                        <td>2020/01/26</td>
                                    </tr>
                                    <tr>
                                        <td>P010</td>
                                        <td>Duck Canvas</td>
                                        <td>Fabric</td>
                                        <td>26</td>
                                        <td>1944</td>
                                        <td>240000</td>
                                        <td>2020/01/12</td>
                                    </tr>
                                    <tr>
                                        <td>P011</td>
                                        <td>Oil CLoth</td>
                                        <td>Fabric</td>
                                        <td>12</td>
                                        <td>1988</td>
                                        <td>298000</td>
                                        <td>2020/01/11</td>
                                    </tr>
                                    <tr>
                                        <td><button type="submit" class="btn btn-success">Print Report</button></td>
                                    </tr>
                                    </tbody>
                                </table>
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
<script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../../../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../../../assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="../../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="{{url('/assets/libs/dropzone/dropzone.min.js')}}"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    var imageUploadDropzone;

    $("#modal").on("shown.bs.modal",function(e){
        if(!imageUploadDropzone){
            imageUploadDropzone = new Dropzone("div#uploadImage", {

                url: "/crud/ready_made_sub/fileUpload",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data, response){
                    if(response&&response.success){
                        $("#fileName").val(response.filename);
                        $("#uploadImage").css({
                            "background-image":"url({{url('/storage/app/public/images/readyMade')}}/"+response.filename+")"
                        })
                    } else {
                        $("#fileName").val("");
                        $("#uploadImage").css({
                            "background-image":"url({{url('/assets/images/placeholder.jpeg')}})"
                        })
                    }
                },
                previewTemplate: "<span></span>"
            });
        }
    })

    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
        $('.invalid-feedback').css({ "display": "block", "cursor": "pointer" })
    });

    $(".invalid-feedback").click(function() {
        $('.custom-file-label').html("Choose an image");
        $('.invalid-feedback').css("display", "none")
    });


    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {

        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });
    });

    $(document).on('submit', '#formModal', function(e) {
        e.stopPropagation();
        //e.preventDefault();

        var updateId = $("#updateId").val();
        var itemCode = $("#item-code").val();
        var name = $("#name").val();
        var material = $("#material").val();
        var mainId = $("#mainId").val();
        var initialStock = $("#stock").val();
        var colour = $("#colour").val();
        var linkOfSupplier = $("#links-of-suppliers").val();
        var wholeSalePrice = $("#wholesale-price").val();
        var retailPrice = $("#retail-price").val();
        var size = $("#size").val();
        var description = $("#description").val();
        var validatedCustomFile = $("#validatedCustomFile").val();

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/readymade_sub/view/update') }}",
            dataType: "json",
            data: {
                updateId: updateId,
                itemCode:itemCode,
                name: name,
                material:material,
                mainId:mainId,
                initialStock:initialStock,
                image:validatedCustomFile,
                linkOfSupplier:linkOfSupplier,
                description:description,
                size:size,
                colour:colour,
                wholeSalePrice:wholeSalePrice,
                retailPrice:retailPrice

            },
            success: function(data){
                if(data.success) {
                    console.log(data)
                    $("#nameError").hide();
                    $("#modalAlert").html(`You have successfully updated the retail customer.`);
                    $("#modalAlert").show();
                    $("#modalAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function () {
                        $(".bd-form-modal-lg").modal('hide');
                        $('.form-input').val('');
                        hideErrors();
                    }, 600)
                }
            },
            error: function(e) {
                console.error();
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
                $("#modalAlert").html(mainError);
                $("#modalAlert").removeClass('alert-success').addClass('alert-danger');
                $("#modalAlert").show();
            }
        })
    });

    $(document).on('click','.btn-edit', function() {
        $(".bd-form-modal-lg").modal('show');

        var updateId = $(this).data("id");

        var data = $(this).data("data");

        $("#updateId").val(updateId);

        $("#name").val(data.name);
        $("#item-code").val(data.item_code);
        $("#material").val(data.material);
        $("#colour").val(data.colour_id);
        $("#stock").val(data.initial_stocks);
        $("#wholesale-price").val(data.whole_sale_price);
        $("#retail-price").val(data.retail_price);
        $("#description").val(data.description);

    });

    $(document).on('click', '.btn-delete', function(){

        var deleteId = $(this).data('id');

        $("#deleteId").val(deleteId);

        var name = $(this).data("name");

        $("#deleteProductName").html(name);

        $(".bd-confirmation-modal-lg").modal('show');
    })

    $(document).on("submit", "#confirmationModal", function(e){
        e.preventDefault();
        var deleteId = $("#deleteId").val();
        $("#confirmationAlert").hide();

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/readymade_sub/view/delete') }}",
            dataType: "json",
            data: {
                id: deleteId
            },
            success: function(data){
                if(data.success){
                    $("#confirmationAlert").html(`You have successfully deleted the retail customer.`);
                    $("#confirmationAlert").show();
                    $("#confirmationAlert").removeClass('alert-danger').addClass('alert-success');
                    window.setTimeout(function(){
                        $(".bd-confirmation-modal-lg").modal('hide');

                        {{--$.ajax({--}}
                        {{--    method: "GET",--}}
                        {{--    url: "{{ url('/crud/readymade_sub') }}",--}}
                        {{--})--}}


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


</script>
</body>

</html>
