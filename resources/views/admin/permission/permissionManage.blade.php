@extends('admin.layout.default')

@section('title')
	Manage Permission
@endsection

@section('content')
	<div class="main-panel">
		<div class="page-header">
			<h3 class="page-title">All Permission's List</h3>
			<a class="nav-link" href="{{ url('addPermission') }}">
                <span class="btn btn-primary">+ Create New</span>
            </a>
		</div>
		<div class="content-wrapper">
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
					<div class="row">
						<div class="col-12">
							<div class="table-responsive">
								<table id="order-listing" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>SN</th>
											<th>Employee Name</th>
											<!-- <th>Module Name</th>
											<th>Can View</th>
											<th>Can Add</th>
											<th>Can Edit</th>
											<th>Can Delete</th> -->
											<th>Details</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($allPermission as $key => $value)

										<?php 
											$modules = $value->module_name;
											$allModule  = explode(",",$modules);
											print_r($allModule);
										?>
										<tr>
											<td class="center">{{ $key+1 }}</td>
											<td>{{ $value->name }}</td>
											<!-- <td>{{ $value->module_name }}</td>
											<td>{{ $value->can_view }}</td>
											<td>{{ $value->can_add }}</td>
											<td>{{ $value->can_edit }}</td>
											<td>{{ $value->can_delete }}</td> -->
											<td>
												<a href="#" data-panel-id="{{ $value->id }}" onclick="viewPermission(this)" ><i class="fa fa-info-circle" aria-hidden="true"></i></a>
											</td>
											<td>
												<a href="{{ url('editPermission/'.$value->id) }}" ><i class="fa fa-edit" aria-hidden="true"></i></a> | 
												<a href="{{ url('deletePermission/'.$value->id) }}" onclick="return confirm('Are you sure ?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="show_details">
                    
                   </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		function viewPermission(x){

        	$("#myModalLabel").html("Permission Details");
            btn = $(x).data('panel-id');

			$.ajax({
			    type:'get',
			    url:'{{ url("detailsPermission") }}',
			    data:{id:btn},
			    cache: false,
			    success:function(data) {
			        $('.modal-body').html(data);
			    }
			});

            $("#myModal").modal();
        }
	</script>


@endsection