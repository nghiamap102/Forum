@extends('layoutADMIN')
@section('content')
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
								<button class="btn btn-primary">Search</button>
							</form>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								<th scope="col">Tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td>
									<a href="add" type="button">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<a href="delete">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td>
									<a href="add" type="button">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<a href="delete">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
								</td>							
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td>
									<a href="add" type="button">
										<span class="material-icons-outlined">
										build
										</span>
									</a>
									<a href="delete" type="">
										<span class="material-icons-outlined">
										delete
										</span>
									</a>
									
								</td>
							</tr>
						</tbody>
					</table>
					<a href="add-blog" class="btn btn-primary">ADD BLOG</a>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
@endsection
