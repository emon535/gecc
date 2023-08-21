@extends('admin.layout.default')
@section('title')
    Prerequisites & Counselling
@endsection
@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($edit)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Prerequisites & Counselling</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-prerequisites-counselling') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                                <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="title">Title</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="title" class="col-xs-12 col-sm-4" value="{{ $single->title }}" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Details</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" cols="25" rows="5" id="details" class="col-xs-12 col-sm-4">{{ $single->details }}</textarea>&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('details') ? $errors->first('details') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="photo" id="photo" value="" required />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span><code>Max File Size less than 1MB</code>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
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

    CKEDITOR.replace('details');

</script>
            
@endsection