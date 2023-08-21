<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin Panel</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link href="{{asset('public/')}}/backend/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="{{asset('public/')}}/backend/css/font-awesome.min.css" type="text/css" rel="stylesheet">

		<!-- text fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link href="{{asset('public/')}}/backend/css/custom-admin.css" type="text/css" rel="stylesheet">

		<!-- ace styles -->
		<link href="{{asset('public/')}}/backend/css/ace.min.css" type="text/css" rel="stylesheet">
		<link href="{{asset('public/')}}/backend/css/ace-rtl.min.css" type="text/css" rel="stylesheet">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>

	<script type="text/javascript">
		function validate(){
		    
		    if( document.login_panel.login_type.value == "-1" ){

		    	alert( "Please Select Login Type!" );
		    	return false;
		    }
		    return( true );
		}
	</script>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Welcome to GECC</span>
								</h1>
								<h4 class="blue" id="id-company-text">Control Panel</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter your Information
											</h4>
											@if($errors->any())
                        @foreach($errors->all() as $error)
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $error }}</strong>
                          </span>
                        @endforeach
                      @endif

                      @if(Session::has('message'))
                          <div class="alert alert-block alert-success">
                              <button type="button" class="close" data-dismiss="alert">
                                  <i class="ace-icon fa fa-times"></i>
                              </button>
                              <i class="ace-icon fa fa-check green"></i>
                              {{ Session::get("message") }}
                              {{ Session::forget('message') }}
                          </div>
                      @endif

											<div class="space-6"></div>

											<form name="login_panel" id="login_panel" action="{{ url('checkAuthentication') }}" method="post" onsubmit="return(validate());">
                      @csrf
												<fieldset>
													{{-- <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<select id="login_type" class="form-control" name="login_type">
																<option value="-1" disabled="disabled" selected="selected">Select Login </option>
																<option value="1" >Admin login</option>
																<option value="2" >Others</option>
															</select>
														</span>
													</label> --}}

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="email" value="" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>
                          @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                            <a href="javascript:void(0)" id="password_text"><i class="fa fa-eye"></i></a>
													</label>
                          @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif

													<div class="space"></div>

													<div class="clearfix">
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div style="float:right;">
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													{{-- Forget Password
													<i class="ace-icon fa fa-arrow-right"></i> --}}
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<!--[if !IE]> -->
		<script src="{{asset('public/')}}/backend/js/jquery.min.js" type="text/javascript"></script>
		<!-- <![endif]-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo asset('public/backend/js/jquery.min.js'); ?>'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo asset('assets/backend/js/jquery.mobile.custom.min.js'); ?>'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});

      $(document).ready(function(){
            
            $("#password_text").on("click",function(){
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            });
        });

		</script>

	</body>
</html>