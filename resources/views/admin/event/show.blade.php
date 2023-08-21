@extends('admin.layout.default')

@section('title')
Show Event
@endsection
@section('content')
<style>

.panel-heading-nav {
	border-bottom: 0;
	padding: 10px 0 0;
}

.panel-heading-nav .nav {
	padding-left: 10px;
	padding-right: 10px;
}
</style>
<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			Show Event
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="javascript:void(0)"  data-toggle="modal" data-target="#newfaq">
					Add Faq
				</a>
			</span>
		</div>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading panel-heading-nav">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active">
							<a href="#one" aria-controls="one" role="tab" data-toggle="tab">Event</a>
						</li>
						<li role="presentation">
							<a href="#two" aria-controls="two" role="tab" data-toggle="tab">FAQ</a>
						</li>
					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="one">
							<table id="" class="table table-striped table-bordered table-hover">
								<tr>
									<td>
										Title
									</td>
									<td>
										{{ $single->title }}
									</td>
								</tr>
								<tr>
									<td>
										Location
									</td>
									<td>
										{{ $single->location }}
									</td>
								</tr>
								<tr>
									<td>
										Date
									</td>

									<td>
										{{ $single->date }} <br>
									</td>
								</tr>
								<tr>
									<td>
										Time
									</td>

									<td>
										{{ $single->time }} <br>	
									</td>
								</tr>
								<tr>
									<td>
										Image
									</td>

									<td>
										<?php if($single->image == ""){?>
										<img height="50" width="60" src="{{ asset('public') }}/backend/img/unknown.png" title="<?php echo $single->image;?>" />
										<?php }else { ?>
										<a href="{{ asset($single->image) }}" target="_blank">
											<img height="50" width="60" src="{{ asset($single->image) }}"
											title="<?php echo $single->title;?>" />
										</a>
										<?php } ?>
									</td>
								</tr>
								<tr>
									<td>
										Details
									</td>

									<td>
										{!! $single->details !!}
									</td>
								</tr>
							</table>

						</div>


						<div role="tabpanel" class="tab-pane fade" id="two">

							<table id="sample-table-2" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th>SN</th>
										<th>Question</th>
										<th>Answer</th>
										<th>Action</th>
									</tr>
								</thead>

								<tbody>
									<?php 
									if(!empty($faqs)){					
										$count = 0;
										foreach($faqs as $value){
										?>
										<tr>
											<td class="center"><?php echo $count+1; ?></td>
											<td>{{ $value->question }}</td>
											<td>{{ $value->answer }}</td>

											<td class="center">
												<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="javascript:void(0)" data-toggle="modal" data-target="#edtfaq{{ $value->id }}" >
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</a>
												<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-faq/'.$value->id) }}">
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
		</div>
	</div>
</div>
</div>



</div>
</div><!-- /.col -->
</div><!-- /.row -->

<div class="modal fade" id="newfaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New FAQ</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ url('save-faq') }}" method="post">
				@csrf
				<div class="modal-body">
					<input type="hidden" name="event_id" value="{{ $single->id }}">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Question:</label>
						<input type="text" name="question" value="{{ old('question') }}" class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Answer:</label>
						<textarea name="answer" class="form-control" id="message-text" required>{!! old('answer') !!}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>

			</form>
		</div>
	</div>
</div>
@if(count($faqs))
@foreach($faqs as $row)
<div class="modal fade" id="edtfaq{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{ url('update-faq') }}" method="post">
				@csrf
				<div class="modal-body">
					<input type="hidden" name="event_id" value="{{ $row->event_id }}">
					<input type="hidden" name="id" value="{{ $row->id }}">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Question:</label>
						<input type="text" name="question" value="{{ $row->question }}" class="form-control" id="recipient-name" required>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Answer:</label>
						<textarea name="answer" class="form-control" id="message-text" required>{!! $row->answer !!}</textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>

			</form>
		</div>
	</div>
</div>
@endforeach
@endif

@endsection