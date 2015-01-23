<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.condorthemes.com/flatdream/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Dec 2014 13:56:04 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="">

	<title><?php echo $title; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.nanoscroller/nanoscroller.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.codemirror/lib/codemirror.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.codemirror/theme/ambiance.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.vectormaps/jquery-jvectormap-1.2.2.css"  media="screen"/>
  
	<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/js/jquery.datatables/bootstrap-adapter/css/datatables.css" />	
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.datatables/jquery.datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>

    
</head>
<body class="animated">

<div id="cl-wrapper">

  <div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="sidebar-logo">
            <div class="logo">
                <a href="#"></a>
            </div>
          </div>
         
          <ul class="cl-vnavigation">
            <li><a href="<? echo base_url(); ?>admin"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-sitemap"></i><span>Estates</span></a></li>
            <li><a href="#"><i class="fa fa-building-o"></i><span>Buildings</span></a></li>
            <li><a href="#"><i class="fa fa-home"></i><span>Houses</span></a>
              <ul class="sub-menu">
                <li class="" ><a href="<?php echo base_url().'houses/housesindex'; ?>">All Houses</a></li>
                <li class="" ><a href="<?php echo base_url().'houses/register'; ?>">Register House</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-cogs"></i><span>Settings</span></a>
              <ul class="sub-menu">
                <li class="active" ><a href="#">Property Settings</a></li>
                <li  ><a href="#">Version 2</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
        <input type="text" class="form-control search" placeholder="Search..." />
        <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>
    </div>
  </div>
	<div class="container-fluid" id="pcont">
   <!-- TOP NAVBAR -->
  <div id="head-nav" class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-collapse">
        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="dropdown profile_menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="images/avatar6-2.jpg" /><span>Test Admin</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Messages</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
            </ul>
          </li>
        </ul>			
        <ul class="nav navbar-nav not-nav">
          <li class="button dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-inbox"></i></a>
            <ul class="dropdown-menu messages">
              <li>
                <div class="nano nscroller">
                  <div class="content">
                    <ul>
                      <li>
                        <a href="#">
                          <img src="images/avatar2.jpg" alt="avatar" /><span class="date pull-right">13 Sept.</span> <span class="name">Daniel</span> Hey! How are you?
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/avatar_50.jpg" alt="avatar" /><span class="date pull-right">20 Oct.</span><span class="name">Adam</span> Hi! Can you fix my phone?
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/avatar4_50.jpg" alt="avatar" /><span class="date pull-right">2 Nov.</span><span class="name">Michael</span> Regards!
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/avatar3_50.jpg" alt="avatar" /><span class="date pull-right">2 Nov.</span><span class="name">Lucy</span> Hello, my name is Lucy
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <ul class="foot"><li><a href="#">View all messages </a></li></ul>           
              </li>
            </ul>
          </li>
          <li class="button dropdown">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="nano nscroller">
                  <div class="content">
                    <ul>
                      <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a></li>
                      <li><a href="#"><i class="fa fa-male success"></i> <b>Michael</b> commented on your link <span class="date">15 minutes ago.</span></a></li>
                      <li><a href="#"><i class="fa fa-bug warning"></i> <b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a></li>
                      <li><a href="#"><i class="fa fa-credit-card danger"></i> <b>Andrew</b> sent you a request <span class="date">1 hour ago.</span></a></li>
                    </ul>
                  </div>
                </div>
                <ul class="foot"><li><a href="#">View all activity </a></li></ul>           
              </li>
            </ul>
          </li>
          <li class="button"><a class="toggle-menu menu-right push-body" href="javascript:;"><i class="fa fa-comments"></i></a></li>				
        </ul>

      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>
  
  <!--Begining of content page-->
  <!--Content pages goes here-->
  
	<div class="cl-mcont">		<div class="row">
    <?php
      $this->load->view($content_page);
    ?>
	</div>
	<!--End of content page-->

	</div> 
	
</div>
<!-- Right Chat-->
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right side-chat">
	<div class="header">
    <h3>Chat</h3>
  </div>
  <div class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Richard Avedon</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Allen Collins</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Jaime Garzon</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Dave Grohl</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Victor Jara</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Ansel Adams</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Gustavo Cerati</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>
    </div>
    <div class="messages nano nscroller">
      <div class="content">
        <ul class="conversation">
          <li class="odd">
            <p>Hi Jane, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I was looking for you</p>
          </li>
          <li class="odd">
            <p>Tell me what you need?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter a message...">
        <span class="input-group-btn">
        <button type="button" class="btn btn-primary">Send</button>
        </span>
      </div>
    </div>
  </div>
</nav>
  
	
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.cookie/jquery.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.pushmenu/js/jPushMenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.ui/jquery-ui.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/behaviour/core.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap/dist/js/bootstrap.min.js"></script>
 

  <script type="text/javascript">
    var link = $('link[href="css/style.css"]');
    
    if($.cookie("css")) {
      link.attr("href",'css/skin-' + $.cookie("css") + '.css');
    }
    
    $(function(){
      $("#color-switcher .toggle").click(function(){
        var s = $(this).parent();
        if(s.hasClass("open")){
          s.animate({'margin-right':'-109px'},400).toggleClass("open");
        }else{
          s.animate({'margin-right':'0'},400).toggleClass("open");
        }
      });
      
      $("#color-switcher .color").click(function(){
        var color = $(this).data("color");
        $("body").fadeOut(function(){
          //link.attr('href','css/skin-' + color + '.css');
          $.cookie("css", color, {expires: 365, path: '/'});
          window.location.href = "";
          $(this).fadeIn("slow");
        });
      });
    });
  </script>
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.vectormaps/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.vectormaps/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/behaviour/dashboard.js"></script>
</body>

</html>
