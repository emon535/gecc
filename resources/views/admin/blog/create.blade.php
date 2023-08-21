@extends('admin.layout.default')

@section('title')
	Create Blog
@endsection

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Create Blog</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">

                            <form class="form-horizontal" action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Title <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="title" class="col-xs-12 " value="{{ old('title') }}" placeholder="Enter blog title" required />
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Description <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="description" rows="10" id="description" class="col-xs-12 col-sm-4" required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Image <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="image" id="image" value="" required /><code>Max File Size less than 1MB</code>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status">Status <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="radio" value="active" name="status" {{ old('status') == "active" ? 'checked' : (!old('status') ? 'checked' : null) }} > Active</label>
                                            </div>
                                            <div class="checkbox">
                                                  <label><input type="radio" value="inactive" name="status" {{ old('status') == "inactive" ? 'checked' : null }} > Inactive</label>
                                            </div>
                                        </div>
                                        <div class="help-block"><span class="text-danger">{{ $errors->has('status') ? $errors->first('status') : '' }}</span></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-1 col-md-9">
                                        <button class="btn btn-sm btn-info" type="submit">
                                            <i class="ace-icon fa fa-check"></i>
                                            Submit
                                        </button>
                                        &nbsp; &nbsp;
                                        <a class="btn btn-sm cancel" href="{{ route('admin.blogs.index') }}">
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

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script type="text/javascript">

    CKEDITOR.replace('description');

</script>

@endsection