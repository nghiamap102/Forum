@extends('layoutADMIN')
@section('content')

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
	<!-- js -->
	<script src="/vendors/scripts/core.js"></script>
	<script src="/vendors/scripts/script.min.js"></script>
	<script src="/vendors/scripts/process.js"></script>
	<script src="/vendors/scripts/layout-settings.js"></script>
	<script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="/vendors/scripts/apexcharts-setting.js"></script>


@endsection
