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
    <link rel="stylesheet" type="text/css" href="../../assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <link href="{{url('/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
                    <h4 class="page-title">ReadyMade Brand</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                                <li class="breadcrumb-item"><a href="#">Readymade Main Product</a></li>
                                <li class="breadcrumb-item" aria-current="page">Readymade Sub Product</li>
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

                <div class="row m-5">
                    <div class="col-md-6">
                        <img src="../../assets/images/big/img-bottom.jfif" alt="bottom1" class="img-thumbnail rounded border-0 bg-light" width="70%">
                    </div>
                    <div class="col-md-6 d-flex flex-column">
                        <div class="header mb-1">
                            <h2 class="text-right display-5">ReadyMade Brand</h2>
                            <p class="text-right text-muted">Description Goes Here</p>

                        </div>
                        <div class="row product-description shadow-sm bg-white-rounded">
                            <div class="col-sm-4 shadow-sm bg-white-rounded">
                                <p class="font-weight-bold display-8">Main Id</p>
                            </div>
                            <div class="col-sm-8 shadow-sm bg-white-rounded">
                                    <p class="font-weight-bold display-8">{{ $mainId }}</p>
                            </div>
                        </div>
                        <div class="row colors-category mt-5">
                            <div class="col-sm-4">
                                <p class="font-weight-bold display-7">Colors</p>
                            </div>
                            <div class="col-sm-6 pt-2">

                                @foreach($product as $sub)
                                    {{--                                            <input type="hidden" name="navigate_id" id="navigateId"/>--}}
                                    {{--                                                <input type="hidden" name="subId" id="subId" value="{{ $sub -> getKey() }}">--}}
                                    <button data-id='{{ $sub->getKey() }}' onclick="window.location.href='/crud/readymade_sub/view/{{ $sub->getKey() }}'" class="btn btn" style="background:{{ $sub -> colour_id }}"></button>
                                @endforeach

                            </div>
                            <div class="col-sm-2 pt-2">
                                <div data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus fa-1x text-white rounded-circle bg-secondary p-2" data-toggle="tooltip" data-placement="top" title="Add color" style="cursor: pointer;"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Colored Readymade Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" onClick="window.location.reload()" >&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <form id="formModal" class="form-horizontal">

                                    <div class="card-body p-1">

                                        <div class="form-group row">
                                            <span class="alert col-12" role="alert" style="display:none" id="modalAlert"></span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Item Code</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-input" id="item-code" placeholder="RSP0000" required>
                                                        <span id="itemCodeError" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname" class="col-sm-3 text-left control-label col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-input" id="name" placeholder="Name Here" required>
                                                        <span id="nameError"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Material</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-input" id="material" placeholder="Material Here" required>
                                                        <span id="materialError" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Colors Code</label>
                                                    <div class="col-sm-9">
                                                        <input type="color" class="form-control form-input" id="colour" placeholder="#ffffff" required>
                                                        <span id="colourError" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Initial Stocks</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control form-input" id="stock" placeholder="0" required>
                                                        <span id="initialStockError" ></span>
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
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-md-3 m-t-15">Sizes Available</label>
                                                    <div class="col-md-9">
                                                        <select name="size[]" class="select2 form-control m-t-15 form-input" id="size" multiple="multiple" style="height: 50px;width: 100%;" >
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
                                                            <span id="wholeSalePriceError" ></span>
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
                                                            <span id="retailPriceError" ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cono1" class="col-sm-3 text-left control-label col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control form-input" id="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="margin: auto">
                                                <div class="form-group row">
                                                    <label class="col-md-3">Image</label>
                                                    <div class="image-thumbnail" style="background-image: url('{{url('/assets/images/placeholder.jpeg')}}')" id="uploadImage"></div>
                                                    <input type="hidden" name="file_name" id="fileName" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                            <input type="hidden" id="mainId" value="{{$mainId}}">

                                            <button type="submit" id="submit-colour" class="btn btn-success">Insert</button>

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
<script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="../../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="../../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
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
                            "background-image":"url({{url('/storage/images/readyMade')}}/"+response.filename+")"
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

    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
        $('.invalid-feedback').css({ "display": "block", "cursor": "pointer" })
    });

    $(".invalid-feedback").click(function() {
        $('.custom-file-label').html("Choose an image");
        $('.invalid-feedback').css("display", "none")
    });


    $(document).on('submit', '#formModal', function(e) {
        //e.stopPropagation();
        e.preventDefault();


        var name = $("#name").val();
        var itemCode = $("#item-code").val();
        var material = $("#material").val();
        var initialStock = $("#stock").val();
        var mainId = $("#mainId").val();
        var colour = $("#colour").val();
        var linkOfSupplier = $("#links-of-suppliers").val();
        var wholeSalePrice = $("#wholesale-price").val();
        var retailPrice = $("#retail-price").val();
        var size = $("#size").val();
        var description = $("#description").val();
        var validatedCustomFile = $("#fileName").val();

        $.ajax({
            method: "POST",
            url: "{{ url('/crud/readymade_sub/create') }}",
            dataType: "json",
            data: {
                name: name,
                itemCode: itemCode,
                material:material,
                mainId:mainId,
                initialStock:initialStock,
                image:validatedCustomFile,
                description:description,
                size:size,
                linkOfSupplier:linkOfSupplier,
                colour:colour,
                wholeSalePrice:wholeSalePrice,
                retailPrice:retailPrice

            },
            success: function(data){
                if(data.success) {
                    console.log(data)
                    $('#itemCodeError').hide();
                    $('#nameError').hide();
                    $('#materialError').hide();
                    $('#initialStockError').hide();
                    $('#wholeSalePriceError').hide();
                    $('#retailPriceError').hide();
                    $("#modalAlert").html(`You have successfully added the product.`);
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
                $("#deleteButton").html("Try Again");
            }
        })
    });

    function hideErrors(){

    }


</script>
</body>

</html>
