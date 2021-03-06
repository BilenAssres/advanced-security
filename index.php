<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Final Project: Secure Web App </title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/iot.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="border-bottom: solid 1px; padding: 10px 0px;">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style=" color: #8c30f5; font-size:2rem;">Online feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					
				
				
								
	
        <li><a  href="index.php?info=login" class="login-button">Login</a><li>
        <li><a  href="index.php?info=registration" class="signup-button"></i>Sign Up</a></li>

    
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
   
	
    <!-- Page Content -->
    <div class="container" style="margin-top: 30px;">
         <div class="row">      
			<div class="col-sm-6" style="margin-top:60px;margin-bottom:80px">
				<h1 class="title">About the project</h1>
				<p style="margin-bottom: 20px;"> The app is intended to collect citizens' complaints/ideas they noticed about Addis Ababa City roads such as parking problems, manholes, public property abuse, road defects, and so on. </p>
                <a href="index.php?info=registration" class="get-started">Get Started</a>
			</div>
            <div class="col-sm-6" align="right">
                <div><img class="" src="./assets/dist/img/c.png"></div>
            </div>
        </div>
            <div class="row members" style="margin: 20px;">
                <div class="col-sm-4" align="center">
                    <h4 style="font-weight: 700;">Group Members</h4>
                    <h5>Adey Amare </h5>
                    <h5>Beza Tsegaye </h5>
                    <h5>Bilen Gizachew</h5>
                    <h5>Hanna Girma</h5>
                </div>
                <div class="col-sm-4" align="center">
                    <h4 style="font-weight: 700;">ID Number</h4>
                    <h5>ATR/7817/10 </h5>
                    <h5>ATR/0075/10</h5>
                    <h5>ATR/0240/10</h5>
                    <h5>ATR/3076/10</h5>
                </div>
                <div class="col-sm-4" align="center">
                    <h4 style="font-weight: 700;">Section Number</h4>
                    <h5>Section Two</h5>
                    <h5>Section One </h5>
                    <h5>Section One</h5>
                    <h5>Section One</h5>
                </div>

            </div>
			
			
			
			
				<?php } ?>
            
    </div>
    <!-- /.container -->
	
	<!-- <div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Developed By ....... 	<a href="http://www.phptpoint.com">Phptpoint.com</a> </span>
	</div> -->
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
