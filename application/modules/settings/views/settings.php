<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Real Estate</title>

</head>
<body>


<div class="row">
				<div class="col-md-12">
				
					<div class="block-flat">
						<div class="header">							
							<h3>Register House Type</h3>
						</div>
						<div class="content">
						    <form class="form-horizontal group-border-dashed" action="<?php echo base_url() . 'settings/addtype'?>" method="post">
								<div class="form-group">
									<label class="col-sm-3 control-label">House Type</label>
									<div class="col-sm-6">
										<input type="text" name="housetype" data-mask="type" class="form-control"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
									<div class="col-sm-6">
										<textarea input type="text" name="description" data-mask="description" class="form-control"></textarea>
										<!-- <input type="text" name="description" data-mask="description" class="form-control"/> -->
									</div>
								</div>
							
								<div class="form-group">
									<label class="col-sm-3 control-label">Multiple Houses</label>
									<div class="col-sm-6">
										<div class="radio"> 
                    					<label> <input class="icheck" type="checkbox" name="multiplehouses" name="multiplehouses" value="yes"></label> 
                  						</div>
										<!-- <input type="checkbox" name="multiplehouses" data-mask="multiple" class="form-control" value="yes"/> Yes <br> -->
										
									</div>
								</div>
								
								<br>
								<input type="submit" value="Submit">
							</form>
						</div>
					</div>
					
				</div>
			</div>


</body>
</html>