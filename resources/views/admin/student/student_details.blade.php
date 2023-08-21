
<div class="row">
	<div class="col-12">
		<div class="widget-header">
			<h4 class="widget-title">Payment Details For {{ $selected_info->f_name}} {{ $selected_info->l_name}} </h4>
		</div>
		<div class="table-responsive">
			<table id="order-listing" class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td>Payment Method</td>
						<td>{{ $selected_info->payment_method }}</td>
					<tr>

					<tr>
						<td>Amount</td>
						<td>{{ $selected_info->amount }}</td>
					<tr>

					<tr>
						<td>Card No</td>
						<td>{{ $selected_info->card_no }}</td>
					<tr>

					<tr>
						<td>CVC No</td>
						<td>{{ $selected_info->cvc_no }}</td>
					<tr>

					<tr>
						<td>Payment Date</td>
						<td>
							<?php
                                $timezone = "Asia/Dhaka";
                                date_default_timezone_set($timezone);
                                $dt = new DateTime($selected_info->created_at);
                                echo $dt->format('M j Y');
                            ?>
						</td>
					<tr>

				</tbody>
			</table>
		</div>
	</div>
</div>