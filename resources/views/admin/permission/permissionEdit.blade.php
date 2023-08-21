@extends('admin.layout.default')

@section('title')
    Update Permission
@endsection

@section('content')

    <div class="main-panel">     
        <div class="page-header">
            <h3 class="page-title">Update Permission</h3>
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
                          
                            {!! Form::open(['url'=>'updatePermission', 'name'=>'editform', 'class'=>'forms-sample', 'enctype'=>'multipart/form-data', 'method'=>'POST']) !!}
                                
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

                                <?php 
                                    $modules = $selected_info->module_name;
                                    $moduleArr = explode(",", $modules);

                                    $view = $selected_info->can_view;
                                    $viewArr = explode(",", $view);

                                    $add = $selected_info->can_add;
                                    $addArr = explode(",", $add);

                                    $edit = $selected_info->can_edit;
                                    $editArr = explode(",", $edit);

                                    $delete = $selected_info->can_delete;
                                    $deleteArr = explode(",", $delete);
                                ?>

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
                                                <span class="m-l-15"><input type="checkbox" name="module_name[]" value="{{ $value->module_name }}"  <?php if(in_array($value->module_name, $moduleArr)) { echo 'checked';} ?> class="form-group" ></span>
                                            </th>
                                                    
                                            <td>
                                                <label class="">
                                                    <input type="checkbox" class="form-group" name="can_view[]" value="{{ $value->module_name }}"<?php if(in_array($value->module_name, $viewArr)) { echo 'checked';} ?>  /> Yes
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-group" name="can_view[]" value="No" <?php if(in_array('No', $viewArr)) { echo 'checked';} ?> /> No
                                                </label>
                                            </td>

                                            <td>
                                                <label class="">
                                                    <input type="checkbox" class="form-group" name="can_add[]" value="{{ $value->module_name }}" <?php if(in_array($value->module_name, $addArr)) { echo 'checked';} ?> /> Yes
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-group" name="can_add[]" value="No" <?php if(in_array('No', $addArr)) { echo 'checked';} ?> /> No
                                                </label>
                                            </td>

                                            <td>
                                                <label class="">
                                                    <input type="checkbox" class="form-group" name="can_edit[]" value="{{ $value->module_name }}" <?php if(in_array($value->module_name, $editArr)) { echo 'checked';} ?> /> Yes
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-group" name="can_edit[]" value="No" <?php if(in_array('No', $editArr)) { echo 'checked';} ?> /> No
                                                </label>
                                            </td>

                                            <td>
                                                <label class="">
                                                    <input type="checkbox" class="form-group" name="can_delete[]" value="{{ $value->module_name }}" <?php if(in_array($value->module_name, $deleteArr)) { echo 'checked';} ?> /> Yes
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" class="form-group" name="can_delete[]" value="No" <?php if(in_array('No', $deleteArr)) { echo 'checked';} ?> /> No
                                                </label>
                                            </td>
                                        </tr>
                                        @endforeach   
                                    </tbody>
                                </table>

                                <input type="hidden" name="id" value="{{ $selected_info->id }}">

                                <br>

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

<script type="text/javascript">
    document.forms['editform'].elements['user_id'].value='<?php echo $selected_info->user_id ?>';
</script>

@endsection