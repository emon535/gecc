@extends('admin.layout.default')

@section('title')
    Update Your Password
@endsection

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">     
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">
                    Update Your Password
                </h4>
            </div>   

            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">

                            {!! Form::open(['url'=>'updatePassword', 'class'=>'forms-sample', 'enctype'=>'multipart/form-data', 'method'=>'POST']) !!}

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="last-name">Old Password</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="old_password"  class="col-xs-12 col-sm-4" required="required" value="" placeholder="Old Password" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('old_password') ? $errors->first('old_password') : '' }}</span></div>
                                        <input type="hidden" name="id" value="{{ $userByID->id }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="last-name">New Password</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="password" id="password"  class="col-xs-12 col-sm-4" required="required" value="" placeholder="New Password"/>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="last-name">Confirm Password</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="confirm_password" id="confirm_password"  class="col-xs-12 col-sm-4" required="required" value="" placeholder="Confirm Password"/>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('confirm_password') ? $errors->first('confirm_password') : '' }}</span></div>
                                        <span id="confirmMessage" class="confirmMessage"></span>
                                    </div>
                                </div>

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
                                
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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