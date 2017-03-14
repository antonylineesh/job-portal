<?php
session_start();

$id=$_SESSION["id"];
$usern=$_SESSION["usern"];


include("conn.php");
$rs=mysqli_query($con,"select * from j_reg where id='".$id."'");
while($arr=mysqli_fetch_row($rs))
{

	$fn=$arr[1];
	$mbno=$arr[2];
	$addr=$arr[3];
	$dob=$arr[4];
	$sex=$arr[5];
	$city=$arr[6];
	$place=$arr[7];
	$ska=$arr[8];
	$exp=$arr[9];
	$addl=$arr[10];
	$edu=$arr[11];
	$resume_name=$arr[12];
 	$pic_name=$arr[13];
	
	
}
$_SESSION["resume_name"]=$resume_name;
?>
<?php

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li></li>
			            <li></li>
			            <li><a href="location.html">Jobs by Location</a></li>
			            <li></li>
			            <li></li>
			            <li><a href="location.html">Jobs by Company</a></li>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a href="services.html">Cources</a></li>
 						            <li class="divider"></li>
						            <li><a href="services.html">MBA</a></li>
						            <li><a href="services.html">MCA</a></li>
						            <li class="divider"></li>
						            <li><a href="services.html">MS</a></li>
						            <li class="divider"></li>
						            <li><a href="services.html">Btech</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a href="services.html">Workshops</a></li>
						            <li><a href="services.html">How to write resume</a></li>
						            <li><a href="services.html">How to crack interview</a></li>
						            <li class="divider"></li>
						            <li><a href="services.html">How to prepare for GD</a></li>
						            <li class="divider"></li>
						            <li><a href="services.html">To improve technical skill</a></li>
					            </ul>
				            </div>
				           
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="login.php">Recruiter Updates</a></li>
			            <li><a href="recruiters.html">Recruiters you are following</a></li>

		            </ul>
		        </li>
		       
		        <li><a href="login.php">Login</a></li>

	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>

<div class="container ">
      <div class="col-lg-3  thumbnail well">
   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 " style="padding:25px">  <?php echo "<img class='img-responsive' src='jobseeker/$pic_name.jpg' />";?></div>
   <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12"></div>  
  <center><h2><?php echo $fn ?></h2></center>
 
  <div class="caption-full">
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li class="active"><a href="http://www.jquery2dotnet.com"><i class="fa fa-list-alt fa-fw"></i>Profile</a></li>
                
                <!--<li><a href="profile-show.html"><i class="fa fa-file-o fa-fw"></i>Show Case</a></li>-->
				<li><a href="32.pdf"><i class="fa fa-file fa-fw"></i>Resume</a></li>
                <!--<li><a href="profile-history.html"><i class="fa fa-bar-chart-o fa-fw"></i>History</a></li>
                <li><a href="profile-request.html"><i class="fa fa-table fa-fw"></i>Requests</a></li>
                <li><a href="profile-notification.html"><i class="fa fa-tasks fa-fw"></i>Notifications</a></li>
                <li><a href="profile-skill.html"><i class="fa fa-calendar fa-fw"></i>Skills & Ratings</a></li>-->
                
                <li><a href="#"><i class="fa fa-cut fa-fw"></i>Update</a></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
            </ul></div>

      </div>

  <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 ">
           
                     <div class="thumbnail">
                   
                    <div class="caption-full ">
                    
                        <h4><a href="#">About Me</a>
                        </h4>
                        <p><?php echo nl2br($addl); ?></p>
                    </div>
                   
                </div>

                <hr>
 
                <div class="col-lg-6 col-md-12 col-sm-12 colxs-12 thumbnail ">
                <div class="col-lg12"><h3>Basic Details</h3><hr></div>
                        <div class="col-lg-6">Date Of Birth</div>
                        <div class="col-lg-6"><?php echo $dob?></div>
                    <hr>
                        <div class="col-lg-6">Gender</div>
                        <div class="col-lg-6"><?php echo $sex?></div>
                    <hr>
                        <div class="col-lg-6">Email</div>
                        <div class="col-lg-6"><?php echo $usern;?></div>
                    <hr>
                </div>
      
                <div class="col-lg-5 col-lg-offset-1 col-md-12 col-sm-12 colxs-12 thumbnail " >
                <div class="col-lg12" 
><h3  >Eduational Qualifications</h3><hr></div>
                        <!--<div class="col-lg-6">Diploma in animation</div>
                        <div class="col-lg-6">Comleted</div>
                    <hr>
                        <div class="col-lg-6">Diploma in bmms</div>
                        <div class="col-lg-6">Completed</div>
                    <hr>
                        <div class="col-lg-6">Btech in cs</div>
                        <div class="col-lg-6">On run</div>-->
                        <?php 
						//$str='JAVA-Biginner,PHP-Advanced,Android-Middle';
						$arr1=explode(',',$edu);
						$l=1;$j=1;$zz=array();
						foreach ($arr1 as $i)
						{
						
							$zz[$l]=explode('-',$i);
							$l=$l+1;
						}
						
						$n=count($arr1);
						
						while($j<=$n)
						{
							
							foreach($zz[$j] as $j1)
							{
								?>
								 <div class="col-lg-6"><?php echo $j1; ?></div>	
							
							<?php 
							
							}
							
							echo '<hr>';						
							$j=$j+1;
							

						}
					?>

                     

                </div>

<hr>
<hr>
 
                <div class="col-lg-6 col-md-12 col-sm-12 colxs-12 thumbnail ">
                <div class="col-lg12">
                  <h3>Contact Information</h3>
                  <hr></div>
                        <div class="col-lg-6">Address</div>
                        <div class="col-lg-6"><?php echo nl2br($addr); ?></div>
                    <hr>
                        <div class="col-lg-6">City</div>
                        <div class="col-lg-6"><?php echo $city; ?></div>
                    <hr>
                        <div class="col-lg-6">Place</div>
                        <div class="col-lg-6"><?php echo $place; ?></div>
                     

                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-12 col-sm-12 colxs-12 thumbnail " >
                <div class="col-lg12" >
                  <h3  >Skills Area</h3>
                  <hr></div>
                  <?php 
						//$str='JAVA-Biginner,PHP-Advanced,Android-Middle';
						$arr1=explode(',',$ska);
						$l=1;$j=1;$zz=array();
						foreach ($arr1 as $i)
						{
						
							$zz[$l]=explode('-',$i);
							$l=$l+1;
						}
						
						$n=count($arr1);
						
						while($j<=$n)
						{
							
							foreach($zz[$j] as $j1)
							{
								?>
								 <div class="col-lg-6"><?php echo $j1; ?></div>	
							
							<?php 
							
							}
							
							echo '<hr>';						
							$j=$j+1;
							

						}
					?>

                     

                </div>

<hr>



  </div>
</div>


<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Sign In</a></li>
				<li><a href="login.php">Join Now</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.html">Features</a></li>
				<li><a href="terms.html">Terms of use</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="jobs.html">Post a Job</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		
		<div class="col-md-3 grid_3">
			<h4>Seeking</h4>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_bottom">	
  <div class="container">
    <div class="col-sm-2">
  		<ul class="f_list2">
			
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			
	    </ul>
  	</div>
  	<div class="col-sm-6 footer_text">
      
  	</div>
  	<div class="clearfix"> </div>
	<div class="copy">
		<p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
  </div>
</div>
</body>
</html>	
