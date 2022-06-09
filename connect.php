<?php
	$First_Name = $_POST['First_Name'];
	$Last_Name = $_POST['Last_Name'];
	$Email 		= $_POST['Email'];
	$mobile_no	= $_POST['mobile_no'];
	$psw		= $_POST['psw'];
	$Dob		= $_POST['Dob'];
	$DEPT		= $_POST['DEPT'];

			
			
			$conn = new mysqli('localhost','root','','dyk');
			if($conn->connect_error)
				{
					die('Connection Failed : '.$conn->connect_error);
				}
			else
				{
				$stmt = $conn->prepare("insert into registration(First_Name,Last_Name,Email,mobile_no,psw,Dob,DEPT)
										values(?,?,?,?,?,?,?)");
										
				$stmt->bind_param("sssisss",$First_Name, $Last_Name, $Email, $mobile_no, $psw, $Dob, $DEPT);
				$stmt->execute();
				echo "Registration Succesfully....";
				$stmt->close();
				$conn->close();
				}

?>