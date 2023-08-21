@extends('admin.layout.default')

@section('title')
    Create subject
@endsection

@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($add)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Create subject</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('save-subject') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Name</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="name" class="col-xs-12 col-sm-4" value="{{ old('name') }}" required />
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Details</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" id="details" cols="30" rows="10" class="details form-control">{!! old('details') !!}</textarea>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="image" class="" value="" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="is_popular">Is Popular</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="checkbox" value="1" name="is_popular" {{ old('is_popular') ==1 ? 'checked' : null }} >Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status">Status</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="checkbox" value="1" name="status" {{ old('status') ==1 ? 'checked' : null }} >Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
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
                <h4 class="widget-title lighter">Update subject</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-subject') }}" method="post" enctype="multipart/form-data" >
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
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Details</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" id="details" cols="30" rows="10" class="details form-control">{!! $single->details !!}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name"></label>
                                    <div class="col-xs-12 col-sm-9">
                                        <img src="{{ $single->image ? asset($single->image) : asset('public/blank.jpg')  }}" alt="" class="img-thumbnail" width="80px">
                                    </div>

                                
                                

                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="image" class="" value="" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="is_popular">Is Popular</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="checkbox" value="1" name="is_popular" {{ $single->is_popular ==1 ? 'checked' : null }} >Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status">Status</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <div class="checkbox">
                                                  <label><input type="checkbox" value="1" name="status" {{ $single->status ==1 ? 'checked' : null }} >Active</label>
                                            </div>
                                        </div>
                                    </div>
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

    CKEDITOR.replace('content');

</script>      
@endsection