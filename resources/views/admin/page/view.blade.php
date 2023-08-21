@extends('admin.layout.default')
@section('title')
	Manage Course
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Manage Page
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				{{-- <a class="white" href="{{ url('add-pages') }}">
					Add New Page
				</a> --}}
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SL</th>
						<th>Image</th>
						<th>Title</th>
						<th>Content</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($pages)){					
						$count = 0;
						foreach($pages as $value){
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td><img src="{{ $value->image ? asset($value->image) : asset('public/blank.jpg') }}" alt="" width="60px" class="img-thumbnail"></td>
							<td>{{ $value->title }}</td>
							<td>{!! \Illuminate\Support\Str::limit($value->content, 50, $end='...') !!}</td>
							<td class="center">
								<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('edit-pages/'.$value->id)}}">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>
								{{-- <a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-pages/'.$value->id) }}">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</a> --}}
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