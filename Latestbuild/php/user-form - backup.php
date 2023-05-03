<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doraemon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['UserID']);
$fullname = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$email = mysqli_real_escape_string($link, $_REQUEST['EmailAdds']);
$AccessRight = mysqli_real_escape_string($link, $_REQUEST['AccessRight']);
$Remarks = mysqli_real_escape_string($link, $_REQUEST['Remarks']);

// Attempt insert query execution
$process  = $_POST["submit"];
$username = $_POST["UserID"];
$RequestModule="User Management";



if($process=="cancel") {  
		header("Location:../page/UserManagement.php");
		exit();
	}	


else if(empty(trim($_POST["UserID"]))){

	echo "<script>
	alert('Please fill up Username!!');
	window.location.href='../page/AddUser.php';
	</script>";	
 }
 
else if(empty(trim($_POST["AccessRight"]))){

	echo "<script>
	alert('Please select access right!!');
	window.location.href='../page/AddUser.php';
	</script>";	
 }



else {


			if($process=="save") {      
							$status ="Draft";
							$request_status="Draft";
								
								$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,status,remarks,requeststatus,RequestModule,access) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$request_status','$RequestModule','$AccessRight')";

								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User save as Draft!!');
									window.location.href='../page/UserManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute Save. ";
								}
								
							}
						
					else if($process=="submit") {
							$status ="Draft";
							$request_status="Pending Approval";
								
								$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,status,remarks,requeststatus,RequestModule,access) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$request_status','$RequestModule','$AccessRight')";

								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User Creation Submitted!!');
									window.location.href='../page/UserManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute submit. ";
								}				
							}
							  
							
					else {echo "Have a nice error!";}

 
	}
// Close connection
mysqli_close($link);
?>