@extends('admin.layout.default')

@section('title')
	Update Office Address
@endsection
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Office Address</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-office-address') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Location</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="office_location" class="col-xs-12 col-sm-4" value="{{ $single->office_location }}"  />
                                            <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('office_location') ? $errors->first('office_location') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Country Iso Code</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="code" placeholder="Country Iso Code" class="col-xs-12 col-sm-4" value="{{ $single->code }}" required />
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Region Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="region_name" placeholder="Region name" class="col-xs-12 col-sm-4" value="{{ $single->region_name }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Email</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="email" name="email" placeholder="enter Email Address" class="col-xs-12 col-sm-4" value="{{ $single->email }}" required />
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Phone</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="phone" placeholder="Enter Phone Number" class="col-xs-12 col-sm-4" value="{{ $single->phone }}" required />
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Office Address</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="office_address" cols="25" rows="5" id="office_address" class="col-xs-12 col-sm-4">{{ $single->office_address }}</textarea>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('office_address') ? $errors->first('office_address') : '' }}</span></div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Google Map Iframe</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="map" id="" cols="30" rows="4" class="form-control">{!! $single->map !!}</textarea>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('map') ? $errors->first('map') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="defaultCheck1">
                                    Default Address ?
                                  </label>
                                  <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input class="form-check-input" name="is_default" type="checkbox" value="1" id="defaultCheck1" {{ $single->is_default == 1 ? 'checked' : null }} >
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
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script type="text/javascript">

    CKEDITOR.replace('office_address');

</script>

@endsection