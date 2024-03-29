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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	

	<link rel="stylesheet" type="text/css" href="/css/index.css">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
	<style>
	

	.modal-confirm,.modal-confirm-update{
    z-index: 100;
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    padding-top: 120px;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
}
.model-box{
    margin: auto;
    background-color: #fff;
    position: relative;
    padding: 15px;
    outline: 0;
    width: 600px;
    border-radius: 20px;
}
.box-footer{
    text-align: right;
}
.btn-wrapper{
    display: inline-block;
}
.btn-wrapper button{
    width: auto;
    display: inline;
}
.acept-btn{
	background-color: #4972dc;
	color: white;
}
	</style>
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
	</div>s

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
						<a href="admin_blog.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Blog</span>
						</a>
					</li>
					<li>
						<a href="admin_user.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">User</span>
						</a>
					</li>
					<li>
						<a href="admin_tag.php"class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Tag</span>
						</a>
					</li>
                    <li>
						<a href="admin_comment.php"class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Comment</span>
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
								<h4>Basic Tables</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
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
				<!-- basic table  Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-blue h4">Basic Table</h4>
							<p>Add class <code>.table</code></p>
						</div>
						<div class="pull-right">
							<form action="" class="d-flex">
								<input type="text" placeholder="Nhập từ khóa" class="form-control">
							</form>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Created Date</th>
								<th scope="col">User</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td>
									<a href="javascript:;" type="button" class="fix">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<div class="modal-confirm-update">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<div class="form-group">
														<label for="username" class="font-20" style="font-weight: 600;">Username</label>	
														<input type="text" name="" value="admin" id="username" class="form-control">
													</div>
													<div class="form-group">
														<label for="password" class="font-20" style="font-weight: 600;">Password</label>	
														<input type="text" name="" value="password" id="password" class="form-control">
													</div>
													<div class="form-group">
														<label for="email" class="font-20" style="font-weight: 600;">Email</label>	
														<input type="text" name="" value="email" id="email"  class="form-control">
													</div>
													<div class="form-group">
														<label for="nickname" class="font-20" style="font-weight: 600;">Nickname</label>	
														<input type="text" name="" value="nickname" id="nickname"  class="form-control">
													</div>
													<div class="form-group">
														<label for="role" class="font-20" style="font-weight: 600;">Role</label>	
														<select name="role" id="role" class="form-control">
															<option value="">admin</option>
															<option value="">staff</option>
															<option value="">user</option>
														</select>
													</div>
													<div class="form-group">
														<label for="sex" class="font-20" style="font-weight: 600;">Sex</label>	
														<select name="sex" id="sex" class="form-control">
															<option value="">Male</option>
															<option value="">Female</option>
															<option value="">Other</option>
														</select>													
													</div>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<!-- truyền id của mỗi blog dô đây -->
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<a href="javascript:;" class="garbage">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
									<div class="modal-confirm">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<!-- truyền id của mỗi blog dô đây -->
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<p class="font-20" style="font-weight: 600;">Bạn có đồng ý xóa hay không?</p>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>								
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td>
									<a href="javascript:;" type="button" class="fix">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<div class="modal-confirm-update">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<div class="form-group">
														<label for="username" class="font-20" style="font-weight: 600;">Username</label>	
														<input type="text" name="" value="admin" id="username" class="form-control">
													</div>
													<div class="form-group">
														<label for="password" class="font-20" style="font-weight: 600;">Password</label>	
														<input type="text" name="" value="password" id="password" class="form-control">
													</div>
													<div class="form-group">
														<label for="email" class="font-20" style="font-weight: 600;">Email</label>	
														<input type="text" name="" value="email" id="email"  class="form-control">
													</div>
													<div class="form-group">
														<label for="nickname" class="font-20" style="font-weight: 600;">Nickname</label>	
														<input type="text" name="" value="nickname" id="nickname"  class="form-control">
													</div>
													<div class="form-group">
														<label for="role" class="font-20" style="font-weight: 600;">Role</label>	
														<select name="role" id="role" class="form-control">
															<option value="">admin</option>
															<option value="">staff</option>
															<option value="">user</option>
														</select>
													</div>
													<div class="form-group">
														<label for="created" class="font-20" style="font-weight: 600;">created</label>	
														<input type="date" name="" value="created" id="created" disabled class="form-control">
													</div>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<!-- truyền id của mỗi blog dô đây -->
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<a href="javascript:;" class="garbage">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
									<div class="modal-confirm">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<!-- truyền id của mỗi blog dô đây -->
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<p class="font-20" style="font-weight: 600;">Bạn có đồng ý xóa hay không?</p>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>																	
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td>
									<a href="javascript:;" type="button" class="fix">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<div class="modal-confirm-update">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<div class="form-group">
														<label for="user-select2" class="font-20" style="font-weight: 600;">Người Đăng</label>	
														<select name="" id="user-select2" class="form-control">
															<option value="">ABC</option>
															<option value="">ABC</option>
															<option value="">ABC</option>
														</select>
														</div>
														<div class="form-group">
														<label for="tag-select2" class="font-20" style="font-weight: 600;">Chủ đề</label>	
															<select name="" id="tag-select2" class="form-control">
															<option value="">ABC</option>
															<option value="">ABC</option>
															<option value="">ABC</option>
														</select>
														</div>
														<div class="form-group">
														<label for="content-input2" class="font-20" style="font-weight: 600;">Nội dung</label>	
														<textarea class="form-control" id="content-input2" name="content" value="" placeholder="Nhập Nội Dung"></textarea>									
													</div>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<!-- truyền id của mỗi blog dô đây -->
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<a href="javascript:;" class="garbage">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
									<div class="modal-confirm">
										<div class="model-box">
											<div class="box-wrapper">
												<h3 class="box-header">
													<!-- truyền id của mỗi blog dô đây -->
													<span id="close2"  class="close"><i class="fas fa-times"></i></span>
												</h3>
												<div class="box-body mb-2">	
													<p class="font-20" style="font-weight: 600;">Bạn có đồng ý xóa hay không?</p>
												</div>
												<div class="box-footer">
													<div class="btn-wrapper">
														<button type="submit" class="acept-btn form-control">Đồng ý</button>
														<button type="submit" class="close-btn form-control">Hủy bỏ</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>								
							</tr>
						</tbody>
					</table>
					<input type="button" class="btn btn-primary mt-2 garbage" value="ADD USER" />
					<div class="modal-confirm">
						<div class="model-box">
							<div class="box-wrapper">
								<h3 class="box-header">
									<!-- truyền id của mỗi blog dô đây -->
									<span id="close2"  class="close"><i class="fas fa-times"></i></span>
								</h3>
								<div class="box-body mb-2">
									<div class="form-group">
										<label for="username" class="font-20" style="font-weight: 600;">Username</label>	
										<input type="text" name="" value="admin" id="username" class="form-control">
									</div>
									<div class="form-group">
										<label for="password" class="font-20" style="font-weight: 600;">Password</label>	
										<input type="text" name="" value="password" id="password" class="form-control">
									</div>
									<div class="form-group">
										<label for="email" class="font-20" style="font-weight: 600;">Email</label>	
										<input type="text" name="" value="email" id="email"  class="form-control">
									</div>
									<div class="form-group">
										<label for="nickname" class="font-20" style="font-weight: 600;">Nickname</label>	
										<input type="text" name="" value="nickname" id="nickname"  class="form-control">
									</div>
									<div class="form-group">
										<label for="sex" class="font-20" style="font-weight: 600;">Sex</label>	
										<select name="sex" id="sex" class="form-control">
											<option value="">Male</option>
											<option value="">Female</option>
											<option value="">Other</option>
										</select>													
									</div>
									<div class="form-group">
										<label for="role" class="font-20" style="font-weight: 600;">Role</label>	
										<select name="role" id="role" class="form-control">
											<option value="">admin</option>
											<option value="">staff</option>
											<option value="">user</option>
										</select>
									</div>
									
								</div>
								<div class="box-footer">
									<div class="btn-wrapper">
										<button type="submit" class="acept-btn form-control">Đồng ý</button>
										<button type="submit" class="close-btn form-control">Hủy bỏ</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
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

	<script>
		var a = document.querySelectorAll('.garbage')
		var b = document.querySelectorAll('.modal-confirm')
		var c = document.querySelectorAll('.modal-confirm .close')
		var d = document.querySelectorAll('.modal-confirm .close-btn')
		var e = document.querySelectorAll('.modal-confirm-update')
		var f = document.querySelectorAll('.fix')
		var g = document.querySelectorAll('.modal-confirm-update .close-btn')
		var x = document.querySelectorAll('.modal-confirm-update .close')

		for(let i = 0 ; i <a.length ; i++){
			
			$(a[i]).on('click' , function(){
				$(b[i]).fadeIn()
			})
			$(c[i]).on('click' , function(){
				$(b[i]).fadeOut()
			})
			$(d[i]).on('click' , function(){
				$(b[i]).fadeOut()
			})
			$(f[i]).on('click' , function(){
				$(e[i]).fadeIn()
			})
			$(g[i]).on('click' , function(){
				$(e[i]).fadeOut()
			})
			$(x[i]).on('click' , function(){
				$(e[i]).fadeOut()
			})
		}
	</script>
</body>
</html>
