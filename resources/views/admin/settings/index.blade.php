@extends('admin.layout.default')

@section('title')
	Update Settings
@endsection

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Settings</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">

                            <form class="form-horizontal" action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Registration Button Link <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="regsitration_btn_link" class="col-xs-12 " value="{{ $settings['regsitration_btn_link'] ?? old('regsitration_btn_link') }}" placeholder="Enter link here" required />
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('regsitration_btn_link') ? $errors->first('regsitration_btn_link') : '' }}</span></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Email for E-Meeting <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_e_meeting" id="email_for_e_meeting1" value="1" {{ isset($settings['email_for_e_meeting']) && $settings['email_for_e_meeting'] ? 'checked' : '' }}>
                                                <label class="form-check-label" for="email_for_e_meeting1">
                                                 Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_e_meeting" id="email_for_e_meeting2" value="0" {{ isset($settings['email_for_e_meeting']) ? (!$settings['email_for_e_meeting'] ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label" for="email_for_e_meeting2">
                                                  No
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('email_for_e_meeting') ? $errors->first('email_for_e_meeting') : '' }}</span></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Email for Event Registration <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_event_registration" id="email_for_event_registration1" value="1" {{ isset($settings['email_for_event_registration']) && $settings['email_for_event_registration'] ? 'checked' : '' }}>
                                                <label class="form-check-label" for="email_for_event_registration1">
                                                 Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_event_registration" id="email_for_event_registration2" value="0" {{ isset($settings['email_for_event_registration']) ? (!$settings['email_for_event_registration'] ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label" for="email_for_event_registration2">
                                                  No
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('email_for_event_registration') ? $errors->first('email_for_event_registration') : '' }}</span></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Email for Free Consultation <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_free_consulation" id="email_for_free_consulation1" value="1" {{ isset($settings['email_for_free_consulation']) && $settings['email_for_free_consulation'] ? 'checked' : '' }}>
                                                <label class="form-check-label" for="email_for_free_consulation1">
                                                 Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="email_for_free_consulation" id="email_for_free_consulation2" value="0" {{ isset($settings['email_for_free_consulation']) ? (!$settings['email_for_free_consulation'] ? 'checked' : '') : 'checked' }}>
                                                <label class="form-check-label" for="email_for_free_consulation2">
                                                  No
                                                </label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('email_for_free_consulation') ? $errors->first('email_for_free_consulation') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-1 col-md-9">
                                        <button class="btn btn-sm btn-info" type="submit">
                                            <i class="ace-icon fa fa-check"></i>
                                            Submit
                                        </button>
                                        &nbsp; &nbsp;
                                        <a class="btn btn-sm cancel" href="{{ route('admin.settings.index') }}">
                                            <i class="ace-icon fa fa-times"></i>
                                            Cancel
                                        </a>
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

<script type="text/javascript">
</script>

@endsection