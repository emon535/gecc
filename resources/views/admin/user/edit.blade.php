@extends('admin.layout.default')

@section('title')
    Update Your Profile
@endsection

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<i class="fa fa-refresh"></i>&nbsp;								
				<h4 class="widget-title lighter">
					Update User
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="user" class="form-horizontal" id="user-submit" action="{{ url('updateUser') }}" method="post" enctype="multipart/form-data" autocomplete="off">
							@csrf

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="last-name">Name</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="name" class="col-xs-12 col-sm-4" required="required" value="<?php echo $userByID->name; ?>" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('name') ? $errors->first('name') : '' }}</div>
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="email" name="email" id="email" class="col-xs-12 col-sm-4" required="required" value="<?php echo $userByID->email; ?>" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block" id="email-exists">{{ $errors->has('email') ? $errors->first('email') : '' }}</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="contact">Mobile No</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="number" name="phone" id="phone" class="col-xs-12 col-sm-4" required="required" value="<?php echo $userByID->phone; ?>" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</div>
									</div>
								</div>				
										
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo"></label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<img height="50" width="60" src="{{ asset($userByID->image) }}"
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Photo</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="image" id="image" value="<?php echo $userByID->image; ?>" />Max File Size less than 1MB and dimention 250x280
										</div>
									</div>
								</div>

								<input type="hidden" name="id" value="<?php echo $userByID->id; ?>"  />

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo"></label>
									<div class="col-xs-12 col-sm-9">
										<button class="btn btn-sm btn-info" type="submit">
											<i class="ace-icon fa fa-check"></i>
											Save Change
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

@endsection