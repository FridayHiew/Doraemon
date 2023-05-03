<?php
// Initialize the session
session_start();

$maker=$_SESSION["username"];
?>


<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
// Escape user inputs for security
$FirstName = mysqli_real_escape_string($link, $_REQUEST['FirstName']);
$LastName = mysqli_real_escape_string($link, $_REQUEST['LastName']);
$IDType = mysqli_real_escape_string($link, $_REQUEST['IDType']);
$IDNumb = mysqli_real_escape_string($link, $_REQUEST['IDNumb']);
$IDCountry = mysqli_real_escape_string($link, $_REQUEST['IDCountry']);
$MemberID = mysqli_real_escape_string($link, $_REQUEST['MemberID']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$BOD = mysqli_real_escape_string($link, $_REQUEST['BOD']);
$Race = mysqli_real_escape_string($link, $_REQUEST['Race']);
$MaritalStatus = mysqli_real_escape_string($link, $_REQUEST['MaritalStatus']);
$PhoneNum = mysqli_real_escape_string($link, $_REQUEST['PhoneNum']);
$Email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$Address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$PostCode = mysqli_real_escape_string($link, $_REQUEST['PostCode']);
$AddsCountry = mysqli_real_escape_string($link, $_REQUEST['AddsCountry']);



// Attempt insert query execution
$process  = $_POST["submit"];
$RequestModule="Customer Management";
 

$FirstName	=trim($FirstName);
$LastName	=trim($LastName);
$IDNumb		=trim($IDNumb);
$MemberID 	=trim($MemberID);
$PhoneNum 	=trim($PhoneNum);
$Address	=trim($Address);
$PostCode	=trim($PostCode);
 
 
 
// Processing form data when form is submitted
 
 

if($process=="cancel") {  
		header("Location:../page/CustomerManagement.php");
		exit();
	}	


else if(empty(trim($_POST["FirstName"]))){

	echo "<script>
	alert('Please fill up FirstName!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
  
  
else if(empty(trim($_POST["LastName"]))){

	echo "<script>
	alert('Please fill up LastName!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
 
 
else if(empty(trim($_POST["IDType"]))){

	echo "<script>
	alert('Please select ID Type!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }

 
 
else if(empty(trim($_POST["IDNumb"]))){

	echo "<script>
	alert('Please fill up ID Number!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }


else if(empty(trim($_POST["IDCountry"]))){

	echo "<script>
	alert('Please select ID Country!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
 
 
 
 
else if(empty(trim($_POST["PhoneNum"]))){

	echo "<script>
	alert('Please fill up Phone Number!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
 
 
  
else if(empty(trim($_POST["Email"]))){

	echo "<script>
	alert('Please fill up Email!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
 
 
 
else if(empty(trim($_POST["Address"]))){

	echo "<script>
	alert('Please fill up Address!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }
 
else if(empty(trim($_POST["PostCode"]))){ 

	echo "<script>
	alert('Please fill up PostCode!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 } 
 
 
else if(empty(trim($_POST["AddsCountry"]))){

	echo "<script>
	alert('Please select Country!!');
	window.location.href='../page/AddCustomer.php';
	</script>";	
 }



else {


			if($process=="save") {      
							$status ="Draft";
							$request_status="Draft";
								
								$sql_insert = "INSERT INTO dora_temp_cust (FirstName, LastName,Status,IDType,IDNumb,IDCountry,MemberID,Gender,DateofBirth,Race,MaritalStatus,Mobile,Email,Adds,PostCode,Country,RequestModule,Request,RequestStatus,MakerID)VALUES ('$FirstName', '$LastName', '$status', '$IDType','$IDNumb','$IDCountry','$MemberID','$Gender','$BOD','$Race','$MaritalStatus','$PhoneNum','$Email','$Address','$PostCode','$AddsCountry','$RequestModule','Create','$request_status','$maker')";

								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('Customer save as Draft!!');
									window.location.href='../page/CustomerManagement.php';
									</script>";
								} else{
									echo "ERROR: Could not able to execute Save. ";
								}
								
							}
						
					else if($process=="submit") {
							$status ="Draft";
							$request_status="Pending Approval";
								
								$sql_insert = "INSERT INTO dora_temp_cust (FirstName, LastName,Status,IDType,IDNumb,IDCountry,MemberID,Gender,DateofBirth,Race,MaritalStatus,Mobile,Email,Adds,PostCode,Country,RequestModule,Request,RequestStatus,MakerID)VALUES ('$FirstName', '$LastName', '$status', '$IDType','$IDNumb','$IDCountry','$MemberID','$Gender','$BOD','$Race','$MaritalStatus','$PhoneNum','$Email','$Address','$PostCode','$AddsCountry','$RequestModule','Create','$request_status','$maker')";
								
								if(mysqli_query($link, $sql_insert)){
									echo "<script>
									alert('User Creation Submitted!!');
									window.location.href='../page/CustomerManagement.php';
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