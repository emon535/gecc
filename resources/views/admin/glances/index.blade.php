@extends('admin.layout.default')

@section('title')
    Edit Glances
@endsection

@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Glances</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-glance') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Global Offices</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="global_offices" class="col-xs-12 col-sm-4" value="{{ $glance->global_offices }}" />
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('global_offices') ? $errors->first('global_offices') : '' }}</span></div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Global Counsellors</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="global_counsellors" class="col-xs-12 col-sm-4" value="{{ $glance->global_counsellors }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('global_counsellors') ? $errors->first('global_counsellors') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Education Fair</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="education_fair" class="col-xs-12 col-sm-4" value="{{ $glance->education_fair }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('education_fair') ? $errors->first('education_fair') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Virtual Events</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="virtual_events" class="col-xs-12 col-sm-4" value="{{ $glance->virtual_events }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('virtual_events') ? $errors->first('virtual_events') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Courses Offered</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="courses_offered" class="col-xs-12 col-sm-4" value="{{ $glance->courses_offered }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('courses_offered') ? $errors->first('courses_offered') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Students Served</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="students_served" class="col-xs-12 col-sm-4" value="{{ $glance->students_served }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('students_served') ? $errors->first('students_served') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Free Service</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="free_service" class="col-xs-12 col-sm-4" value="{{ $glance->free_service }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('students_served') ? $errors->first('free_service') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Student Satisfaction</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="student_satisfaction" class="col-xs-12 col-sm-4" value="{{ $glance->student_satisfaction }}" />
                                            
                                            
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('student_satisfaction') ? $errors->first('student_satisfaction') : '' }}</span></div>
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
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

            
@endsection