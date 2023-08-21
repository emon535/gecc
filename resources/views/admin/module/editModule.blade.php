@extends('admin.layout.default')
@section('title')
    Update Module
@endsection
@section('content')

<div class="main-panel">    
    <div class="page-header">
        <h3 class="page-title">Update Module</h3>
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
                        
                        {!! Form::open(['url' => 'updateModule', 'method' => 'POST']) !!}
                            
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Module Name <span style="color: red;font-size: 15px;">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="module_name" value="{{ $selected_info->module_name }}" class="form-control" placeholder="Enter Module Name" required>

                                    <input type="hidden" name="id" value="{{ $selected_info->id }}" class="form-control">
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