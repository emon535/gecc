<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title')</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link href="{{ asset('public') }}/backend/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="{{ asset('public') }}/backend/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> 
		<link href="{{ asset('public') }}/backend/css/custom-admin.css" type="text/css" rel="stylesheet" />
		<link href="<?php //echo base_url()."css/menu-style.css"; ?>" type="text/css" rel="stylesheet" />
		
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/chosen.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/datepicker.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/daterangepicker.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/colorpicker.css" />
		<link rel="stylesheet" href="{{ asset('public') }}/backend/css/select2.css" />
		
		<link rel="shortcut icon" href="{{ asset('public') }}/backend/img/favicon.png" />
		
		<!-- ace styles -->
		<link href="{{ asset('public') }}/backend/css/ace.min.css" type="text/css" rel="stylesheet">
		<link href="{{ asset('public') }}/backend/css/ace-skins.min.css" type="text/css" rel="stylesheet">
		<link href="{{ asset('public') }}/backend/css/ace-rtl.min.css" type="text/css" rel="stylesheet">
		<link href="{{ asset('public') }}/backend/css/style.css" type="text/css" rel="stylesheet">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="{{ asset('public/dt_picker/jquery.datepick.css') }}" type="text/css" rel="stylesheet">

		<!-- ace settings handler -->
		<script src="{{ asset('public') }}/backend/js/jquery.min.js" type="text/javascript"></script>
		<script src="{{ asset('public') }}/backend/js/ace-extra.min.js"></script>

		<script src="{{ asset('public/dt_picker/jquery.plugin.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/dt_picker/jquery.datepick.js') }} " type="text/javascript"></script>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<?php
				//$user_data = $this->session->userdata('name');
				//$user_photo = $this->session->userdata('image');
			?>
			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							GECC
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									Notifications
								</li>
								<li>
									<a href="#" data-panel-id="1" onclick="selectid3(this)" >
										<i class="btn btn-xs btn-primary fa fa-bell-o"></i>
									</a>
								</li>
								
								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<script>
							function selectid3(x){

					        	$("#myModalLabel").html("Notice Details");

					            btn = $(x).data('panel-id');

					            $.ajax({
					                type:'POST',
					                url:'<?php echo url("Notice/get_details") ?>',
					                data:{id:btn},
					                cache: false,
					                success:function(data) {

					                    $('.modal-body').html(data);

					                }
					            });
					            $("#myModal").modal();
					        }	
						</script>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									 Messages
								</li>

									<li class="dropdown-content">
										<ul class="dropdown-menu dropdown-navbar">
											<li>
												<a href="#" data-panel-id="1" onclick="selectid2(this)">
													<i class="btn btn-xs btn-primary fa fa-envelope"></i>
													<span class="msg-body">
														<span class="msg-title">
															<span class="blue">
																demo
															</span>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</li>

								<li class="dropdown-footer">
									<a href="<?php echo url('User/get_feedback');?>">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<script>	
							function selectid2(x){

					        	$("#myModalLabel").html("Feedback Details");

					            btn = $(x).data('panel-id');

					            $.ajax({
					                type:'POST',
					                url:'<?php echo url("User/feedback_details")?>',
					                data:{id:btn},
					                cache: false,
					                success:function(data) {

					                    $('.modal-body').html(data);

					                }
					            });
					            $("#myModal").modal();
					        }
						</script>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								@php 
				                    $userID = logged_in_user_id();
				                    $user = DB::table('users')->where('id', $userID)->first();
				                    @endphp
				                    @if($user->image == NULL)
				                      {{ Str::substr(logged_in_user_name(), 0,1 ) }}
				                    @else
				                      <img class="nav-user-photo" src="{{ asset($user->image) }}" alt="" />
				                @endif
								
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							
								<li>
									<a href="{{ url('editProfile/'.$userID) }}">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="{{ url('changePassword/'.$userID) }}">
										<i class="fa fa-cog"></i>
										Change Password
									</a>
								</li>
								<li>
									<a href="{{ URL::to('logout') }}">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<!-- sidebar -->
        @include('admin.layout.template_left')
        <!-- //sidebar -->
        <!-- main panel -->
        @yield('content')
        <!-- main-panel ends -->

		@include('admin.layout.template_footer')

