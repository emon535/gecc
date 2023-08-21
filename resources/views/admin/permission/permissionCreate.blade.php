@extends('admin.layout.default')

@section('title')
    Create Permission
@endsection

@section('content')

    <div class="main-panel">     
        <div class="page-header">
            <h3 class="page-title">Set Employee Wise Permission</h3>
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

                            {!! Form::open(['url'=>'savePermission', 'class'=>'forms-sample', 'enctype'=>'multipart/form-data', 'method'=>'POST']) !!}
                                
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Employee <span style="color: red;font-size: 15px;">*</span></label>
                                    <div class="col-sm-9">
                                        <select name="user_id" class="form-control" required>
                                            <option value="">--Select Employee--</option>
                                            @foreach($allEmployee as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">{{ $errors->has('user_id') ? $errors->first('user_id') : '' }}</span>
                                    </div>
                                </div>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Module Name</th>
                                            <th>Enable View</th>
                                            <th>Enable Add</th>
                                            <th>Enable Edit</th>
                                            <th>Enable Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($allModule as $value)
                                            <tr>
                                                <th>
                                                    {{ $value->module_name }}<br /><br />
                                                    <span class="m-l-15"><input value="{{ $value->module_name }}" name="module_name[]" class="form-group" type="checkbox"></span>
                                                    <span class="text-danger">{{ $errors->has('module_name') ? $errors->first('module_name') : '' }}</span>
                                                </th>
                                                        
                                                <td>
                                                    <label class="">
                                                        <input type="checkbox" class="form-group" name="can_view[]" value="{{ $value->module_name }}" /> Yes
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" class="form-group" name="can_view[]" value="No" /> No
                                                    </label>
                                                    <span class="text-danger">{{ $errors->has('can_view') ? $errors->first('can_view') : '' }}</span>
                                                </td>

                                                <td>
                                                    <label class="">
                                                        <input type="checkbox" class="form-group" name="can_add[]" value="{{ $value->module_name }}" /> Yes
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" class="form-group" name="can_add[]" value="No" /> No
                                                    </label>
                                                    <span class="text-danger">{{ $errors->has('can_add') ? $errors->first('can_add') : '' }}</span>
                                                </td>

                                                <td>
                                                    <label class="">
                                                        <input type="checkbox" class="form-group" name="can_edit[]" value="{{ $value->module_name }}" /> Yes
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" class="form-group" name="can_edit[]" value="No" /> No
                                                    </label>
                                                    <span class="text-danger">{{ $errors->has('can_edit') ? $errors->first('can_edit') : '' }}</span>
                                                </td>

                                                <td>
                                                    <label class="">
                                                        <input type="checkbox" class="form-group" name="can_delete[]" value="{{ $value->module_name }}" /> Yes
                                                        &nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" class="form-group" name="can_delete[]" value="No" /> No
                                                    </label>
                                                    <span class="text-danger">{{ $errors->has('can_delete') ? $errors->first('can_delete') : '' }}</span>
                                                </td>
                                            </tr> 
                                        @endforeach    
                                    </tbody>
                                </table>

                                <br>

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
            </div>
        </div>
    </div>

@endsection