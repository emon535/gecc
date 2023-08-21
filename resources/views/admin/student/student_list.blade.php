@extends('admin.layout.default')

@section('title')
	List of Students
@endsection

@section('content')
	<div class="main-panel">
		<div class="page-header">
			<h3 class="page-title">List of Students</h3>
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
											<th>Date</th>
											<th>Name</th>
											<th>Mobile </th>
											<th>Email</th>
											<th>Address</th>
											<th>Message</th>
											<th>Payment</th>
										</tr>
									</thead>
									<tbody>
										@foreach($students as $key => $value)
											<tr>
												<td class="center">{{ $key+1 }}</td>
												<td class="center">
													<?php
                                                        $timezone = "Asia/Dhaka";
                                                        date_default_timezone_set($timezone);
                                                        $dt = new DateTime($value->created_at);
                                                        echo $dt->format('M j Y');
                                                    ?>
												</td>
												<td>{{ $value->f_name }} {{ $value->l_name }}</td>
												<td>{{ $value->phone }}</td>
												<td>{{ $value->email }}</td>
												<td>{{ $value->address }}</td>
												<td>{{ $value->message }}</td>
												<td>
													<a href="#" data-panel-id="{{ $value->id }}" onclick="viewDetails(this)" ><i class="fa fa-info-circle" aria-hidden="true"></i>Payment Details</a>
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
		
		function viewDetails(x){

        	$("#myModalLabel").html("Student Details");
            btn = $(x).data('panel-id');

			$.ajax({
			    type:'get',
			    url:'{{ url("student-details") }}',
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