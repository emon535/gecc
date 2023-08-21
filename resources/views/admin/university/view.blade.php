@extends('admin.layout.default')

@section('title')
	Manage University
@endsection
@section('content')

<div class="row">
		<div class="col-xs-12">
			<div class="table-header">
				<i class="fa fa-list"></i>
				Manage University
				<span class="add-new-record">
					<i class="fa fa-plus"></i>
					<a class="white" href="{{ url('add-university') }}">
						Add New Record
					</a>
				</span>
			</div>
			<div>
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>SN</th>
							<th>Name</th>
							<th>Address</th>
							<th>Logo</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							if(!empty($universities)){					
								$count = 0;
								foreach($universities as $value){
						?>
							<tr>
								<td class="center"><?php echo $count+1; ?></td>
								<td>{{ $value->university_name }}</td>
								<td>{{ $value->address }}</td>
								<td>
									<?php if($value->logo == ""){?>
										<img height="50" width="60" src="{{ asset('public') }}/backend/img/unknown.png" title="<?php echo $value->logo;?>" />
									<?php }else { ?>
										<a href="{{ asset($value->logo) }}" target="_blank">
											<img height="50" width="60" src="{{ asset($value->logo) }}" />
										</a>
									<?php } ?>
								</td>
								<td>
									<?php if($value->image == ""){?>
										<img height="50" width="60" src="{{ asset('public') }}/backend/img/unknown.png" title="<?php echo $value->image;?>" />
									<?php }else { ?>
										<a href="{{ asset($value->image) }}" target="_blank">
											<img height="50" width="60" src="{{ asset($value->image) }}" />
										</a>
									<?php } ?>
								</td>
								<td class="center">
									<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('edit-university/'.$value->id)}}">
										<i class="ace-icon fa fa-pencil bigger-120"></i>
									</a> | 
									<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-university/'.$value->id) }}">
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