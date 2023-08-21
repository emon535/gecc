@extends('admin.layout.default')
@section('title')
	Manage Course
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Manage Course
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="{{ url('add-course') }}">
					Add New Record
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Title</th>
						<th>Country</th>
						<th>Duration</th>
						<th>Cost</th>
						<th>Waiver</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($course)){					
						$count = 0;
						foreach($course as $value){
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td>{{ $value->title }}</td>
							<td>{{ $value->country }}</td>
							<td>{{ $value->duration }}</td>
							<td>{{ $value->fee }}</td>
							<td>{{ $value->waiver }}</td>
							<td class="center">
								<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('edit-course/'.$value->id)}}">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a> | 
								<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-course/'.$value->id) }}">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
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