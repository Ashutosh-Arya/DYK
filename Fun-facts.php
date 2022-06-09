<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<script src="home.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class ="nav_menu">
  <div class="menu_img" >
  <img src ="IMG/DYK_logo.png" class ="DYKlogo">
  </div>
  <div class="nav_tab1">
  <ul class="nav nav-tabs" >
    <a class="nav-link " href="index.html">Home</a>
	<a class="nav-link"  href="login.php">Login</a>
   <a class="nav-link"  href="Explore.html">Explore</a>
     <a class="nav-link active"   href="Fun-facts.php">Fun-facts</a>
      <a class="nav-link"  href="Contribute.html">Contribute</a>
    <a class="nav-link" href="About_us.html">About-us</a>
  <a class="nav-link" href="Feedback.html">Feedback</a>
</div>
  
</ul>

</div>
<h3 style="padding:10px;text-align:center;" >Shared by users</h3>
<div class="Fun-facts_body">


<div class="fun_body">
											
												
																								
																<?php																		
																		;					
																	$sql = "SELECT Category ,Details FROM contribute ORDER BY RAND() LIMIT 12";
																	$result = mysqli_query($con,$sql);

																	if ($result->num_rows > 0) {
																	
																	  while($row = $result->fetch_assoc()) {
																		 

																		  
																								  
																	echo '<div class=" card  border-secondary mb-3 ff" style="max-width: 22rem;">
																		  <div class="card-header">Category : '.$row["Category"].'</div>
																		  <div class="card-body">'.$row["Details"].'</div></div>																			
																	  <div class=" card  border-secondary mb-3 ff" style="max-width: 22rem;">
																		  <div class="card-header">Category : '.$row["Category"].'</div>
																		  <div class="card-body">'.$row["Details"].'</div></div>';	
																	
																	 }} else {
																	  echo "you have no posts yet";
																	};
																	
																?>
								<div class=" card border-warning mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">Some quick example text to build on the card title and make up the bulk of the card's content
										 
									
									  </div>
									</div>
									
								
									<div class=" card  border-secondary mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										Some quick example text to build on the card title and make up the bulk of the card's content
			
			
											</div>
									  </div>
									
									
									<div class=" card border-success mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										Some quick example text to build on the card title and make up the bulk of the card's content
									  </div>
									</div>
									
									<div class="card border-dark mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
					
									
									<div class="card border-danger mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										Some quick example text to build on the card title and make up the bulk of the card's content
									  </div>
									</div>
						
									<div class="card border-warning mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
							
									<div class="card border-info mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									
									<div class="card border-dark mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
					
				
									<div class="card border-success mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
								
									<div class="card border-dark mb-3 ff" style="max-width: 22rem;">
									  <div class="card-header">Header</div>
									  <div class="card-body">
										
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									  </div>
									</div>
									


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