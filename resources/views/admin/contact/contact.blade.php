@extends('admin.layout.default')

@section('title')
	Contact Message
@endsection

@section('content')
	<div class="main-panel">
		<div class="page-header">
			<h3 class="page-title">Contact Message</h3>
		</div>
		<div class="content-wrapper">
			<div class="card">
				<div class="card-body">
		
					<div class="row">
						<div class="col-12">
							<div class="table-responsive">
								<table id="order-listing" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>SN</th>
											<th>Name</th>
											<th>Mobile </th>
											<th>Email</th>
											<th>Message</th>
										</tr>
									</thead>
									<tbody>
										@foreach($contact as $key => $value)
											<tr>
												<td class="center">{{ $key+1 }}</td>
												<td>{{ $value->name }}</td>
												<td>{{ $value->phone }}</td>
												<td>{{ $value->email }}</td>
												<td>{{ $value->message }}</td>
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