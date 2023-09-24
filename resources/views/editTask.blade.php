@extends('layout')
@section('title', "Update Task")
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<!-- Custom fonts for this template-->
	<link href='{{asset("import/assets/vendor/fontawesome-free/css/all.min.css")}}' rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href='{{asset("import/assets/css/sb-admin-2.min.css" )}}' rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href='{{asset("import/assets/css/addTaskStyle.css")}}'>

	</head>
	<body>
	
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
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="addTask">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add a new task</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

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
                </nav>
            </div>
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<h2 class="heading-section">Edit Your TASK</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="wrapper img" style="background-image: url({{asset('import/assets/img/img.jpg')}});">
								<div class="row">
									<div class="col-md-9 col-lg-7">
										<div class="contact-wrap w-100 p-md-5 p-4">
											<h3 class="mb-4">Edit Your TASK</h3>
											<div id="form-message-warning" class="mb-4"></div> 
                                                <div id="form-message-success" class="mb-4">
                                                Your message was sent, thank you!
                                                </div>
											<form method="POST" action="/tasks/{{$task->task_id}}" id="contactForm" name="contactForm" class="contactForm">
												@csrf
                                                @method('PUT')
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="label" for="title">TITLE</label>
															<input type="text" class="form-control" name="title" value="{{$task->title}}" id="title" placeholder="Title">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="label">DESCRIPTION</label>
															<textarea name="description" class="form-control" id="description" cols="30" rows="4" placeholder="Description">{{$task->description}}</textarea>
														</div>
													</div>
                                                    <div class="col-md-12">
                                                    <div class="form-check">
                                                        <input type="radio" name="status" class="form-check-input" id="status-1" value="1" @if($task->status == 1) checked @endif>
                                                        <label class="form-check-label" for="status-1">Done</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" name="status" class="form-check-input" id="status-0" value="0" @if($task->status == 0) checked @endif>
                                                        <label class="form-check-label" for="status-0">Not Done</label>
                                                    </div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mohamed Magdy 2023</span>
                    </div>
                </div>
            </footer>
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


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
@endsection
