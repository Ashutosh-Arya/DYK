<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<head>
</head>


<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<script src="home.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<body>


	<div class ="nav_menu">
												  <div class="menu_img" > <img src ="IMG/DYK_logo.png" class ="DYKlogo">  </div>
												  <div class="nav_tab1">
												  <ul class="nav nav-tabs" > 
													

												  
													<a class="nav-link active" >
														 
														<?php // outpout from sesssion
														$_SESSION['email']; ?></h3></center>												
																								
																<?php																		
																		@$em=$_SESSION['email'];					
																	$sql = "SELECT email, name FROM registration where email='$em'";
																	$result = mysqli_query($con,$sql);

																	if ($result->num_rows > 0) {
																	
																	  while($row = $result->fetch_assoc()) {
																		  echo"<center>Posts by -  " ;
																	echo "</td><td>".$row["name"]."</td></tr></h3></center>";
																	  }
																	  echo "</table>";
																	} else {
																	  echo "0 results";
																	};
																	
																?></a>       <a class="nav-link">                            </a>        
																<a class="nav-link " href="homepage.php">Back</a>
																						
</div>
</div>
				<div class="body">
		<h2>posts by you 
		
		<?php // outpout from sesssion
														$_SESSION['email']; ?></h3></center>												
																								
																<?php																		
																		@$em=$_SESSION['email'];					
																	$sql = "SELECT Category, Details FROM contribute where email='$em'";
																	$result = mysqli_query($con,$sql);

																	if ($result->num_rows > 0) {
																	
																	  while($row = $result->fetch_assoc()) {
																		  echo '<div class=" card  border-secondary mb-3 ff" style="max-width: 22rem;">
																		  <div class="card-header">Category : '.$row["Category"].'</div>
																		  <div class="card-body">'.$row["Details"].'</div></div>';																				
																	
																	
																	 }} else {
																	  echo "you have no posts yet";
																	};
																	
																?>
		
		</h2>
		</div>		
		
						
		
		
		<div class= "Bottom">
						<div class ="Bottom1">
						<img src ="IMG/bottom_logo.png"  Class=""  style="padding-top:10px">
						</div>
						<div class ="Bottom2">
						All the information based on internet research ..
						<h5>" DYK "</h5>
						</div>
		</div>
</body>
</html>