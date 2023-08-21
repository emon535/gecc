@extends('admin.layout.default')

@section('title')
	Manage About
@endsection

@section('content')
	<div class="main-panel">
		<div class="page-header">
			<h3 class="page-title">About Us</h3>
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
											<th>Title</th>
											<th>Photo</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($about as $value)
											<tr>
												<td class="center">1</td>
												<td>{{ $value->title }}</td>
												<td>
													<img src="{{ asset($value->photo) }}" style="height: 60px;width: 100px;" />
												</td>
												<td>
													<a href="{{ url('edit-about/'.$value->id) }}" ><i class="fa fa-edit" aria-hidden="true"></i></a>
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
@endsection