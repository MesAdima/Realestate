<?php //echo "<pre>";print_r($houses_info);echo "</pre>"; 
	if ($success == 1) {
		echo '
			<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="fa fa-check sign"></i><strong>Success!</strong> Changes has been saved successfully!
		 	</div>
			';
	}

?>

	<div class="block-flat">
		<div class="header">
			<h3>Houses</h3>
		</div>
		<div class="content">
			<table class="table table-bordered" id="datatable">
				<thead class="no-border">
					<tr>
						<th style="width:auto;">House No.</th>
						<th style="width:auto;">Estate Name</th>
						<th style="width:auto;">Location</th>
						<th style="width:auto;">House State.</th>
						<th style="width:auto;">House Building Name</th>
						<th style="width:auto;">House Description</th>
						<th style="width:auto;">Added On</th>
						<th style="width:auto;">Action</th>

					</tr>
				</thead>
				<tbody class="no-border-x">
					<?php 
					foreach ($houses_info as $info) {
					echo "
					<tr>
						<td>".$info['house_no']."</td>
						<td>".$info['est_name']."</td>
						<td>".$info['location']."</td>
						<td>".$info['state']."</td>
						<td>".$info['build_name']."</td>
						<td>".$info['description']."</td>
						<td>".$info['added_on']."</td>
						<td><a href = ".base_url().'houses/deletehouse/'.$info['house_id'].">Delete House</a></td>
					</tr>
					"; 
					}?>
				</tbody>
			</table>
		</div>
	</div>


<script type="text/javascript">
  $('#datatable').dataTable();
  $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
  $('.dataTables_length select').addClass('form-control');
</script>