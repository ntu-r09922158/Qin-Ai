<!DOCTYPE html>
<html lang="en">
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
				<a class="navbar-brand" href="index.html">親愛</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExampleDefault"
						aria-controls="navbarExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>	
			
			
			<div class="navbar-collapse collapse " id="navbarExampleDefault" style>
				<ul class="nav navbar-nav  mr-auto navbar-right" >
					<li class="nav item"><a href="index.html" id="1">介紹親愛</a></li>
					<li class="nav item"><a href="intro.html" id="2">關於我們</a></li>
					<li class="nav item"><a href="service.html" id="3">服務項目</a></li>
					<li class="nav item"><a href="station.html" id="4">據點位置</a></li>
					<li class="nav item"><a href="contact.php" id="5">聯繫我們</a></li>
					<li class="nav item">
						<form class="form-inline my-2 my-lg-0" action="contact.php">
							<div class="input-group">
								<input type="text" class="form-control mr-sm-2" 
									placeholder="搜索" aria-label="Search">
								<div class="input-group-btn">
									<button class="btn btn-default my-2 my-sm-0" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>	
								</div>
							</div>
						</form>
					</li>
					<a href="contact.php" id="a">中文</a>
					<a href="eng/contactE.php" id="b">English</a>
				</ul>	
						
					
				
			</div>
		</div>
	</nav>
	<div class="container-fluid contact">
			<form class="form-horizontal" action="contact.php">
			
				
				<div class="form-group row">
					<div class="col-md-4 col-sm-2"></div>
					<div class="col-md-4 col-sm-8">
						<img class="img-responsive" src="image/logo.png"></div>
					<div class="col-md-4 col-sm-2"></div>
				</div>
				
				<div class="form-group row">
					<div class="col-md-3 col-sm-0"></div>
					<div class="col-md-1 col-sm-4">
						<label class="control-label" for="title">標題:</label></div>
					<div class="col-md-5 col-sm-8">
						<input type="text" class="form-control" id="title" placeholder="Enter title" name="title"></div>
					<div class="col-md-3 col-sm-0"></div>
				</div>
				
				<div class="form-group row">
					<div class="col-md-3 col-sm-0"></div>
					<div class="col-md-1 col-sm-4">
						<label class="control-label" for="msg">留言:</label> </div>
					<div class="col-md-5 col-sm-8">
						<input type="text" class="form-control" id="message" placeholder="Enter message" name="message"></div>
					<div class="col-md-3 col-sm-0"></div>
				</div>
				
				<div class="form-group row">   
					<div class="col-md-3 col-sm-0"></div>		
					<div class="col-md-1 col-sm-4">
						<label class="control-label" for="email">電郵地址:</label></div>	
					<div class="col-md-5 col-sm-8">
						<input type="email" class="form-control" id="email" placeholder="Reply email" name="email"></div>	
					<div class="col-md-3 col-sm-0"></div>
				</div>
				
				<div class="form-group row">        
					<div class="col-md-5 col-sm-3"></div>
					<div class=" col-md-2 col-sm-6">
						<button type="submit" class="btn btn-default" id="button1">發送</button></div>
					<div class="col-md-5 col-sm-3"> </div>
				</div>
			
			 </form> 
<!--
                   <?php              
						
						
					if($_REQUEST["title"]!=NULL && $_REQUEST["email"]!=NULL && $_REQUEST["message"]!=NULL){

						date_default_timezone_set("Asia/Taipei");
						$datetime = date('Y-m-d H:i:s');
	
						$referno = date('Ymd');
                        $title = $_REQUEST["title"];
                        $message = $_REQUEST["message"];
						$email = $_REQUEST["email"];
							
 						$servername = "127.0.0.1";
                        $username = "root";
                        $password = "";
                        $dbname = "qinai";
                        
						
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
						
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
							//echo $datetime."<br>".$referno."<br>".$title."<br>".$message."<br>".$email; 
						
                        
						
                        $sql = "INSERT INTO message (id,referno,datetime,email,title,message)
                        VALUES ('','$referno','$datetime','$email', '$title', '$message')";
                    
                        $result = mysqli_query($conn, $sql) or die('here1');
						
						if($result){
							echo '<script type="text/javascript">
									window.alert("Your message was recorded!");
								</script>' ;
						}
					}
					
    			 ?> 
                --> 

	</div>		
	
	<div class="container-fluid "  style="padding-left:0px; padding-right:0px;">
			<section style="height:80px;"></section>
	
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<!--<h2>Logo</h2>-->
				<img src="image/logo.png" style="width:100px; height:100px;">
                <p>我们希望把仁愛鄉親愛村的自然美與文化美傳遞出去，讓周遭甚至是遠方的其他人知道，也讓想為他們做點什麼卻不知從何開始的熱心人士，透過我們網站的分享，而有了一些想法和實際行動</p>
                <p>集結眾人的力量，我們可以做得更多</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>目錄 —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">旅遊</a></li>
                        <li><a href="#">自然</a></li>
                        <li><a href="#">探索</a></li>
                        <li><a href="#">科學</a></li>
                        <li><a href="#">建議</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
						<li><a href="index.html">介紹親愛</a></li>
                        <li><a href="intro.html">關於我們</a></li>
                        <li><a href="service.html">服務項目</a></li>
                        <li><a href="station.html">據點位置</a></li>
                        <li><a href="contact.php">聯繫我們</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>跟隨我們</h4>
            	<ul>
                	<li><a href="#">臉書</a></li>
                	<li><a href="#">推特</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS訂閱</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>電子信件</h4>
                <p>一个穿着模糊西装的流浪者不会惊动真正的企鹅</p>
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