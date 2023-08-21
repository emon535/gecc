@extends('admin.layout.default')

@php
    $booking_type = request()->booking_type;
    $title = $booking_type == 1 ? 'E-Meeting' : ($booking_type == 2 ? 'Event Registration' : 'Free Consultation');
@endphp

@section('title')
	{{ $title }} List
@endsection

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="table-header">
			<i class="fa fa-list"></i>
			{{ $title }} List
			<span class="add-new-record">
				<i class="fa fa-download"></i>
				<a class="white" href="{{ route('admin.bookings.export').'?booking_type='.$booking_type }}">
					Download Excel
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
                        @if (in_array($booking_type, [1, 2]))
						    <th>Name</th>
                        @else
                            <th>First Name</th>
                            <th>Last Name</th>
                        @endif
						<th>Email</th>
						<th>Phone</th>
                        @if (in_array($booking_type, [1, 2]))
						    <th>{{ $booking_type == 1 ? 'Latest Qualification' : 'Current Qualification' }}</th>
                        @endif
                        @if ($booking_type == 1)
                            <th>Desire Location</th>
                        @endif
                        @if ($booking_type == 2)
                            <th>Interested Course</th>
                            <th>Certificate</th>
                        @endif
                        @if ($booking_type == 3)
    						<th>Message</th>
                        @endif
    					<th>Creation Date</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($bookings)){	
							foreach($bookings as $index => $item){
					?>
						<tr>
							<td>{{ $index+1 }}</td>
							@if (in_array($booking_type, [1, 2]))
                                <td>{{ $item->first_name }}</td>
                            @else
                                <td>{{ $item->first_name }}</td>
                                <td>{{ $item->last_name }}</td>
                            @endif
                            <td>{{ $item->email_address }}</td>
                            <td>{{ $item->phone_number }}</td>
                            @if (in_array($booking_type, [1, 2]))
                                <td>{{ $item->qualification }}</td>
                            @endif
                            @if ($booking_type == 1)
                                <td>{{ $item->desire_location }}</td>
                            @endif
                            @if ($booking_type == 2)
                                <td>{{ $item->course_in_interest }}</td>
                                <td>{{ $item->certificate }}</td>
                            @endif
                            @if ($booking_type == 3)
                                <td>{{ $item->message }}</td>
                            @endif
                            <td>{{ format_date($item->created_at) }}</td>
						</tr>
					<?php 
						}//foreach
					} else {
                            $colspan = $booking_type = 1 ? 6 : ($booking_type == 2 ? 7 : 6);
							echo '<tr>';
								echo '<td colspan="'.$colspan.'" class="text-center">'.'No Data Found'.'</td>';
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->


<script type="text/javascript">

</script>

@endsection