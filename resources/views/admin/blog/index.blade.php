@extends('admin.layout.default')

@section('title')
	Blog List
@endsection

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Blog List
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="{{ route('admin.blogs.create') }}">
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
						<th>Created At</th>
						<th>Status</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($blogs)){	
							foreach($blogs as $index => $item){
					?>
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $item->title }}</td>
							<td>{{ format_date($item->created_at) }}</td>
							<td>
								@if ($item->status == 'active')
									<span class="badge badge-success">Active</span>
								@else
									<span class="badge badge-danger">Inactive</span>
								@endif
							</td>
							<td>
								@php
									$image = $item->image ? asset($item->image) : asset('backend/img/unknown.png');
								@endphp
								<a href="{{ asset($image) }}" target="_blank">
									<img height="50" width="60" src="{{ $image }}"
									title="{{ $item->title }}" />
								</a>
							</td>
							<td class="center">
								<a class="blue" data-rel="tooltip" data-placement="bottom" title="Show" href="javascript:void(0)">
									<i class="ace-icon fa fa-eye bigger-120"></i>
								</a> |
								<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ route('admin.blogs.edit', $item->id)}}">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a> | 
								<form action="{{ route('admin.blogs.destroy', $item->id) }}" class="form-inline" method="post" id="{{ 'delete-form-'.$item->id }}">
									@csrf
									@method('DELETE')
									<a class="red" data-rel="tooltip" data-placement="bottom" title="Delete" href="javascript:void(0)" onclick="deleteConfirm({{$item->id}})">
										<i class="ace-icon fa fa-trash-o bigger-120"></i>
									</a>
								</form>
							</td>
						</tr>
					<?php 
						}//foreach
					} else {
							echo '<tr>';
								echo '<td colspan="6" class="text-center">'.'No Data Found'.'</td>';
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->


<script type="text/javascript">

    function deleteConfirm(id) {
		if (confirm('Are you sure you want to delete this?')) {
			$('#delete-form-'+id).submit();
		}
	}

</script>

@endsection