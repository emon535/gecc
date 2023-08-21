
<div class="row">
	<div class="col-12">
		<div class="widget-header">
			<h4 class="widget-title">Permissions for {{ $selected_info->name}} </h4>
		</div>
		<div class="table-responsive">
			<table id="order-listing" class="table table-striped table-bordered">
				<tbody>
					<tr>
						<td>Module Name</td>
						<td>{{ $selected_info->module_name }}</td>
					<tr>

					<tr>
						<td>Can View</td>
						<td>{{ $selected_info->can_view }}</td>
					<tr>

					<tr>
						<td>Can Add</td>
						<td>{{ $selected_info->can_add }}</td>
					<tr>

					<tr>
						<td>Can Edit</td>
						<td>{{ $selected_info->can_edit }}</td>
					<tr>

					<tr>
						<td>Can Delete</td>
						<td>{{ $selected_info->can_delete }}</td>
					<tr>
				</tbody>
			</table>
		</div>
	</div>
</div>