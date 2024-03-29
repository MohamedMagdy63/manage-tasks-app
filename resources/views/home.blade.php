@extends('layout')
@section('title', "Manage Tasks Dashboard")
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href='{{asset("import/assets/vendor/fontawesome-free/css/all.min.css")}}' rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href='{{asset("import/assets/css/sb-admin-2.min.css" )}}' rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Manage Tasks</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Divider -->
           
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="addTask">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add a new task</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="allTasks">
                    <i class="fas fa-fw fa-list"></i>
                    <span>All Tasks</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{$data->first_name}} {{$data->last_name}} 
                                </span>
                                <img class="img-profile rounded-circle"
                                    src='{{asset("import/assets/img/undraw_profile.svg")}}'>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Welcome Again {{$data->first_name}}, Lets Manage Your Tasks</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src='{{asset("import/assets/vendor/jquery/jquery.min.js")}}'></script>
    <script src='{{asset("import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>

    <!-- Core plugin JavaScript-->
    <script src='{{asset("import/assets/vendor/jquery-easing/jquery.easing.min.js")}}'></script>

    <!-- Custom scripts for all pages-->
    <script src='{{asset("import/assets/js/sb-admin-2.min.js")}}'></script>

    <!-- Page level plugins -->
    <script src='{{asset("import/assets/vendor/chart.js/Chart.min.js")}}'></script>

    <!-- Page level custom scripts -->
    <script src='{{asset("import/assets/js/demo/chart-area-demo.js")}}'></script>
    <script src='{{asset("import/assets/js/demo/chart-pie-demo.js")}}'></script>

</body>

</html>
@endsection