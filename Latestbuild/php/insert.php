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
$Remarks = mysqli_real_escape_string($link, $_REQUEST['Remarks']);
$status = "draft";
 
// Attempt insert query execution
$sql = "INSERT INTO dora_users (username, fullname, email,status,remarks) VALUES ('$username', '$fullname', '$email', '$status','$Remarks')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


 // Escape user inputs for security
$MakerID = "Maker";
$CheckerID = "Admin";
$RequestModule = "User Management";
$Request = "ADD";
$RequestStatus = "Draft";

 
// Attempt insert query execution
$sql = "INSERT INTO dora_request (MakerID, CheckerID, RequestModule,Request,RequestStatus) VALUES ('$MakerID', '$CheckerID', '$RequestModule', '$Request','$RequestStatus')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 
// Close connection
mysqli_close($link);
?>