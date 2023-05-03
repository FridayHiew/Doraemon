
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
		header("Location:../page/ToDoList.php");
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
							$status ="Draft";
							$request_status="Draft";
							
							$sql_update = "UPDATE dora_temp_user SET 
							requeststatus='$request_status',
							status='$status' ,
							FullName='$fullname',
							email='$email',
							contact='$contact',							
							access='$AccessRight',
							Remarks='$Remarks'			
							WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task save!!');
									window.location.href='../page/ToDoList.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute save. ";
								}
								
							}
						
					else if($process=="submit") {
							$status ="Draft";
							$request_status="Pending Approval";
								
							$sql_update = "UPDATE dora_temp_user SET 
							requeststatus='$request_status',
							status='$status' ,
							FullName='$fullname',
							email='$email',
							contact='$contact',							
							access='$AccessRight',
							Remarks='$Remarks'			
							WHERE username='$username'";


								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task submit!!');
									window.location.href='../page/ToDoList.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute submit. ";
								}	
							}
							  
					else if($process=="delete") {
							$sql_update = "DELETE FROM dora_temp_user 
							WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task Deleted!!');
									window.location.href='../page/ToDoList.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute delete. ";
								}	
							}
							  							
					else {echo "Have a nice error!";}

 
	}
    
    // Close connection
    mysqli_close($link);

?>