<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doraemon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution


$username = mysqli_real_escape_string($link, $_REQUEST['UserID']);
$fullname = mysqli_real_escape_string($link, $_REQUEST['FullName']);
$contact = mysqli_real_escape_string($link, $_REQUEST['ContactNumb']);
$email = mysqli_real_escape_string($link, $_REQUEST['EmailAdds']);
$AccessRight = mysqli_real_escape_string($link, $_REQUEST['AccessRight']);
$Remarks = mysqli_real_escape_string($link, $_REQUEST['Remarks']);
$Type = mysqli_real_escape_string($link, $_REQUEST['type']);

$process  = $_POST["submit"];
$username = $_POST["UserID"];
$RequestModule="User Management";
 
 
$username	=trim($username);
$fullname	=trim($fullname);
$email		=trim($email);
$Remarks 	=trim($Remarks);
$contact 	=trim($contact);


if($process=="cancel") {  
		header("Location:../page/ToDoList - pending approval.php");
		exit();
	}	


else {



<!-- login 
for approved or rejected
delete record from temp table
because is end stage

for even edit user
updated usertable
insert user staging table

for even add user
insert usertable
insert user staging table

for return
update record in temp table




-->

			if($process=="Approved") {   




						if($Type=="Add") {      
										$status ="Draft";
										$request_status="Draft";
											
											$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,status,remarks,requeststatus,RequestModule,access,contact,MakerID,LastUpdateBy,Request) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$request_status','$RequestModule','$AccessRight','$contact','$maker','$maker','Add')";

											if(mysqli_query($link, $sql_insert)){
												echo "<script>
												alert('User save as Draft!!');
												window.location.href='../page/UserManagement.php';
												</script>";
											} else{
												echo "ERROR: Could not able to execute Save. ";
											}
											
										}

							$sql_delete = "DELETE FROM dora_temp_user 
							WHERE username='$username'";

	
							$status ="Active";
							$request_status="Approved";
															













							$sql_insert = "INSERT INTO dora_stag_user (username, fullname, email,status,remarks,requeststatus,RequestModule,access,contact,MakerID,LastUpdateBy,Request) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$request_status','$RequestModule','$AccessRight','$contact','$maker','$maker','Add')";							
							
							
							
							
							
							>>>>>>>>>>>>>>>need to have condition for add and edit;
							
							
							$sql_insert = "INSERT INTO dora_users (username, fullname, email,status,remarks,access,contact) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$AccessRight','$contact')";							


								if(mysqli_query($link, $sql_update) && mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('Task Approved!!');
									window.location.href='../page/ToDoList - pending approval.php';
									</script>";

									
								} else{
									echo "ERROR: Could not able to execute Approved. ";
								}
						



			if($process=="save") {      
							$status ="Draft";
							$request_status="Draft";
								
								$sql_insert = "INSERT INTO dora_temp_user (username, fullname, email,status,remarks,requeststatus,RequestModule,access,contact,MakerID,LastUpdateBy,Request) VALUES ('$username', '$fullname', '$email', '$status','$Remarks','$request_status','$RequestModule','$AccessRight','$contact','$maker','$maker','Add')";

								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User save as Draft!!');
									window.location.href='../page/UserManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute Save. ";
								}
								
							}


						
					
						
							}
						
					else if($process=="Returned") {
							$status ="Draft";
							$request_status="Returned";
								
							$sql_update = "UPDATE dora_temp_user SET requeststatus='$request_status',status='$status'  WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task Return!!');
									window.location.href='../page/ToDoList - pending approval.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute Return. ";
								}
						
							}
							
					else if($process=="Rejected") {
							$status ="Draft";
							$request_status="Rejected";
								
							$sql_update = "UPDATE dora_temp_user SET requeststatus='$request_status',status='$status'  WHERE username='$username'";

								if(mysqli_query($link, $sql_update)){
									echo "<script>
									alert('Task Rejected!!');
									window.location.href='../page/ToDoList - pending approval.php';
									</script>";
									
								} else{
									echo "ERROR: Could not able to execute Reject. ";
								}

							}							  
							
					else {echo "Have a nice error!";}

 
	}
// Close connection
mysqli_close($link);
?>