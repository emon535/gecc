@extends('admin.layout.default')

@section('title')
	Update Blog
@endsection

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Blog</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">

                            <form class="form-horizontal" action="{{ route('admin.faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Question <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="question" class="col-xs-12 " value="{{ $faq->question }}" placeholder="Enter question" required />
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('question') ? $errors->first('question') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="answer">Answer <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="answer" rows="10" id="answer" class="col-xs-12 col-sm-4" required>{{ $faq->answer }}</textarea>
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('answer') ? $errors->first('answer') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Position <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="number" step="1" name="position" id="position" value="{{ $faq->position }}" required />
                                        </div>
                                    </div>
                                    <div class="help-block"><span class="text-danger">{{ $errors->has('position') ? $errors->first('position') : '' }}</span></div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status">Status <span class="text-danger">*</span></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="radio" value="active" name="status" {{ $faq->status == "active" ? 'checked' : (!$faq->status ? 'checked' : null) }} > Active</label>
                                            </div>
                                            <div class="checkbox">
                                                  <label><input type="radio" value="inactive" name="status" {{ $faq->status == "inactive" ? 'checked' : null }} > Inactive</label>
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
                                        <a class="btn btn-sm cancel" href="{{ route('admin.faqs.index') }}">
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

    CKEDITOR.replace('answer');

</script>

@endsection