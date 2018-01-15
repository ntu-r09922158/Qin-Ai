<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="script/style0.css" rel="stylesheet" type="text/css">
	<!--<link href="style.css" rel="stylesheet" type="text/css"><script src="jQuery.js"></script>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script> 

		
  </head>
  
  <body>
  
	<nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<div class="navbar-header">
				<img class="navbar-brand" src="image/logo.png">
				<a class="navbar-brand" href="index.html">Qin Ai</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExampleDefault"
						aria-controls="navbarExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>	
			
			
			<div class="navbar-collapse collapse " id="navbarExampleDefault" style>
				<ul class="nav navbar-nav  mr-auto navbar-right" >
					<li class="nav item"><a href="indexE.html" id="1">Intro</a></li>
					<li class="nav item"><a href="introE.html" id="2">About Us</a></li>
					<li class="nav item"><a href="serviceE.html" id="3">Service</a></li>
					<li class="nav item"><a href="stationE.html" id="4">Station</a></li>
					<li class="nav item"><a href="contactE.php" id="5">Contact Us</a></li>
					<li class="nav item">
						<form class="form-inline my-2 my-lg-0" action="/action_page.php">
							<div class="input-group">
								<input type="text" class="form-control mr-sm-2" 
									placeholder="Search" aria-label="Search">
								<div class="input-group-btn">
									<button class="btn btn-default my-2 my-sm-0" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>	
								</div>
							</div>
						</form>
					</li>
					<a href="../search.php" id="a">中文</a>
					<a href="searchE.php" id="b">English</a>
				</ul>	
						
					
				
			</div>
		</div>
	</nav>

<div class="container">
	<form action = "search.php" method="get">
		<b>Please enter your search detail:</b><br><br>
			&nbsp;&nbsp;&nbsp;Email: <input type = "text" name = "email" placeholder="xxx@gmail.com"><br><br>
			&nbsp;&nbsp;&nbsp;Date: <input type = "text" name = "date" placeholder="yyyyMMdd">&nbsp;&nbsp;&nbsp;
		<input type = "submit" value="Send">
			<br><br>
		<b>Search Result:</b><br><br>
		&nbsp;&nbsp;&nbsp;<u>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Email Address&nbsp&nbsp&nbsp;	Title&nbsp&nbsp&nbsp;	Message</u>
	</form>

<?php

if($_REQUEST["email"]!=NULL || $_REQUEST["date"]!=NULL ){
	if($_REQUEST["email"]!=NULL)	$email=$_REQUEST["email"];
		else $email=NULL;
	if($_REQUEST["date"]!=NULL)		$date=$_REQUEST["date"];
		else $date=NULL;


	$db_host="127.0.0.1";
	$db_user="root";
	$db_password="";
	$db_name="qinai";

	$conn=mysqli_connect($db_host, $db_user, $db_password, $db_name);

	mysqli_query($conn, "SET NAMES UTF8");

		if($email!=NULL && $date!=NULL )
			$sql="select * from message where email='$email' and date='$date'";
		
		if($email!=NULL && $date==NULL )
			$sql="select * from message where email='$email'";
		
		if($email==NULL && $date!=NULL )
			$sql="select * from message where referno='$date'";

	$result = mysqli_query($conn, $sql) or die('here1');


	while ($row = mysqli_fetch_array($result,  MYSQL_ASSOC)) {
					echo "&nbsp&nbsp&nbsp".$row['referno']."&nbsp&nbsp&nbsp";
					echo $row['email']."&nbsp&nbsp&nbsp";
					echo $row['title']."&nbsp&nbsp&nbsp";
					echo $row['message']."<br><br>";
				   
		}

	}
?>


</div>

<div class="container-fluid "  style="padding-left:0px; padding-right:0px;">
			<section style="height:80px;"></section>
	
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<!--<h2>Logo</h2>-->
				<img src="image/logo.png" style="width:100px; height:100px;">
                <p>We hope to pass out the natural beauty and cultural beauty of the benevolent love village so that other people around and far away will know it and let the enthusiastic people who want to do something for them but do not know where they started to share through our website. Some ideas and practical actions</p>
                <p>We can do more to from the strength of everyone</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
						<li><a href="indexE.html">Intro</a></li>
                        <li><a href="introE.html">About Us</a></li>
                        <li><a href="serviceE.html">Service</a></li>
                        <li><a href="stationE.html">Station</a></li>
                        <li><a href="contactE.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
    
	</div>	
</body>
</html>