<?php
include("connection/connect.php");
  

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];	
	$password=$_POST['password'];
			
			
			
	$sql = "INSERT INTO signup(firstname,lastname,email,password) VALUES('$fname','$lname','$email','$password')";
	 $query=mysqli_query($db, $sql);
	if($query)
	{
		header('location:signup_success.php');
	}
	
	

}
 

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>The Malaytional - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
		<div>
			<a href="index.php"><img src="images/logo.jpg" style="width: 710px; height:100px;" alt="Logo"></a>
		</div>
	
		
	</div>
	<div  style="background-color:;margin:auto;min-height:20px;display:<?php echo $none;?>;">
	<div  style="background-color:;margin-left:200px;width:950px;min-height:30px;">
		
	</div>	
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="featured.php">Recipe of The Month</a>
					</li>
					
					<li class="">
						<a href="about.php">About</a>
					</li>
					<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li><a href="login.php">login</a></li>';
								echo '<li class="current"> <a href="signup.php">signup</a></li>';
							}
						else
							{
									
									
									
									$logout= '<form action="login.php" method="post" >
									<input type="submit" id="logout" name="logout" value="logout" style="width:100px;color:#000;border:none;padding:5px;font-size:15px;"  ></form>';
							}

						?>
					
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
							<center><h3>Sign up</h3></center>
					    <form action='' method='post'>
					    	<div>
						    	<span><label>Please Enter Your First Name:</label></span>
						    	<span><input type="text" value="" name='fname'></span>
						    </div>
							<div>
						    	<span><label>Please Enter Your Last Name:</label></span>
						    	<span><input type="text" value="" name='lname'></span>
						    </div>
						    <div>
						    	<span><label>Please Enter Your Email:</label></span>
						    	<span><input type="text" value="" name='email'></span>
						    </div>
						    <div>
						     	<span><label>Please Enter Your Password:</label></span>
						    	<span><input type="text" value="" name='password'></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" name='submit' value="Submit" class="gray-button"></span>
						  </div>
					    </form>
						
					</div>
				</div>
			</div>
		</div>
		<div>
			<div>
				<h3>Recipe Video</h3>
				<a href="videos.php"><img src="images/mee-rebus.jpg" style="width: 150px; height:100px;" alt="Image"></a>
				<span>Authentic Mee Rebus</span>
			</div>
			<div>
				<h3>Featured Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.php"><img src="images/lempeng.jpg" style="width: 150px; height:100px;" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Original Lempeng</a></h2>
							<span>by: Isham</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/nasi-goreng-kampung.jpg" style="width: 150px; height:100px;" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Nasi Goreng Kampung</a></h2>
							<span>by: Faiz</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/koeyteow-goreng.jpg" style="width: 150px; height:100px;" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">Koey Teow Goreng</a></h2>
							<span>by: Hariz</span>
						</div>
					</li>
				</ul>
			</div>
			
			<div>
				<h3>Get Updates From Us!</h3>
				<a href="https://www.facebook.com" target="_blank" id="facebook">Facebook</a>
				<a href="https://twitter.com/i/flow/login" target="_blank" id="twitter">Twitter</a>
				<a href="https://www.youtube.com" target="_blank" id="youtube">Youtube</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy; The Malaytional 2023. All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>