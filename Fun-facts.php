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
																	$sql = "SELECT Category ,Details FROM contribute ORDER BY RAND() LIMIT 11";
																	$result = mysqli_query($con,$sql);

																	if ($result->num_rows > 0) {
																		
																	 
																	  while($row = $result->fetch_assoc()) {
																		 
																														
																				echo '<div class="card mb-3 ff" style="max-width: 22rem; ">
																		  <div class="card-header">Category : '.$row["Category"].'</div>
																		  <div class="card-body">'.$row["Details"].'</div></div>';																			
																				
																	  }
																	
																	 }
																	  else {
																	  echo "you have no posts yet";
																	};
																	
																?>

</div>


<script>
const collection = document.getElementsByClassName("card");
collection[0].classList.add("border-info");
collection[1].classList.add("border-success");
collection[2].classList.add("border-warning");
collection[3].classList.add("border-danger");
collection[5].classList.add("border-warning");
collection[6].classList.add("border-success");
collection[7].classList.add("border-info");
collection[8].classList.add("border-success");
collection[9].classList.add("border-info");
collection[10].classList.add("border-danger");
</script>
			

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