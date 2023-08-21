@extends('admin.layout.default')

@section('title')
    Create Testimonial
@endsection

@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($add)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Create Testimonial</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('save-testimonial') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="name" class="col-xs-12 col-sm-4" value="" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Dept & Varsity</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="university" class="col-xs-12 col-sm-4" value="" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Details</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" cols="25" rows="5" id="details" class="col-xs-12 col-sm-4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Photo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="photo" id="image" value="" required/>Max File Size less than 1MB
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
                <h4 class="widget-title lighter">Update Testimonial</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-testimonial') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="name" class="col-xs-12 col-sm-4" value="{{ $single->name }}" required />
                                            <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Dept & Varsity</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="university" class="col-xs-12 col-sm-4" value="{{ $single->university }}" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Details</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" cols="25" rows="5" id="details" class="col-xs-12 col-sm-4">{{ $single->details }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Existing Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <img height="50" width="60" src="{{ asset($single->photo) }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Photo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="photo" id="image" value=""/>Max File Size less than 1MB
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

    CKEDITOR.replace('details');

</script>
            
@endsection