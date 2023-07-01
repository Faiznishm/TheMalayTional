<?php
include('connection/connect.php');

 session_start(); //session started by unique user_id
  
error_reporting(0);                                                                      //for printing the  text
  $sql = "SELECT * FROM signup where user_id='".$_SESSION["user_id"]."'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $name=$row['firstname'];

  if($_SESSION["user_id"]==0)
  {
	  $none='none';
  }

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>The Malaytional - Video Recipes</title>
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
		<p style='float:right;color:#000000;margin-left:px;font-size:20px;'> <span style='margin-right:0px;display:inline-block;margin-right:5px;'><?php echo $name ?></span>
			<image src='images/user.png'  style='display:inline-block;height:20px;width:20px;margin-top:5px;margin-right:5px;'/>
	</div>	
	</div>
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
						<li class="current">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="featured.php">Recipe of The Month</a>
					</li>
					
					<li>
						<a href="about.php">About</a>
					</li>
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<div>
							<ul>
								<li>
									<h3>Learn how to cook Nasi Kerabu <a href="https://www.youtube.com/watch?v=9CPcDysjJQA">Here!</a></h3>
									<a href="index.html"><img src="images/nasi-kerabu.jpg" alt="Image"></a>
									<p>
										Learn how to cook this Kelantan most favorite dish, <a href="https://www.youtube.com/watch?v=9CPcDysjJQA">Nasi Kerabu</a>. If you're interested, you can watch my tutorial video to learn the step-by-step process of preparing this flavorful Malaysian rice dish.
									</p>
								</li>
								<li>
								<h3>Learn how to cook Mee Bandung <a href="https://www.youtube.com/watch?v=OhFUjXAbLck">Here!</a></h3>
									<a href="index.html"><img src="images/mee-bandung.jpg" alt="Image"></a>
									<p>
									Learn how to cook this Johor signature dish, <a href="https://www.youtube.com/watch?v=OhFUjXAbLck">Mee Bandung</a>. I love teaching people how to cook Mee Bandung! It's a delicious Malaysian dish. Check out my tutorial video for step-by-step instructions and become a master of this flavorful noodle dish in no time!
									</p>
								</li>
							</ul>
						</div>
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
				 
			<div style="display:<?php echo $none;?>;">
			<h3>Settings</h3>
			<a href="#"  ><?php echo $logout;?></a> 
		</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy;The Malaytional 2023. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>