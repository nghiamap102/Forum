<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<!-- switchery css -->
	<link rel="stylesheet" type="text/css" href="../src/plugins/switchery/switchery.min.css">
	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="../src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="../src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
	<link rel="stylesheet" type="text/css" href="/css/index.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="../vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="../vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="../vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="../vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="blog" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Blog</span>
						</a>
					</li>
					<li>
						<a href="user" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">User</span>
						</a>
					</li>
					<li>
						<a href="tag"class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Tag</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
                        <a href="static" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Static</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Apexcharts</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Charts</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2020
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">line Chart</h4>
					<div id="chart1"></div>
				</div>
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<div class="main">
            <!-- Body: Header -->
            <div class="body-header d-flex  header_top px-3 px-md-3 px-lg-3" id="header_top">
                <div class="container-fluid p-0">
                    <div class="col-12 p-0">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a href="index.html" class="mb-2 brand-icon  d-md-none d-xl-none">
                               <svg viewBox="-255 372.5 100 49.5" width="100">
                                    <g>
                                        <rect height="9.8" width="2.8" transform="matrix(0.7167 0.6974 -0.6974 0.7167 210.8761 272.6371)" y="391" x="-231.5"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(0.7167 0.6974 -0.6974 0.7167 208.4522 273.7123)" y="388.5" x="-234"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(0.7167 0.6974 -0.6974 0.7167 206.0147 274.7564)" y="386" x="-236.6"></rect>
                                    </g>
                                    <g>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.7167 -0.6974 0.6974 -0.7167 -702.4773 497.1272)" y="386.3" x="-251.7"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.7167 -0.6974 0.6974 -0.7167 -699.8176 503.0566)" y="388.8" x="-249.1"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.7167 -0.6974 0.6974 -0.7167 -697.2343 509.0194)" y="391.2" x="-246.6"></rect>
                                    </g>
                                    <g>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.6974 0.7167 -0.7167 -0.6974 -122.4766 858.9316)" y="398.7" x="-244"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.6974 0.7167 -0.7167 -0.6974 -120.0978 852.8784)" y="396.2" x="-241.5"></rect>
                                        <rect height="9.8" width="2.8" transform="matrix(-0.6974 0.7167 -0.7167 -0.6974 -117.749 846.9018)" y="393.7" x="-239.1"></rect>
                                    </g>
                                    <g>
                                        <path d="M-213.2,401l-2.5-7.5h1l1.2,3.7c0.3,1,0.6,1.9,0.8,2.8h0c0.2-0.9,0.5-1.8,0.9-2.8l1.3-3.7h1l-2.7,7.5    L-213.2,401L-213.2,401z"></path>
                                        <path d="M-205.4,399.8c0.4,0.3,1.1,0.5,1.7,0.5c1,0,1.6-0.5,1.6-1.3c0-0.7-0.4-1.1-1.4-1.5c-1.2-0.4-2-1.1-2-2.2    c0-1.2,1-2.1,2.4-2.1c0.8,0,1.3,0.2,1.7,0.4l-0.3,0.8c-0.2-0.1-0.8-0.4-1.4-0.4c-1,0-1.4,0.6-1.4,1.1c0,0.7,0.4,1,1.5,1.4    c1.3,0.5,1.9,1.1,1.9,2.2c0,1.2-0.9,2.2-2.6,2.2c-0.7,0-1.5-0.2-1.9-0.5L-205.4,399.8z"></path>
                                        <path d="M-196.4,393.6c0.4-0.1,1.1-0.1,1.9-0.1c0.9,0,1.7,0.2,2.1,0.6c0.4,0.4,0.7,0.9,0.7,1.6    c0,0.7-0.2,1.2-0.6,1.6c-0.5,0.5-1.3,0.8-2.3,0.8c-0.3,0-0.5,0-0.8,0v3h-1L-196.4,393.6L-196.4,393.6z M-195.4,397.2    c0.2,0,0.5,0.1,0.8,0.1c1.2,0,1.9-0.6,1.9-1.6c0-1-0.7-1.5-1.8-1.5c-0.4,0-0.8,0-0.9,0.1V397.2z"></path>
                                        <path d="M-186.8,398.7l-0.8,2.4h-1l2.6-7.5h1.2l2.6,7.5h-1l-0.8-2.4C-184.2,398.7-186.8,398.7-186.8,398.7z     M-184.4,397.9l-0.7-2.2c-0.2-0.5-0.3-0.9-0.4-1.4h0c-0.1,0.4-0.2,0.9-0.4,1.3l-0.7,2.2H-184.4z"></path>
                                        <path d="M-177.9,393.6c0.5-0.1,1.2-0.1,1.9-0.1c1,0,1.7,0.2,2.2,0.6c0.4,0.3,0.6,0.9,0.6,1.4c0,1-0.6,1.7-1.4,1.9    v0c0.6,0.2,0.9,0.7,1.1,1.5c0.2,1,0.4,1.8,0.6,2.1h-1c-0.1-0.2-0.3-0.9-0.5-1.8c-0.2-1-0.6-1.4-1.5-1.5h-0.9v3.3h-1L-177.9,393.6    L-177.9,393.6z M-176.9,397h1c1,0,1.7-0.6,1.7-1.4c0-1-0.7-1.4-1.7-1.4c-0.4,0-0.8,0-0.9,0.1V397z"></path>
                                        <path d="M-168.5,393.5h1v3.6h0c0.2-0.3,0.4-0.5,0.6-0.8l2.3-2.8h1.2l-2.7,3.2l2.9,4.3h-1.2l-2.5-3.7l-0.7,0.8v2.9    h-1L-168.5,393.5L-168.5,393.5z"></path>
                                        <path d="M-159.3,399.8c0.4,0.3,1.1,0.5,1.7,0.5c1,0,1.6-0.5,1.6-1.3c0-0.7-0.4-1.1-1.4-1.5c-1.2-0.4-2-1.1-2-2.2    c0-1.2,1-2.1,2.4-2.1c0.8,0,1.3,0.2,1.7,0.4l-0.3,0.8c-0.2-0.1-0.8-0.4-1.4-0.4c-1,0-1.4,0.6-1.4,1.1c0,0.7,0.4,1,1.5,1.4    c1.3,0.5,1.9,1.1,1.9,2.2c0,1.2-0.9,2.2-2.6,2.2c-0.7,0-1.5-0.2-1.9-0.5L-159.3,399.8z"></path>
                                    </g>
                                </svg>
                            </a>
                            <div class="d-flex align-items-center currently_maintain hidden-xs  ml-auto d-md-none d-xl-none">
                                <span class="ml-1 mr-1">Currently:</span>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pixelwibes.com</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">pixelwibes.com</a>
                                        <a class="dropdown-item" href="javascript:void(0);">pixelwibes.in</a>
                                        <a class="dropdown-item" href="javascript:void(0);">wikipedia.org</a>
                                        <a class="dropdown-item" href="javascript:void(0);">https://themeforest.net/</a>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <div class="d-flex align-items-center currently_maintain hidden-xs mr-auto">
                                    <span class="ml-1 mr-1">Currently:</span>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pixelwibes.com</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">pixelwibes.com</a>
                                            <a class="dropdown-item" href="javascript:void(0);">pixelwibes.in</a>
                                            <a class="dropdown-item" href="javascript:void(0);">wikipedia.org</a>
                                            <a class="dropdown-item" href="javascript:void(0);">https://themeforest.net/</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="nav-link leading-none" data-toggle="dropdown" aria-expanded="false">
                                        <img class="avatar" src="assets/images/user.png" alt="user">
                                        <span class="ml-2 d-none d-lg-block">
                                            <span class="user_name">Katie Clark</span>
                                            <small class="d-block mt-1">Administrator</small>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow vivify flipInY" style="will-change: transform;">
                                        <a class="dropdown-item" href="#"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                        <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                        <a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-log-out"></i>
                                            Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="block-header py-lg-2 py-2">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <h4>eCommerce</h4>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i>
                                        Dashboard</a></li>
                                <li class="breadcrumb-item active">eCommerce</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <div class="d-flex flex-row-reverse">
                                <div class="page_action">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o mr-1" aria-hidden="true"></i>
                                        Export</button>
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-line-chart mr-1" aria-hidden="true"></i>Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex ">
                <div class="container-fluid">
                    <div class="row clearfix row-deck">
                        <div class="col-md-12 col-lg-12 col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Product Report</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="productinfo" style="min-height: 456px; width: 100%; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1639493045822"><div style="position: relative; width: 833px; height: 456px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="1041" height="570" style="position: absolute; left: 0px; top: 0px; width: 833px; height: 456px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; left: 253px; top: 112px; border-color: rgb(255, 255, 255); pointer-events: none; visibility: hidden; opacity: 0;"><div style="margin: 0px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><div style="font-size:14px;color:#666;font-weight:400;line-height:1;">2016</div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#80FFA5;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Orders Received</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">232</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#00DDFF;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Revenue</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">282</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#37A2FF;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Income</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">132</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#FF0087;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Total Sales</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">402</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#FFBF00;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">New User</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">302</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div></div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-tile">
                                        <a class="profile-tile-box" href="#">
                                            <div class="pt-avatar-w">
                                                <img alt="" src="assets/images/sm/avatar10.jpg">
                                                <span class="online bg-green"></span>
                                            </div>
                                            <div class="pt-user-name">Sue Grant</div>
                                        </a>
                                        <div class="profile-tile-meta">
                                            <ul>
                                                <li>Last Login:<strong>Online Now</strong></li>
                                                <li>Tickets:<strong><a href="#">12</a></strong></li>
                                                <li>Response Time:<strong>1 hours</strong></li>
                                            </ul>
                                            <div class="pt-btn"><a class="btn btn-primary btn-sm" href="#">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="profile-tile">
                                        <a class="profile-tile-box" href="#">
                                            <div class="pt-avatar-w">
                                                <img alt="" src="assets/images/sm/avatar9.jpg">
                                                <span class="online bg-green"></span>
                                            </div>
                                            <div class="pt-user-name">Lily Slater</div>
                                        </a>
                                        <div class="profile-tile-meta">
                                            <ul>
                                                <li>Last Login:<strong>Online Now</strong></li>
                                                <li>Tickets:<strong><a href="#">8</a></strong></li>
                                                <li>Response Time:<strong>2 hours</strong></li>
                                            </ul>
                                            <div class="pt-btn"><a class="btn btn-primary btn-sm" href="#">Send Message</a></div>
                                        </div>
                                    </div>
                                    <div class="profile-tile">
                                        <a class="profile-tile-box" href="#">
                                            <div class="pt-avatar-w">
                                                <img alt="" src="assets/images/sm/avatar6.jpg">
                                                <span class="offline bg-yellow"></span>
                                            </div>
                                            <div class="pt-user-name">Luke Walsh</div>
                                        </a>
                                        <div class="profile-tile-meta">
                                            <ul>
                                                <li>Last Login:<strong>Offline</strong></li>
                                                <li>Tickets:<strong><a href="#">6</a></strong></li>
                                                <li>Response Time:<strong>3 hours</strong></li>
                                            </ul>
                                            <div class="pt-btn">
                                                <a class="btn btn-primary btn-sm" href="#">Send Message</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-tile mb-0 border-bottom-0 pb-0">
                                        <a class="profile-tile-box" href="#">
                                            <div class="pt-avatar-w">
                                                <img alt="" src="assets/images/sm/avatar8.jpg">
                                                <span class="online bg-green"></span>
                                            </div>
                                            <div class="pt-user-name">Joseph Rees</div>
                                        </a>
                                        <div class="profile-tile-meta">
                                            <ul>
                                                <li>Last Login:<strong>Online Now</strong></li>
                                                <li>Tickets:<strong><a href="#">2</a></strong></li>
                                                <li>Response Time:<strong>10 hours</strong></li>
                                            </ul>
                                            <div class="pt-btn"><a class="btn btn-primary btn-sm" href="#">Send Message</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: END -->
                    <div class="row clearfix row-deck">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Product Average</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="columncharttest" style="min-height: 345px;"><div id="apexcharts07o3jxn3" class="apexcharts-canvas apexcharts07o3jxn3 light" style="width: 631px; height: 330px;"><svg id="SvgjsSvg2862" width="631" height="330" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2864" class="apexcharts-inner apexcharts-graphical" transform="translate(5.833333333333332, 58.60000038146973)"><defs id="SvgjsDefs2863"><linearGradient id="SvgjsLinearGradient2869" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2870" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2871" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2872" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask07o3jxn3"><rect id="SvgjsRect2884" width="556.1908206939697" height="229.39519900131222" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask07o3jxn3"><rect id="SvgjsRect2885" width="596.1908206939697" height="269.3951990013122" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient2890" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2891" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2892" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2893" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2895" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2896" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2897" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2898" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2900" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2901" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2902" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2903" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2905" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2906" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2907" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2908" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2910" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2911" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2912" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2913" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2915" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2916" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2917" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2918" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2920" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2921" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2922" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2923" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2925" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2926" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2927" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2928" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2930" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2931" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2932" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2933" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2935" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2936" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2937" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2938" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2940" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2941" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2942" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2943" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2945" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2946" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2947" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2948" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2950" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2951" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2952" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2953" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2955" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2956" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2957" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2958" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2960" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2961" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2962" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2963" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2965" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2966" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2967" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2968" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2970" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2971" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0"></stop><stop id="SvgjsStop2972" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop><stop id="SvgjsStop2973" stop-opacity="0.8" stop-color="rgba(245,85,85,0.8)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect2873" width="43.25928605397543" height="229.39519900131222" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient2869)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="229.39519900131222" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2975" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2976" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2977" font-family="Helvetica, Arial, sans-serif" x="61.79898007710775" y="258.3951990013122" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2978" style="font-family: Helvetica, Arial, sans-serif;">01:15:00</tspan><title>01:15:00</title></text><text id="SvgjsText2979" font-family="Helvetica, Arial, sans-serif" x="185.39694023132324" y="258.3951990013122" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2980" style="font-family: Helvetica, Arial, sans-serif;">01:25:00</tspan><title>01:25:00</title></text><text id="SvgjsText2981" font-family="Helvetica, Arial, sans-serif" x="308.99490038553864" y="258.3951990013122" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2982" style="font-family: Helvetica, Arial, sans-serif;">01:35:00</tspan><title>01:35:00</title></text><text id="SvgjsText2983" font-family="Helvetica, Arial, sans-serif" x="432.5928605397539" y="258.3951990013122" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2984" style="font-family: Helvetica, Arial, sans-serif;">01:45:00</tspan><title>01:45:00</title></text><text id="SvgjsText2985" font-family="Helvetica, Arial, sans-serif" x="556.1908206939693" y="258.3951990013122" text-anchor="middle" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2986" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text></g><line id="SvgjsLine2987" x1="-15" y1="230.39519900131222" x2="556.1908206939697" y2="230.39519900131222" stroke="" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG2996" class="apexcharts-grid"><g id="SvgjsG2997" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3003" x1="0" y1="0" x2="556.1908206939697" y2="0" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3004" x1="0" y1="45.87903980026245" x2="556.1908206939697" y2="45.87903980026245" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3005" x1="0" y1="91.7580796005249" x2="556.1908206939697" y2="91.7580796005249" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3006" x1="0" y1="137.63711940078736" x2="556.1908206939697" y2="137.63711940078736" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3007" x1="0" y1="183.5161592010498" x2="556.1908206939697" y2="183.5161592010498" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine3008" x1="0" y1="229.39519900131222" x2="556.1908206939697" y2="229.39519900131222" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2998" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2999" x1="61.79898007710775" y1="230.39519900131222" x2="61.79898007710775" y2="236.39519900131222" stroke="" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3000" x1="185.39694023132324" y1="230.39519900131222" x2="185.39694023132324" y2="236.39519900131222" stroke="" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3001" x1="308.99490038553864" y1="230.39519900131222" x2="308.99490038553864" y2="236.39519900131222" stroke="" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3002" x1="432.5928605397539" y1="230.39519900131222" x2="432.5928605397539" y2="236.39519900131222" stroke="" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine3010" x1="0" y1="229.39519900131222" x2="556.1908206939697" y2="229.39519900131222" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3009" x1="0" y1="1" x2="0" y2="229.39519900131222" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2887" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2888" class="apexcharts-series TotalxAverage" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M -648.1154269622461 229.39519900131222L -648.1154269622461 190.0703077439444L -604.8561409082707 190.0703077439444L -604.8561409082707 229.39519900131222L -648.1154269622461 229.39519900131222" fill="url(#SvgjsLinearGradient2890)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -648.1154269622461 229.39519900131222L -648.1154269622461 190.0703077439444L -604.8561409082707 190.0703077439444L -604.8561409082707 229.39519900131222L -648.1154269622461 229.39519900131222" pathFrom="M -551.5611587517411 229.39519900131222L -551.5611587517411 190.0703077439444L -508.3018726977657 190.0703077439444L -508.3018726977657 229.39519900131222L -551.5611587517411 229.39519900131222L -648.1154269622461 229.39519900131222L -604.8561409082707 229.39519900131222L -604.8561409082707 229.39519900131222L -648.1154269622461 229.39519900131222" cy="190.0703077439444" cx="-604.8561409082707" j="0" val="6" barHeight="39.32489125736781" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -586.3164468851384 229.39519900131222L -586.3164468851384 172.67304536765644L -543.057160831163 172.67304536765644L -543.057160831163 229.39519900131222L -586.3164468851384 229.39519900131222" fill="url(#SvgjsLinearGradient2895)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -586.3164468851384 229.39519900131222L -586.3164468851384 172.67304536765644L -543.057160831163 172.67304536765644L -543.057160831163 229.39519900131222L -586.3164468851384 229.39519900131222" pathFrom="M -489.76217867463333 229.39519900131222L -489.76217867463333 172.67304536765644L -446.5028926206579 172.67304536765644L -446.5028926206579 229.39519900131222L -489.76217867463333 229.39519900131222L -586.3164468851384 229.39519900131222L -543.057160831163 229.39519900131222L -543.057160831163 229.39519900131222L -586.3164468851384 229.39519900131222" cy="172.67304536765644" cx="-543.057160831163" j="1" val="8.654389393592304" barHeight="56.72215363365578" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -524.5174668080306 229.39519900131222L -524.5174668080306 147.64216339732764L -481.25818075405516 147.64216339732764L -481.25818075405516 229.39519900131222L -524.5174668080306 229.39519900131222" fill="url(#SvgjsLinearGradient2900)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -524.5174668080306 229.39519900131222L -524.5174668080306 147.64216339732764L -481.25818075405516 147.64216339732764L -481.25818075405516 229.39519900131222L -524.5174668080306 229.39519900131222" pathFrom="M -427.96319859752555 229.39519900131222L -427.96319859752555 147.64216339732764L -384.70391254355013 147.64216339732764L -384.70391254355013 229.39519900131222L -427.96319859752555 229.39519900131222L -524.5174668080306 229.39519900131222L -481.25818075405516 229.39519900131222L -481.25818075405516 229.39519900131222L -524.5174668080306 229.39519900131222" cy="147.64216339732764" cx="-481.25818075405516" j="2" val="12.47347921227895" barHeight="81.7530356039846" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -462.7184867309228 229.39519900131222L -462.7184867309228 117.65466151277586L -419.4592006769474 117.65466151277586L -419.4592006769474 229.39519900131222L -462.7184867309228 229.39519900131222" fill="url(#SvgjsLinearGradient2905)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -462.7184867309228 229.39519900131222L -462.7184867309228 117.65466151277586L -419.4592006769474 117.65466151277586L -419.4592006769474 229.39519900131222L -462.7184867309228 229.39519900131222" pathFrom="M -366.1642185204178 229.39519900131222L -366.1642185204178 117.65466151277586L -322.9049324664424 117.65466151277586L -322.9049324664424 229.39519900131222L -366.1642185204178 229.39519900131222L -462.7184867309228 229.39519900131222L -419.4592006769474 229.39519900131222L -419.4592006769474 229.39519900131222L -462.7184867309228 229.39519900131222" cy="117.65466151277586" cx="-419.4592006769474" j="3" val="17.04882590884738" barHeight="111.74053748853636" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -400.91950665381506 229.39519900131222L -400.91950665381506 86.67531636075194L -357.66022059983965 86.67531636075194L -357.66022059983965 229.39519900131222L -400.91950665381506 229.39519900131222" fill="url(#SvgjsLinearGradient2910)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -400.91950665381506 229.39519900131222L -400.91950665381506 86.67531636075194L -357.66022059983965 86.67531636075194L -357.66022059983965 229.39519900131222L -400.91950665381506 229.39519900131222" pathFrom="M -304.3652384433101 229.39519900131222L -304.3652384433101 86.67531636075194L -261.1059523893347 86.67531636075194L -261.1059523893347 229.39519900131222L -304.3652384433101 229.39519900131222L -400.91950665381506 229.39519900131222L -357.66022059983965 229.39519900131222L -357.66022059983965 229.39519900131222L -400.91950665381506 229.39519900131222" cy="86.67531636075194" cx="-357.66022059983965" j="4" val="21.7755032109065" barHeight="142.7198826405603" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -339.12052657670733 229.39519900131222L -339.12052657670733 59.28830615615348L -295.8612405227319 59.28830615615348L -295.8612405227319 229.39519900131222L -339.12052657670733 229.39519900131222" fill="url(#SvgjsLinearGradient2915)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -339.12052657670733 229.39519900131222L -339.12052657670733 59.28830615615348L -295.8612405227319 59.28830615615348L -295.8612405227319 229.39519900131222L -339.12052657670733 229.39519900131222" pathFrom="M -242.56625836620233 229.39519900131222L -242.56625836620233 59.28830615615348L -199.3069723122269 59.28830615615348L -199.3069723122269 229.39519900131222L -242.56625836620233 229.39519900131222L -339.12052657670733 229.39519900131222L -295.8612405227319 229.39519900131222L -295.8612405227319 229.39519900131222L -339.12052657670733 229.39519900131222" cy="59.28830615615348" cx="-295.8612405227319" j="5" val="25.954079577517653" barHeight="170.10689284515874" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -277.3215464995996 229.39519900131222L -277.3215464995996 39.90448036816019L -234.0622604456242 39.90448036816019L -234.0622604456242 229.39519900131222L -277.3215464995996 229.39519900131222" fill="url(#SvgjsLinearGradient2920)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -277.3215464995996 229.39519900131222L -277.3215464995996 39.90448036816019L -234.0622604456242 39.90448036816019L -234.0622604456242 229.39519900131222L -277.3215464995996 229.39519900131222" pathFrom="M -180.76727828909458 229.39519900131222L -180.76727828909458 39.90448036816019L -137.50799223511916 39.90448036816019L -137.50799223511916 229.39519900131222L -180.76727828909458 229.39519900131222L -277.3215464995996 229.39519900131222L -234.0622604456242 229.39519900131222L -234.0622604456242 229.39519900131222L -277.3215464995996 229.39519900131222" cy="39.90448036816019" cx="-234.0622604456242" j="6" val="28.911569121908183" barHeight="189.49071863315203" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -215.52256642249182 229.39519900131222L -215.52256642249182 31.963256248858585L -172.2632803685164 31.963256248858585L -172.2632803685164 229.39519900131222L -215.52256642249182 229.39519900131222" fill="url(#SvgjsLinearGradient2925)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -215.52256642249182 229.39519900131222L -215.52256642249182 31.963256248858585L -172.2632803685164 31.963256248858585L -172.2632803685164 229.39519900131222L -215.52256642249182 229.39519900131222" pathFrom="M -118.96829821198682 229.39519900131222L -118.96829821198682 31.963256248858585L -75.70901215801139 31.963256248858585L -75.70901215801139 229.39519900131222L -118.96829821198682 229.39519900131222L -215.52256642249182 229.39519900131222L -172.2632803685164 229.39519900131222L -172.2632803685164 229.39519900131222L -215.52256642249182 229.39519900131222" cy="31.963256248858585" cx="-172.2632803685164" j="7" val="30.123202344336548" barHeight="197.43194275245364" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -153.72358634538406 229.39519900131222L -153.72358634538406 37.2514075444989L -110.46430029140863 37.2514075444989L -110.46430029140863 229.39519900131222L -153.72358634538406 229.39519900131222" fill="url(#SvgjsLinearGradient2930)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -153.72358634538406 229.39519900131222L -153.72358634538406 37.2514075444989L -110.46430029140863 37.2514075444989L -110.46430029140863 229.39519900131222L -153.72358634538406 229.39519900131222" pathFrom="M -57.169318134879084 229.39519900131222L -57.169318134879084 37.2514075444989L -13.910032080903655 37.2514075444989L -13.910032080903655 229.39519900131222L -57.169318134879084 229.39519900131222L -153.72358634538406 229.39519900131222L -110.46430029140863 229.39519900131222L -110.46430029140863 229.39519900131222L -153.72358634538406 229.39519900131222" cy="37.2514075444989" cx="-110.46430029140863" j="8" val="29.316362026172992" barHeight="192.14379145681332" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -91.92460626827634 229.39519900131222L -91.92460626827634 55.447047058261546L -48.665320214300905 55.447047058261546L -48.665320214300905 229.39519900131222L -91.92460626827634 229.39519900131222" fill="url(#SvgjsLinearGradient2935)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -91.92460626827634 229.39519900131222L -91.92460626827634 55.447047058261546L -48.665320214300905 55.447047058261546L -48.665320214300905 229.39519900131222L -91.92460626827634 229.39519900131222" pathFrom="M 4.629661942228662 229.39519900131222L 4.629661942228662 55.447047058261546L 47.888947996204095 55.447047058261546L 47.888947996204095 229.39519900131222L 4.629661942228662 229.39519900131222L -91.92460626827634 229.39519900131222L -48.665320214300905 229.39519900131222L -48.665320214300905 229.39519900131222L -91.92460626827634 229.39519900131222" cy="55.447047058261546" cx="-48.665320214300905" j="9" val="26.540160145077607" barHeight="173.94815194305068" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M -30.125626191168585 229.39519900131222L -30.125626191168585 83.96755161010694L 13.133659862806844 83.96755161010694L 13.133659862806844 229.39519900131222L -30.125626191168585 229.39519900131222" fill="url(#SvgjsLinearGradient2940)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M -30.125626191168585 229.39519900131222L -30.125626191168585 83.96755161010694L 13.133659862806844 83.96755161010694L 13.133659862806844 229.39519900131222L -30.125626191168585 229.39519900131222" pathFrom="M 66.42864201933642 229.39519900131222L 66.42864201933642 83.96755161010694L 109.68792807331185 83.96755161010694L 109.68792807331185 229.39519900131222L 66.42864201933642 229.39519900131222L -30.125626191168585 229.39519900131222L 13.133659862806844 229.39519900131222L 13.133659862806844 229.39519900131222L -30.125626191168585 229.39519900131222" cy="83.96755161010694" cx="13.133659862806844" j="10" val="22.188640742490293" barHeight="145.42764739120528" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 31.673353885939164 229.39519900131222L 31.673353885939164 118.15881302728255L 74.9326399399146 118.15881302728255L 74.9326399399146 229.39519900131222L 31.673353885939164 229.39519900131222" fill="url(#SvgjsLinearGradient2945)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 31.673353885939164 229.39519900131222L 31.673353885939164 118.15881302728255L 74.9326399399146 118.15881302728255L 74.9326399399146 229.39519900131222L 31.673353885939164 229.39519900131222" pathFrom="M 128.22762209644415 229.39519900131222L 128.22762209644415 118.15881302728255L 171.4869081504196 118.15881302728255L 171.4869081504196 229.39519900131222L 128.22762209644415 229.39519900131222L 31.673353885939164 229.39519900131222L 74.9326399399146 229.39519900131222L 74.9326399399146 229.39519900131222L 31.673353885939164 229.39519900131222" cy="118.15881302728255" cx="74.9326399399146" j="11" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 122.97702102126047 229.39519900131222L 122.97702102126047 118.15881302728255L 166.2363070752359 118.15881302728255L 166.2363070752359 229.39519900131222L 122.97702102126047 229.39519900131222" fill="url(#SvgjsLinearGradient2950)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 122.97702102126047 229.39519900131222L 122.97702102126047 118.15881302728255L 166.2363070752359 118.15881302728255L 166.2363070752359 229.39519900131222L 122.97702102126047 229.39519900131222" pathFrom="M 219.53128923176547 229.39519900131222L 219.53128923176547 118.15881302728255L 262.7905752857409 118.15881302728255L 262.7905752857409 229.39519900131222L 219.53128923176547 229.39519900131222L 122.97702102126047 229.39519900131222L 166.2363070752359 229.39519900131222L 166.2363070752359 229.39519900131222L 122.97702102126047 229.39519900131222" cy="118.15881302728255" cx="166.2363070752359" j="12" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 215.57393481299536 229.39519900131222L 215.57393481299536 118.15881302728255L 258.8332208669708 118.15881302728255L 258.8332208669708 229.39519900131222L 215.57393481299536 229.39519900131222" fill="url(#SvgjsLinearGradient2955)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 215.57393481299536 229.39519900131222L 215.57393481299536 118.15881302728255L 258.8332208669708 118.15881302728255L 258.8332208669708 229.39519900131222L 215.57393481299536 229.39519900131222" pathFrom="M 312.12820302350036 229.39519900131222L 312.12820302350036 118.15881302728255L 355.3874890774758 118.15881302728255L 355.3874890774758 229.39519900131222L 312.12820302350036 229.39519900131222L 215.57393481299536 229.39519900131222L 258.8332208669708 229.39519900131222L 258.8332208669708 229.39519900131222L 215.57393481299536 229.39519900131222" cy="118.15881302728255" cx="258.8332208669708" j="13" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 309.32051563076476 229.39519900131222L 309.32051563076476 118.15881302728255L 352.5798016847402 118.15881302728255L 352.5798016847402 229.39519900131222L 309.32051563076476 229.39519900131222" fill="url(#SvgjsLinearGradient2960)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 309.32051563076476 229.39519900131222L 309.32051563076476 118.15881302728255L 352.5798016847402 118.15881302728255L 352.5798016847402 229.39519900131222L 309.32051563076476 229.39519900131222" pathFrom="M 405.87478384126973 229.39519900131222L 405.87478384126973 118.15881302728255L 449.13406989524515 118.15881302728255L 449.13406989524515 229.39519900131222L 405.87478384126973 229.39519900131222L 309.32051563076476 229.39519900131222L 352.5798016847402 229.39519900131222L 352.5798016847402 229.39519900131222L 309.32051563076476 229.39519900131222" cy="118.15881302728255" cx="352.5798016847402" j="14" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 404.09769743962 229.39519900131222L 404.09769743962 118.15881302728255L 447.3569834935954 118.15881302728255L 447.3569834935954 229.39519900131222L 404.09769743962 229.39519900131222" fill="url(#SvgjsLinearGradient2965)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 404.09769743962 229.39519900131222L 404.09769743962 118.15881302728255L 447.3569834935954 118.15881302728255L 447.3569834935954 229.39519900131222L 404.09769743962 229.39519900131222" pathFrom="M 500.65196565012496 229.39519900131222L 500.65196565012496 118.15881302728255L 543.9112517041004 118.15881302728255L 543.9112517041004 229.39519900131222L 500.65196565012496 229.39519900131222L 404.09769743962 229.39519900131222L 447.3569834935954 229.39519900131222L 447.3569834935954 229.39519900131222L 404.09769743962 229.39519900131222" cy="118.15881302728255" cx="447.3569834935954" j="15" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><path id="apexcharts-bar-area-0" d="M 499.8057778850368 229.39519900131222L 499.8057778850368 118.15881302728255L 543.0650639390122 118.15881302728255L 543.0650639390122 229.39519900131222L 499.8057778850368 229.39519900131222" fill="url(#SvgjsLinearGradient2970)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask07o3jxn3)" pathTo="M 499.8057778850368 229.39519900131222L 499.8057778850368 118.15881302728255L 543.0650639390122 118.15881302728255L 543.0650639390122 229.39519900131222L 499.8057778850368 229.39519900131222" pathFrom="undefinedL 499.8057778850368 229.39519900131222L 543.0650639390122 229.39519900131222L 543.0650639390122 229.39519900131222L 499.8057778850368 229.39519900131222" cy="118.15881302728255" cx="543.0650639390122" j="16" val="16.971904931056415" barHeight="111.23638597402967" barWidth="43.25928605397543"></path><g id="SvgjsG2889" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine3011" x1="0" y1="0" x2="556.1908206939697" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3012" x1="0" y1="0" x2="556.1908206939697" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3013" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3014" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3015" class="apexcharts-point-annotations"></g></g><text id="SvgjsText2865" font-family="Helvetica, Arial, sans-serif" x="10" y="14" text-anchor="start" dominant-baseline="auto" font-size="12px" fill="#555555" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Load Average</text><text id="SvgjsText2866" font-family="Helvetica, Arial, sans-serif" x="621" y="24" text-anchor="end" dominant-baseline="auto" font-size="22px" fill="#555555" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">20%</text><g id="SvgjsG2988" class="apexcharts-yaxis" rel="0" transform="translate(603.0241540273031, 0)"><g id="SvgjsG2989" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2990" font-family="Helvetica, Arial, sans-serif" x="-20" y="60.10000038146973" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">35.00</text><text id="SvgjsText2991" font-family="Helvetica, Arial, sans-serif" x="-20" y="106.07904018173218" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">28.00</text><text id="SvgjsText2992" font-family="Helvetica, Arial, sans-serif" x="-20" y="152.05807998199464" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">21.00</text><text id="SvgjsText2993" font-family="Helvetica, Arial, sans-serif" x="-20" y="198.0371197822571" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">14.00</text><text id="SvgjsText2994" font-family="Helvetica, Arial, sans-serif" x="-20" y="244.01615958251955" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">7.00</text><text id="SvgjsText2995" font-family="Helvetica, Arial, sans-serif" x="-20" y="289.995199382782" text-anchor="start" dominant-baseline="auto" font-size="11px" fill="#555555" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">0.00</text></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(252, 207, 49);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 672px; height: 366px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Inventory management </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="" style="position: relative;">
                                        <div id="progress1" style="min-height: 70px;"><div id="apexchartsa8vlh1f6" class="apexcharts-canvas apexchartsa8vlh1f6 light" style="width: 430px; height: 70px;"><svg id="SvgjsSvg3018" width="430" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3020" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 20)"><defs id="SvgjsDefs3019"><linearGradient id="SvgjsLinearGradient3024" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3025" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3026" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3027" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaska8vlh1f6"><rect id="SvgjsRect3029" width="430" height="50" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaska8vlh1f6"><rect id="SvgjsRect3030" width="470" height="90" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient3036" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop3037" stop-opacity="1" stop-color="rgba(245,85,85,1)" offset="0"></stop><stop id="SvgjsStop3038" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="0.5"></stop><stop id="SvgjsStop3039" stop-opacity="1" stop-color="rgba(252,207,49,1)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect3028" width="0" height="50" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient3024)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="50" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3043" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG3044" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(439, 0)"></g></g><g id="SvgjsG3041" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG3042" class="apexcharts-xaxis-texts-g" transform="translate(0, -8)"></g></g><g id="SvgjsG3045" class="apexcharts-grid"><line id="SvgjsLine3047" x1="0" y1="50" x2="430" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3046" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG3032" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3033" class="apexcharts-series CoffeexCup" rel="1" data:realIndex="0"><rect id="SvgjsRect3035" width="430" height="10" x="0" y="20" rx="0" ry="0" fill="#f1f1f1" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-backgroundBar"></rect><path id="apexcharts-bar-area-0" d="M0.1 20L296.8 20L296.8 30L0.1 30L0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20 " fill="url(#SvgjsLinearGradient3036)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaska8vlh1f6)" pathTo="M 0.1 20L 296.8 20L 296.8 30L 0.1 30L 0.1 20" pathFrom="M 0.1 20L 120.5 20L 120.5 30L 0.1 30L 0.1 20L 0.1 20L 0.1 30L 0.1 30L 0.1 30L 0.1 20" cy="70" cx="296.8" j="0" val="69" barHeight="10" barWidth="296.7"></path><g id="SvgjsG3034" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine3048" x1="0" y1="0" x2="430" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3049" x1="0" y1="0" x2="430" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3052" class="apexcharts-point-annotations"></g></g><text id="SvgjsText3021" font-family="Helvetica, Arial, sans-serif" x="0" y="21" text-anchor="start" dominant-baseline="auto" font-size="14px" fill="#555555" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Coffee Cup</text><text id="SvgjsText3022" font-family="Helvetica, Arial, sans-serif" x="420" y="22" text-anchor="end" dominant-baseline="auto" font-size="20px" fill="#555555" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">69%</text></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 431px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="mt-3" style="position: relative;">
                                        <div id="progress2" style="min-height: 70px;"><div id="apexcharts01qa0d5bi" class="apexcharts-canvas apexcharts01qa0d5bi light" style="width: 430px; height: 70px;"><svg id="SvgjsSvg3055" width="430" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3057" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 20)"><defs id="SvgjsDefs3056"><linearGradient id="SvgjsLinearGradient3061" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3062" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3063" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3064" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask01qa0d5bi"><rect id="SvgjsRect3066" width="430" height="50" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask01qa0d5bi"><rect id="SvgjsRect3067" width="470" height="90" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient3073" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop3074" stop-opacity="1" stop-color="rgba(23,234,217,1)" offset="0"></stop><stop id="SvgjsStop3075" stop-opacity="1" stop-color="rgba(96,120,234,1)" offset="0.5"></stop><stop id="SvgjsStop3076" stop-opacity="1" stop-color="rgba(96,120,234,1)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect3065" width="0" height="50" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient3061)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="50" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3080" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG3081" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(439, 0)"></g></g><g id="SvgjsG3078" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG3079" class="apexcharts-xaxis-texts-g" transform="translate(0, -8)"></g></g><g id="SvgjsG3082" class="apexcharts-grid"><line id="SvgjsLine3084" x1="0" y1="50" x2="430" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3083" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG3069" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3070" class="apexcharts-series HistoricalxBooks" rel="1" data:realIndex="0"><rect id="SvgjsRect3072" width="430" height="10" x="0" y="20" rx="0" ry="0" fill="#f1f1f1" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-backgroundBar"></rect><path id="apexcharts-bar-area-0" d="M0.1 20L430.1 20L430.1 30L0.1 30L0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20 " fill="url(#SvgjsLinearGradient3073)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask01qa0d5bi)" pathTo="M 0.1 20L 430.1 20L 430.1 30L 0.1 30L 0.1 20" pathFrom="M 0.1 20L 172.1 20L 172.1 30L 0.1 30L 0.1 20L 0.1 20L 0.1 30L 0.1 30L 0.1 30L 0.1 20" cy="70" cx="430.1" j="0" val="100" barHeight="10" barWidth="430"></path><g id="SvgjsG3071" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine3085" x1="0" y1="0" x2="430" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3086" x1="0" y1="0" x2="430" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3087" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3088" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3089" class="apexcharts-point-annotations"></g></g><text id="SvgjsText3058" font-family="Helvetica, Arial, sans-serif" x="0" y="21" text-anchor="start" dominant-baseline="auto" font-size="14px" fill="#555555" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Historical Books</text><text id="SvgjsText3059" font-family="Helvetica, Arial, sans-serif" x="420" y="22" text-anchor="end" dominant-baseline="auto" font-size="20px" fill="#555555" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">100%</text></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 431px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="mt-3" style="position: relative;">
                                        <div id="progress3" style="min-height: 70px;"><div id="apexchartsyu61xjxm" class="apexcharts-canvas apexchartsyu61xjxm light" style="width: 430px; height: 70px;"><svg id="SvgjsSvg3092" width="430" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3094" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 20)"><defs id="SvgjsDefs3093"><linearGradient id="SvgjsLinearGradient3098" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3099" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3100" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3101" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskyu61xjxm"><rect id="SvgjsRect3103" width="430" height="50" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskyu61xjxm"><rect id="SvgjsRect3104" width="470" height="90" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient3110" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop3111" stop-opacity="1" stop-color="rgba(245,51,161,1)" offset="0"></stop><stop id="SvgjsStop3112" stop-opacity="1" stop-color="rgba(193,51,170,1)" offset="0.5"></stop><stop id="SvgjsStop3113" stop-opacity="1" stop-color="rgba(193,51,170,1)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect3102" width="0" height="50" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient3098)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="50" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3117" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG3118" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(439, 0)"></g></g><g id="SvgjsG3115" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG3116" class="apexcharts-xaxis-texts-g" transform="translate(0, -8)"></g></g><g id="SvgjsG3119" class="apexcharts-grid"><line id="SvgjsLine3121" x1="0" y1="50" x2="430" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3120" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG3106" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3107" class="apexcharts-series TablexClock" rel="1" data:realIndex="0"><rect id="SvgjsRect3109" width="430" height="10" x="0" y="20" rx="0" ry="0" fill="#f1f1f1" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-backgroundBar"></rect><path id="apexcharts-bar-area-0" d="M0.1 20L395.70000000000005 20L395.70000000000005 30L0.1 30L0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20 " fill="url(#SvgjsLinearGradient3110)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskyu61xjxm)" pathTo="M 0.1 20L 395.70000000000005 20L 395.70000000000005 30L 0.1 30L 0.1 20" pathFrom="M 0.1 20L 56 20L 56 30L 0.1 30L 0.1 20L 0.1 20L 0.1 30L 0.1 30L 0.1 30L 0.1 20" cy="70" cx="395.70000000000005" j="0" val="92" barHeight="10" barWidth="395.6"></path><g id="SvgjsG3108" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine3122" x1="0" y1="0" x2="430" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3123" x1="0" y1="0" x2="430" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3124" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3125" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3126" class="apexcharts-point-annotations"></g></g><text id="SvgjsText3095" font-family="Helvetica, Arial, sans-serif" x="0" y="21" text-anchor="start" dominant-baseline="auto" font-size="14px" fill="#555555" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Table Clock</text><text id="SvgjsText3096" font-family="Helvetica, Arial, sans-serif" x="420" y="22" text-anchor="end" dominant-baseline="auto" font-size="20px" fill="#555555" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">92%</text></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 431px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
                                    <div class="mt-3" style="position: relative;">
                                        <div id="progress4" style="min-height: 70px;"><div id="apexchartshjj8vems" class="apexcharts-canvas apexchartshjj8vems light" style="width: 430px; height: 70px;"><svg id="SvgjsSvg3129" width="430" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG3131" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 20)"><defs id="SvgjsDefs3130"><linearGradient id="SvgjsLinearGradient3135" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3136" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3137" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3138" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskhjj8vems"><rect id="SvgjsRect3140" width="430" height="50" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskhjj8vems"><rect id="SvgjsRect3141" width="470" height="90" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient3147" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop3148" stop-opacity="1" stop-color="rgba(99,174,253,1)" offset="0"></stop><stop id="SvgjsStop3149" stop-opacity="1" stop-color="rgba(135,87,231,1)" offset="0.5"></stop><stop id="SvgjsStop3150" stop-opacity="1" stop-color="rgba(135,87,231,1)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect3139" width="0" height="50" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient3135)" opacity="1" stroke-width="0" stroke-dasharray="3" class="apexcharts-xcrosshairs" y2="50" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3154" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG3155" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(439, 0)"></g></g><g id="SvgjsG3152" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG3153" class="apexcharts-xaxis-texts-g" transform="translate(0, -8)"></g></g><g id="SvgjsG3156" class="apexcharts-grid"><line id="SvgjsLine3158" x1="0" y1="50" x2="430" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine3157" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG3143" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3144" class="apexcharts-series DoorxStand" rel="1" data:realIndex="0"><rect id="SvgjsRect3146" width="430" height="10" x="0" y="20" rx="0" ry="0" fill="#f1f1f1" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-backgroundBar"></rect><path id="apexcharts-bar-area-0" d="M0.1 20L421.50000000000006 20L421.50000000000006 30L0.1 30L0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20C0.1 20 0.1 20 0.1 20 " fill="url(#SvgjsLinearGradient3147)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhjj8vems)" pathTo="M 0.1 20L 421.50000000000006 20L 421.50000000000006 30L 0.1 30L 0.1 20" pathFrom="M 0.1 20L 279.6 20L 279.6 30L 0.1 30L 0.1 20L 0.1 20L 0.1 30L 0.1 30L 0.1 30L 0.1 20" cy="70" cx="421.50000000000006" j="0" val="98" barHeight="10" barWidth="421.40000000000003"></path><g id="SvgjsG3145" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine3159" x1="0" y1="0" x2="430" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3160" x1="0" y1="0" x2="430" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3161" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3162" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3163" class="apexcharts-point-annotations"></g></g><text id="SvgjsText3132" font-family="Helvetica, Arial, sans-serif" x="0" y="21" text-anchor="start" dominant-baseline="auto" font-size="14px" fill="#555555" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Door Stand</text><text id="SvgjsText3133" font-family="Helvetica, Arial, sans-serif" x="420" y="22" text-anchor="end" dominant-baseline="auto" font-size="20px" fill="#555555" class="apexcharts-subtitle-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">98%</text></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 431px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: END -->
                    <div class="row clearfix row-deck">
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">New Customer Ratings </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled c_review">
                                        <li>
                                            <div class="c_avatar">
                                                <img class="rounded" src="assets/images/sm/avatar1.jpg" alt="user">
                                            </div>
                                            <div class="c_comment">
                                                <div class="badge badge-info">Books</div>
                                                <span class="ml-10">
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-muted"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 21, 2020</small>
                                                <h6 class="c_name mt-1">Luke Walsh</h6>
                                                <p class="c_msg mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla
                                                    vel metus scelerisque ante sollicitudin commodo.</p>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="c_avatar">
                                                <img class="rounded" src="assets/images/sm/avatar4.jpg" alt="user">
                                            </div>
                                            <div class="c_comment">
                                                <div class="badge badge-info">Clock</div>
                                                <span class="ml-10">
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-muted"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-muted"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star-o text-muted"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Jan 18, 2021</small>
                                                <h6 class="c_name mt-1">Joseph Rees</h6>
                                                <p class="c_msg mb-0">It is a long established fact that a reader will
                                                    be distracted by the readable content of a page when looking at its
                                                    layout</p>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="c_avatar">
                                                <img class="rounded" src="assets/images/sm/avatar8.jpg" alt="user">
                                            </div>
                                            <div class="c_comment">
                                                <div class="badge badge-info">Wallet</div>
                                                <span class="ml-10">
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="javascript:void(0);"><i class="fa fa-star text-warning"></i></a>
                                                </span>
                                                <small class="comment-date float-sm-right">Dec 28, 2020</small>
                                                <h6 class="c_name mt-1">Sue Grant</h6>
                                                <p class="c_msg mb-0">Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-12">
                            <div class="card product_item_list product-order-list">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Order</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter text-nowrap card-table table_custom">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Name</th>
                                                    <th data-breakpoints="sm xs">Order ID</th>
                                                    <th>Image</th>
                                                    <th>Product Name</th>
                                                    <th data-breakpoints="xs">Amount</th>
                                                    <th>Date</th>
                                                    <th data-breakpoints="xs md">Status</th>
                                                    <th data-breakpoints="sm xs md">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Olivia Wilson</td>
                                                    <td>#291989</td>
                                                    <td><img src="assets/images/ecommerce/12.png" width="48" alt="Product img"></td>
                                                    <td>
                                                        <h6>Coffee Cup</h6>
                                                    </td>
                                                    <td>$4.00</td>
                                                    <td>01-05-2020</td>
                                                    <td><span class="badge badge-success bg-success text-white">Paid</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Luke Walsh</td>
                                                    <td>#291990</td>
                                                    <td><img src="assets/images/ecommerce/13.png" width="48" alt="Product img"></td>
                                                    <td>
                                                        <h6>Historical Books </h6>
                                                    </td>
                                                    <td>$27.00</td>
                                                    <td>7-05-2020</td>
                                                    <td><span class="badge badge-danger bg-danger text-white">Failed</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ruth Young</td>
                                                    <td>#291991</td>
                                                    <td><img src="assets/images/ecommerce/14.png" width="48" alt="Product img"></td>
                                                    <td>
                                                        <h6>Table Clock</h6>
                                                    </td>
                                                    <td>$12.00</td>
                                                    <td>09-05-2020</td>
                                                    <td><span class="badge badge-success bg-success text-white">Paid</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Joseph Rees</td>
                                                    <td>#291992</td>
                                                    <td><img src="assets/images/ecommerce/15.png" width="48" alt="Product img"></td>
                                                    <td>
                                                        <h6>Door Stand</h6>
                                                    </td>
                                                    <td>$9.00</td>
                                                    <td>14-05-2020</td>
                                                    <td><span class="badge badge-warning bg-warning text-white">Pending</span>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-default"><i class="icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: END -->
                    <div class="row clearfix row-deck">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Top Sell Product</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1144px, 0px, 0px); transition: all 0s ease 0s; width: 4290px;"><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/15.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 5
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Door Stand</a>
                                                        <span class="d-block">$9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/16.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Wall Clock</a>
                                                        <span class="d-block">$38</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/17.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Multipurpose Bag</a>
                                                        <span class="d-block">$48</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/18.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Wallet</a>
                                                        <span class="d-block">$38</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/12.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.1
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Coffee Cup</a>
                                                        <span class="d-block">$4</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/13.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.2
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Historical Books </a>
                                                        <span class="d-block">$27</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/14.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.4
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Table Clock</a>
                                                        <span class="d-block">$12</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/15.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 5
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Door Stand</a>
                                                        <span class="d-block">$9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/16.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Wall Clock</a>
                                                        <span class="d-block">$38</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/17.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Multipurpose Bag</a>
                                                        <span class="d-block">$48</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/18.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.3
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Wallet</a>
                                                        <span class="d-block">$38</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/12.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.1
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Coffee Cup</a>
                                                        <span class="d-block">$4</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/13.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.2
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Historical Books </a>
                                                        <span class="d-block">$27</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/14.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 4.4
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Table Clock</a>
                                                        <span class="d-block">$12</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item cloned" style="width: 276px; margin-right: 10px;"><div class="items sales_person">
                                            <div class="text-center">
                                                <img src="assets/images/ecommerce/15.png" alt="profile">
                                                <div class="sr-star">
                                                    <i class="fa fa-star"></i> 5
                                                </div>
                                                <div class="mb-1 sales-info">
                                                    <div class="per-info">
                                                        <a href="#">Door Stand</a>
                                                        <span class="d-block">$9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row: END -->
                </div>
            </div>

            <!-- Body: Footer -->
            <div class="body-footer d-flex ">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="card mb-3 border-0">
                                <div class="card-body">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col">
                                            <p class="font-size-sm mb-0">©Vsparks. <span class="d-none d-sm-inline-block">2021 pixelwibes.</span></p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="d-flex justify-content-end">
                                                <!-- List Dot -->
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a class="list-separator-link" href="http://www.PixelWibes.com" target="_blank">About</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="list-separator-link" href="http://www.PixelWibes.com" target="_blank">Hire us</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="list-separator-link" href="http://www.PixelWibes.com" target="_blank">Template</a>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a class="list-separator-link" href="#">License</a>
                                                    </li>
                                                </ul>
                                                <!-- End List Dot -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- js -->
	<script src="/vendors/scripts/core.js"></script>
	<script src="/vendors/scripts/script.min.js"></script>
	<script src="/vendors/scripts/process.js"></script>
	<script src="/vendors/scripts/layout-settings.js"></script>
	<script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="/vendors/scripts/apexcharts-setting.js"></script>



	<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<!-- switchery js -->
	<script src="../src/plugins/switchery/switchery.min.js"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="../src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="../src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="../vendors/scripts/advanced-components.js"></script>
	<script src="../vendors/scripts/apexcharts-setting.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>

</body>
</html>


