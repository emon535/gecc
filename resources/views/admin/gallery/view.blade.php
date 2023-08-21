@extends('admin.layout.default')
@section('title')
	Manage Gallery
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Gallery Images
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="{{ url('add-gallery') }}">
					Add New Record
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Album</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($gallery)){					
							$count = 0;
							foreach($gallery as $value){
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td>{{ $value->title }}</td>
							<td>
								<?php if($value->photo == ""){?>
									<img height="50" width="60" src="{{ asset('public') }}/backend/img/unknown.png" title="<?php echo $value->photo;?>" />
								<?php }else { ?>
									<a href="{{ asset($value->photo) }}" target="_blank">
										<img height="50" width="60" src="{{ asset($value->photo) }}" />
									</a>
								<?php } ?>
							</td>
							<td class="center">
								<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('edit-gallery/'.$value->id)}}">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a> | 
								<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-gallery/'.$value->id) }}">
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