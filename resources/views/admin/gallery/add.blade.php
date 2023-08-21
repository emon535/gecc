@extends('admin.layout.default')

@section('title')
    Gallery Images
@endsection

@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($add)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Create Gallery</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('save-gallery') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Ablum</label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="clearfix">
                                            <select name="album_id" class="form-control"  required>
                                                <option value="0">--Please Select--</option>
                                                @foreach($album_list as $value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Photo</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="photo" id="image" value="" required />Max File Size less than 1MB
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
                <h4 class="widget-title lighter">Update Gallery</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form name="gallery" id="gallery" class="form-horizontal" action="{{ url('update-gallery') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Ablum</label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="clearfix">
                                            <select name="album_id" class="form-control"  required>
                                                <option value="0">--Please Select--</option>
                                                @foreach($album_list as $value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">Existing Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <img height="50" width="60" src="{{ asset($single->photo) }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Image</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="file" name="photo" id="image" value="" />Max File Size less than 1MB
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
            <script type="text/javascript">
                document.forms['gallery'].elements['album_id'].value='<?php echo $single->album_id?>';
            </script>
            @endisset
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
            
@endsection