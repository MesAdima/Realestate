<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/icon.png">

	<title>Login | Authentication</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" />	
	<script>
$(document).ready(function(){
  <?php if($error){?>
    $.jGrowl('<?php echo $error; ?>', { sticky: true, theme: 'growl-error', header: 'Error!' });
  <?php } ?>
});
</script>
</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center">Real Estate</h3>
			</div>
			<div>
				<form method="post" style="margin-bottom: 0px !important;" class="form-horizontal" action="<?php echo base_url('home/login')?>">
					<div class="content">
						<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" id="username" name="username" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" id="password" name="password" class="form-control" required>
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<!-- <button class="btn btn-default" data-dismiss="modal" type="button">Register</button> -->
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
					<div class = "col-sm-12">
			          <center><p><?php if(isset($error)){echo $error;}else{echo "Login Above" ;}?></p></center>
			        </div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="#">&copy; 2015 Real Estate</a></div>
	</div> 
	
</div>

<script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
	<script type="text/javascript">
    $(function(){
      $("#cl-wrapper").css({opacity:1,'margin-left':0});
    });
  </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>assets/admin/js/behaviour/voice-commands.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.flot/jquery.flot.labels.js"></script>
</body>

</html>
