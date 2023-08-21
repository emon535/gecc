@extends('admin.layout.default')

@section('title')
    Update About
@endsection

@section('content')

    <div class="main-panel">     
        <div class="page-header">
            <h3 class="page-title">Update About</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>   
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            @if(Session::has('message'))
                                <div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <i class="ace-icon fa fa-check green"></i>
                                    {{ Session::get("message") }}
                                    {{ Session::forget('message') }}
                                </div>
                            @endif

                            {!! Form::open(['url'=>'update-about', 'class'=>'forms-sample', 'enctype'=>'multipart/form-data', 'method'=>'POST']) !!}
                                
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title <span style="color: red;font-size: 15px;">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" value="{{ $single->title }}" class="form-control" placeholder="Enter Title" required>
                                        <input type="hidden" name="id" value="{{ $single->id }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Buyer Info</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" placeholder="Enter description">{{ $single->description }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Existing Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{ asset($single->photo) }}" style="height: 60px;width: 100px;"/>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Upload New Image</label>
                                    <div class="col-sm-9">
                                        <input name="photo" type="file" class="form-control">
                                        (<code>JPG PNG MAX 1MB</code>)
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection