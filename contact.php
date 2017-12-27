<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
		<script> 
			$(document).ready(function(){
				$("#1").mouseover(function(){ 
				$("#1").animate({fontSize: '2em'}, "slow");
				});
				$("#1").mouseleave(function(){ 
				$("#1").animate({fontSize: '1em'}, "slow");
				});
				
				$("#2").mouseover(function(){ 
				$("#2").animate({fontSize: '2em'}, "slow");
				});
				$("#2").mouseleave(function(){ 
				$("#2").animate({fontSize: '1em'}, "slow");
				});
				
				$("#3").mouseover(function(){ 
				$("#3").animate({fontSize: '2em'}, "slow");
				});
				$("#3").mouseleave(function(){ 
				$("#3").animate({fontSize: '1em'}, "slow");
				});
				
				$("#4").mouseover(function(){ 
				$("#4").animate({fontSize: '2em'}, "slow");
				});
				$("#4").mouseleave(function(){ 
				$("#4").animate({fontSize: '1em'}, "slow");
				});
				
				$("#5").mouseover(function(){ 
				$("#5").animate({fontSize: '2em'}, "slow");
				});
				$("#5").mouseleave(function(){ 
				$("#5").animate({fontSize: '1em'}, "slow");
				});
			});
		</script>
    </head>
    
    <body>
    	<div class="blue-bg content-width">
        	<div class="header">
            	<div class="header1">
                    <h1>Qin Ai</h1>
                </div><!--	End of Header1-->
                <div class="header2">
                    <ul>
                        <li><a href="index.html" id="1">MAIN</a></li>
                        <li><a href="intro.html" id="2">INTRO</a></li>
                        <li><a href="service.html" id="3">SERVICE</a></li>
                        <li><a href="station.html" id="4">STATION</a></li>
                        <li><a href="contact.php" id="5">CONTACT US</a></li>
                    </ul>
                </div><!--	End of Header2-->
            </div><!--	End of Header-->
            <div class="contentct">
            	<div class="content1">
                	<h1>Contact Us</h1>
                </div><!--	End of Content1-->
                <!--<img src="images/main/mainpagephoto.jpg">-->
                <div class="content2">
                    <form action="contact.php"  method="get">
                        <table>
                            <tr>
                                <td>Title:</td>
                                <td><input type = "text" name = "title" style="width:300px; height:30px; border-radius:10px; background-color:#CCDDFF"></td>
                            </tr>
                            
                            <tr>
                                <td>Message:</td>
                                <td><input type = "text" name = "message" style="width:300px; height:60px; border-radius:10px; background-color:#CCDDFF"></td>
                            </tr>
                            
                            <tr>
                                <td>Reply Email:</td>
                                <td><input type = "text" name= "email" style="width:300px; height:30px; border-radius:10px; background-color:#CCDDFF"></td>
                            </tr>
                            
                            <tr>
                            	<td><input type = "submit" value="Send"></td>
                            </tr>
                         </table>
                         
                    </form>
                    <!--
                   <?php              
						
						
					if($_REQUEST["title"]!=NULL && $_REQUEST["email"]!=NULL){

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
                        
						echo "Please check: "."<br>";
						echo "Date: ".$datetime."<br>";
                        echo "Refer No: ".$referno."<br>";
                        echo "Title: ".$title."<br>";
						echo "Message: ".$message."<br>";
						echo "Reply Email: ".$email."<br>";
                      
						
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        
                        $sql = "INSERT INTO message (id,referno,datetime,title,message,email)
                        VALUES ('','$referno','$datetime','$title', '$message', '$email')";
                        
                        $result = mysqli_query($conn, $sql) or die('here1');
					}
    			 ?> 
                 -->
    			</div><!--	End of Content2-->
    		</div><!--	End of Contentct-->
        </div>
       
    </body>
</html>

     