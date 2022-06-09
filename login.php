<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<head>
<script type="text/javascript">
        
            window.history.forward();
       
    </script>
<link rel="stylesheet" href="CSS/home.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<script src="home.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body style="background-color:rgba(173,216,230,0.2)">
<div class ="nav_menu">
  <div class="menu_img" >
  <img src ="IMG/DYK_logo.png" class ="DYKlogo">
  </div>
  <div class="nav_tab1">
  <ul class="nav nav-tabs" >
    <a class="nav-link " href="index.html">Home</a>
	<a class="nav-link active"  href="login.php">Login</a>
   <a class="nav-link"  href="Explore.html">Explore</a>
     <a class="nav-link"  href="Fun-facts.php">Fun-facts</a>
      <a class="nav-link"  href="Contribute.html">Contribute</a>
    <a class="nav-link" href="About-us.html">About-us</a>
  <a class="nav-link" href="Feedback.html">Feedback</a>
</div>
</div>
  
</ul>
<div class="">

		<div class="fun_bodyx"style="display: flex;">

								<div class=" border-warning mb-3  " style="max-width: 50rem; ">
									  <div class="card-header"> <div class="xx">
										  <h3>Fascinating Password Facts That Show Why Password Security is Important</h3> 
									  																  
									  </div>
									  </div>
									  <div class="card-body" ><h5><strong>
									 When people are asked to include a number in a password, the majority simply add a “1” or a “2” at the end.
									</br></br>
									 Two-thirds of people use no more than two passwords for all their online accounts
										</br></br>
										80% of hacking-related breaches are linked to passwords

										</br></br>
										59% use their name or birthdate in their password
										</br></br>
										
										Wants Names, Sports, Food, Places, Animals, Famous People, and Characters are the Most Common Passwords
										</br></br>
										The minimum password length experts now recommend to avoid being compromised by brute-force cracking is 13
									  </div></br></br>
									</div></h5></strong>
									
								
									<div class=" border-danger mb-3" style="width:45% ">
									  <div class="card-header">
									  <h2 > Enter your Credentials :-</h2></br>
									 <form action="login.php" method="post"> </div>
									 <div class="card-body" style=" display: flex; flex-direction: column;padding :25px;">

							<h4>					<div style="flex; padding :10px">
				<label style="margin-left: 5rem;"><b> Username : </b></label>
				<input type="email" placeholder="Enter Username" name="email" style="width:45% " required></div>

				<div style="flex ;padding :10px"><label><b><label style="margin-left: 5.3rem;"> Password :  </b></label>
				<input type="password" placeholder="Enter Password" name="password" style="width:45% " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required></div>
			<div style="flex ;padding :10px;margin-left: 17rem;">
				<button class="btn btn-info" name="login" type="submit" style="width:50%;  padding: 10px;"><strong>Login</button></br>
</strong></div><div style="flex ;padding :10px;margin-left: 17rem;">
				<h6>Not registered <a href="signup.html" >Register here</h6></button></a></div>
				
</h4>
			</div>
		</form>

									  
									  </div></div>
									  
									  </div>
									
									
									
									


</div>
</div>


	
		
		<?php
			if(isset($_POST['login']))
			{
				@$email=$_POST['email'];
				@$password=$_POST['password'];
				$query = "select * from registration where email='$email' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $password;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error.........")</script>';
				}
			}
			else
			{
			}
		?>
		
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