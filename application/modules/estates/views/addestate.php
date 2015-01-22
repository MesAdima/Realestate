<?php
	$error_message = '';
	if($error)
	{
		$error_message = '<p>'.$error.'</p>';
	} 
?>
<div class="col-sm-6 col-md-6">
	<div class="block-flat">
		<div class="header">							
			<h3>New Estate Details</h3>
		</div>
		<div class="content">
			<form class="form-horizontal" role="form" action = 'completeregistration' method = 'POST' enctype="form/multipart">
				<div class="form-group">
					<label for="estate" class="col-sm-2 control-label">Estate Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="estate" placeholder="Estate Name" name = "est_name" required>
					</div>
				</div>
			<div class="form-group">
				<label for="location" class="col-sm-2 control-label">Location</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="location" placeholder="Location" name = "location" required>
				</div>
			</div>

			<div class="form-group">
				<label for="description" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<textarea class="form-control" name = "description" id = "description"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Complete Registration</button>
				</div>
			</div>
			</form>

			<?php if($error_message){echo $error_message;}?>
		</div>
	</div>				
</div>