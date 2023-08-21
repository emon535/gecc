@extends('admin.layout.default')
@section('title')
    Manage Module
@endsection
@section('content')

<div class="main-panel">    
    <div class="page-header">
        <h3 class="page-title">Add New Module</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
    </div>    
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
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
                        
                        {!! Form::open(['url' => 'saveModule', 'method' => 'POST']) !!}
                            
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Module Name <span style="color: red;font-size: 15px;">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="module_name" value="" class="form-control" placeholder="Enter Module Name" required>
                                    <span class="text-danger">{{ $errors->has('module_name') ? $errors->first('module_name') : '' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                      
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-7 grid-margin stretch-card">
			    <div class="card">
			        <div class="card-body">
			            <div class="row">
			                <div class="col-12">
			                    <div class="table-responsive">
			                        <table id="order-listing" class="table table-striped table-bordered">
			                            <thead>
			                                <tr>
			                                    <th>SN</th>
			                                    <th>Module Name</th>
			                                    <th>Action</th>
			                                </tr>
			                            </thead>
			                            <tbody>
			                                @foreach($allModule as $key => $value)
			                                <tr>
			                                    <td class="center">{{ ++$key }}</td>
			                                    <td>{{ $value->module_name }}</td>
			                                    <td>
			                                        <a href="{{url('editModule/'.$value->id)}}" ><i class="fa fa-edit" aria-hidden="true"></i></a>
			                                    </td>
			                                </tr>
			                                @endforeach
			                            </tbody>
			                        </table>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
    </div>
</div>

@endsection