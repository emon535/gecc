@extends('admin.layout.default')
@section('title')
    Add University
@endsection
@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($add)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Add University</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('save-university') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">University Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="university_name" class="col-xs-12 col-sm-4" value="" placeholder="Enter University Name" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('university_name') ? $errors->first('university_name') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">University Address</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="address" class="col-xs-12 col-sm-4" value="" placeholder="Enter University Address" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Description</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="description" cols="25" rows="5" id="description" class="col-xs-12 col-sm-4" ></textarea>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Total Student</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="total_student" class="col-xs-12 col-sm-4" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Course Duration</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="course_duration" class="col-xs-12 col-sm-4" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Course Credit</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="course_credit" class="col-xs-12 col-sm-4" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Total Semester</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="total_semester" class="col-xs-12 col-sm-4" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Logo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="logo" id="image" value="" required />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span><code>Max File Size less than 1MB</code>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('logo') ? $errors->first('logo') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="image" id="image" value="" /><code>Max File Size less than 1MB</code>
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
            @endisset
            @isset($edit)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update university</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-university') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">University Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="university_name" class="col-xs-12 col-sm-4" value="{{ $single->university_name }}" placeholder="Enter University Name" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>

                                            <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('university_name') ? $errors->first('university_name') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">University Address</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="address" class="col-xs-12 col-sm-4" value="{{ $single->address }}" placeholder="Enter University Address" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Description</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="description" cols="25" rows="5" id="description" class="col-xs-12 col-sm-4" >{{ $single->description }}</textarea>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block">
                                        <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Total Student</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="total_student" class="col-xs-12 col-sm-4" value="{{ $single->total_student }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Course Duration</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="course_duration" class="col-xs-12 col-sm-4" value="{{ $single->course_duration }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Course Credit</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="course_credit" class="col-xs-12 col-sm-4" value="{{ $single->course_credit }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Total Semester</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="total_semester" class="col-xs-12 col-sm-4" value="{{ $single->total_semester }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Existing Logo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <img height="50" width="60" src="{{ asset($single->logo) }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Logo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="logo" id="image" value="" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span><code>Max File Size less than 1MB</code>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Existing Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <img height="50" width="60" src="{{ asset($single->image) }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="image" id="image" value="" /><code>Max File Size less than 1MB</code>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-1 col-md-9">
                                        <button class="btn btn-sm btn-info" type="submit">
                                            <i class="ace-icon fa fa-check"></i>
                                            Update
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
            @endisset
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script type="text/javascript">

    CKEDITOR.replace('description');

    $(document).ready(function(){

        $('#date').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy",
            immediateUpdates: true,
            todayBtn: true,
            todayHighlight: true
        });

    });

</script>
            
@endsection