@extends('admin.layout.default')

@section('title')
    Manage User
@endsection

@section('content')

<!-- PAGE CONTENT BEGINS -->
	<div class="row">
		<div class="col-xs-12">
			<div class="table-header">
				<i class="fa fa-list"></i>
				User List
				<span class="add-new-record">
					<i class="fa fa-plus"></i>
					<a class="white" href="{{ url('add-user') }}">
						Add New Record
					</a>
				</span>
			</div>
			<div>
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>SL</th>
                            <th>Name</th>
                            <th>User Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							if(!empty($allUsers)){					
								$count = 0;
								foreach($allUsers as $user){
						?>
							<tr>
								<td class="center"><?php echo $count+1; ?></td>
								<td><?php echo $user->name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->phone; ?></td>
								<td>
									<?php if($user->image == ""){?>
										<img height="50" width="60" src="{{ asset('public') }}/backend/img/unknown.png" title="<?php echo $user->image;?>" />
									<?php }else { ?>
										<a href="{{ asset($user->image) }}" target="_blank">
											<img height="50" width="60" src="{{ asset($user->image) }}"
											 title="<?php echo $user->image;?>" />
										</a>
									<?php } ?>
								</td>
								<td>{{ $user->status==1 ? 'Active' : 'Inactive' }}
                                </td>

								<td class="center">
									<?php
                                        if($user->status==1){ ?>

                                            <a onclick="return confirm('Are You Sure?')" href="{{ url('doUserInactive/'.$user->id) }}" title="" class="text-success btn btn-success  btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Active" id=""><i class="fa fa-check-circle"></i></a>

                                        <?php }else{ ?>

                                            <a onclick="return confirm('Are You Sure?')" href="{{ url('doUserActive/'.$user->id) }}" title="" class="text-danger btn btn-danger  btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inactive" id=""><i class="fa fa-check-circle"></i></a>

                                    <?php } ?>

									<a class="blue" data-rel="tooltip" data-placement="bottom" title="Change Password" href="{{ url('changePassword/'.$user->id) }}">
										<i class="ace-icon fa fa-key bigger-120"></i>
									</a>
									<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="{{ url('editProfile/'.$user->id)}}">
										<i class="ace-icon fa fa-pencil bigger-120"></i>
									</a>
									<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="{{ url('delete-profile/'.$user->id)}}">
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