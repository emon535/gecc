@extends('admin.layout.default')

@section('title')
	Manage Office Address
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Manage Office Address
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="{{ url('add-office-address') }}">
					Add New Record
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Location</th>
						<th>Address</th>
						<th>Code</th>
						<th>Region Name</th>
						<th>Map</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($office_address)){					
							$count = 0;
							foreach($office_address as $value){
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td>{{ $value->office_location }}</td>
							<td>{!! $value->office_address !!}</td>
							<td>{{ $value->code }}</td>
							<td>{{ $value->region_name }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->phone }}</td>
							<td class="center">
								<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('edit-office-address/'.$value->id)}}">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>
							</td>
						</tr>
					<?php 
							$count++;
							}//foreach
						}else{
							echo '<tr>';
								echo '<td colspan="8">'.'No Data Found'.'</td>';
							echo '</tr>';
						}
					?>

				</tbody>
			</table>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->

@endsection