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
	<title>The Malaytional - Featured Recipe</title>
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
					<li class="current">
							<a href="featured.php">Recipe of The Month</a>
					</li>
					
					<li>
						<a href="about.php">About</a>
					</li>
					<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li><a href="login.php">login</a></li>';
								echo '<li><a href="signup.php">signup</a></li>';
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
						<div>
							<h3>MEE BANDUNG</h3>
							<p>
							Mee bandung is a Malay noodle dish that originated in Muar. The dish combines yellow noodles with a thick, spicy sauce that consists of chilies, onions, shrimp paste, and dried shrimps.
							
							</p>
							<a href="index.php"><img src="images/mee-bandung.jpg" style="width: 300px; height:250px;" alt="Image"></a>
							<p>
								<br>What is Mee Bandung?

Mee Bandung is a traditional Malay noodle dish that originated in Muar. The Malay word bandung is roughly translated as mixed or paired. It refers to the mixture of many ingredients in one bowl.

The thick and spicy gravy of Mee Bandung plays a vital role in this dish. The flavourful soup is usually made from beef broth mixed with chilli, onions, garlic, eggs, shrimp paste, and dried shrimp. At some places, fishcakes, meats, and vegetables are added to enhance the flavour of Mee Bandung.

The spicy gravy poured on top of yellow noodles and then garnished with dried shallot, red chillies, and blanched bean sprouts. A squeeze of lime at the side completes this flavourful dish.
							</p>
							<p>
								<br>
								Mee Bandung originated from Muar, Johor. Traditionally, Mee Bandung consists of noodles and eggs with spicy soup. The soup is made from a mixture of chilli, spices, onion, and shrimp paste. Then, it was improved with the addition of shrimps, meats, fishcakes, and vegetables.  

There are many versions of Mee Bandung depending on states and ingredient used. For example, there are Mee Bandung Daging (beef), Mee Bandung Ayam (chicken), Mee Bandung Sotong (squid) and Mee Bandung Udang (prawn).
							</p>
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
				 
			</div>
			<div style="display:<?php echo $none;?>;">
				<h3>Settings</h3>
				<a href="#"  ><?php echo $logout;?></a> 
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