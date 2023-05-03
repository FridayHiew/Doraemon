
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['UserID']);
$fullname = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$contact = mysqli_real_escape_string($link, $_REQUEST['ContactNumb']);
$email = mysqli_real_escape_string($link, $_REQUEST['EmailAdds']);
$AccessRight = mysqli_real_escape_string($link, $_REQUEST['AccessRight']);
$Remarks = mysqli_real_escape_string($link, $_REQUEST['Remarks']);

// Attempt insert query execution
$process  = $_POST["submit"];
$RequestModule="User Management";
 
// Processing form data when form is submitted
 
 
 
$username	=trim($username);
$fullname	=trim($fullname);
$email		=trim($email);
$Remarks 	=trim($Remarks);
$contact 	=trim($contact);

 
 
if($process=="cancel") {  
		header("Location:../page/UserManagement.php");
		exit();
	}	


else if(empty(trim($_POST["UserID"]))){

	echo "<script>
	alert('Please fill up Username!!');
	window.location.href='../page/DraftUser.php?id=$username';
	</script>";	
 }
 
else if(empty(trim($_POST["AccessRight"]))){

	echo "<script>
	alert('Please select access right!!');
	window.location.href='../page/DraftUser.php?id=$username';
	</script>";	
 }


else {
			if($process=="save") {      
	
							$request_status="Draft";
								
								$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,remarks,requeststatus,RequestModule,access,contact,MakerID,LastUpdateBy,Request) VALUES ('$username', '$fullname', '$email','$Remarks','$request_status','$RequestModule','$AccessRight','$contact','$maker','$maker','Add')";

								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User changed save as Draft!!');
									window.location.href='../page/UserManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute Save. ";
								}
								}
			
					else if($process=="submit") {
							$request_status="Pending Approval";
								
								$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,remarks,requeststatus,RequestModule,access,contact,MakerID,LastUpdateBy,Request) VALUES ('$username', '$fullname', '$email', '$Remarks','$request_status','$RequestModule','$AccessRight','$contact','$maker','$maker','Add')";
								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User changed Submitted!!');
									window.location.href='../page/UserManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute submit. ";
								}				
							}
							  
					else if($process=="delete") {
							$sql_update = "DELETE FROM dora_users 
							WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task Deleted!!');
									window.location.href='../page/UserManagement.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute delete. ";
								}	
							}

					else if($process=="locked") {
										$status ="Locked";
											
										$sql_update = "UPDATE dora_users SET 
										status='$status' 
										WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('User Locked!!');
									window.location.href='../page/UserManagement.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute Locked. ";
								}	
							}

					else if($process=="unlock") {
										$status ="Active";
											
										$sql_update = "UPDATE dora_users SET 
										status='$status' 
										WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('User Unlocked!!');
									window.location.href='../page/UserManagement.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute Unlocked. ";
								}	
							}


							  							
					else {echo "Have a nice error!";}


 
	}
    
    // Close connection
    mysqli_close($link);

?>