@extends('admin.layout.default')

@section('title')
	Video Testimonials
@endsection
@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Videos List
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="{{ url('add-videos') }}">
					Add New Record
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Videos</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($videos)){					
							$count = 0;
							foreach($videos as $value){
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td>{!! $value->url !!}</td>
							
							<td class="center">
								<a class="red delete btn btn-sm btn-outline-danger" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-videos/'.$value->id) }}">
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
<style>
    iframe{
        height: 150px !important;
        width:  300px !important;
    }
</style>
	
@endsection