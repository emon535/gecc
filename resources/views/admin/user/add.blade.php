@extends('admin.layout.default')

@section('title')
    Manage User
@endsection

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<i class="fa fa-refresh"></i>&nbsp;								
				<h4 class="widget-title lighter">Create User</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="user" class="form-horizontal" id="user-submit" action="{{ url('save-user') }}" method="post" enctype="multipart/form-data" autocomplete="off">
								@csrf

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Role</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<select class="col-xs-12 col-sm-4" name="role_id">
												<option value="0">select group</option>
												@foreach($roles as $role)
	                                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
	                                            @endforeach
											</select>
											&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><span class="text-danger">{{ $errors->has('role_id') ? $errors->first('role_id') : '' }}</span></div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Name</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="name" class="col-xs-12 col-sm-4" required="required" value="" autocomplete="off" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('name') ? $errors->first('name') : '' }}</div>
									</div>
								</div>
										
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="password" name="password" id="password" class="col-xs-12 col-sm-4" value="" autocomplete="off" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('password') ? $errors->first('password') : '' }}</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="confirm-password">Confirm password</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="password" name="confirm_password" id="confirm-password" class="col-xs-12 col-sm-4" value="" onkeyup="checkPass(); return false;" autocomplete="off" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : '' }}</div>
										<span id="confirmMessage" class="confirmMessage"></span>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="email" name="email" id="email" class="col-xs-12 col-sm-4" required="required" value="" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block" id="email-exists">{{ $errors->has('email') ? $errors->first('email') : '' }}</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="contact">Mobile No</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="number" name="phone" id="phone" class="col-xs-12 col-sm-4" required="required" value="" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</div>
									</div>
								</div>


								<!-- <div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">Address</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<textarea name="address" cols="25" rows="5" required="required" id="address" class="col-xs-12 col-sm-4"></textarea>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
									</div>
								</div> -->

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Photo</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="image" id="image" value="" />Max File Size less than 1MB and dimention 250x280
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-offset-1 col-md-9">
										<button class="btn btn-sm btn-info" type="submit">
											<i class="ace-icon fa fa-check"></i>
											Save
										</button>
										&nbsp; &nbsp;
										<button class="btn btn-sm cancel" type="button">
											<i class="ace-icon fa fa-times"></i>
											Cancle
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>	
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function checkPass(){
        var password = document.getElementById('password');
        var confirm_password = document.getElementById('confirm_password');
        var message = document.getElementById('confirmMessage');
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        if(password.value == confirm_password.value){
            confirm_password.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Password Match!"
        }else{
            confirm_password.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Password Does Not Match!"
        }
    }

</script>
@endsection