<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>


/*-------------------Login Info--------------------------- */

/* Style the top navigation bar */
.login-info{
  font-size: 16px;
  color:white;
  font-weight;
  background-color:darkblue;
  float:right;
}


.banner {
background-image: url('../img/banner.png'); 
}


/*-------------------profile--------------------------- */

#navlist {
  padding: 15px;

}

#navlist li {
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  top: 20px;
}

#navlist li, #navlist a {
  height: 65px;
  display: block;
  margin-top:5px;
}
  
#logo {
  left: 0px;
  width: 150px;
}

#home {
  Right: 230px;
  width: 60px;
}

#setting {
  Right: 140px;
  width: 60px;
}

#logout {
  Right: 50px;
  width: 60px;
}
</style>



<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/*--------------------topnav-1-------------------------- */


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  font-size: 18px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 5px 20px;
  text-decoration: none;
  border: 1px solid grey;
  background-color:  darkblue;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: white;
}


.topnav a.active {
  background-color: red;
}

/*--------------------topnav-2-------------------------- */

/* Style the top navigation bar */
.topnav-2 {
  overflow: hidden;
  background-color: #E0F7FA;
  font-size: 16px;
  font-weight: bold;
  border-top-style: solid;
  border-right-style: none;
  border-bottom-style: solid;
  border-left-style: none;
}

/* Style the topnav links */
.topnav-2 a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 5px 20px;
  text-decoration: none;
  border-top-style: none;
  border-right-style: solid;
  border-bottom-style: none;
  border-left-style: none;
}

/* Change color on hover */
.topnav-2 a:hover {
  background-color: #ddd;
  color: white;
}

.topnav-2 a.active {
  background-color: red;
  color: white;
}



</style>



</head>
<body style="background color: #E0F7FA";>
<audio autoplay loop>
  <source src="../multimedia/theme-song.mp3" type="audio/mpeg">
</audio>


<div class="banner">
<div class="row">
	<div class="login-info">
		Ken | &nbsp;	
		Admin | &nbsp;	
		Build：Version 1.0.0A | &nbsp;
		Last Login: 04/01/2023 02:23 PM | &nbsp;	
		Unsuccessful Login: 0&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
</div>

<div style="padding:5px;"></div>

	<div>
			<ul id="navlist">
			  <li id="home"><a href="ToDoList.php"><img src="../img/home icon.png" alt="logout" width="80px" height="80px" border="5px solid black";></a></li>
			  <li id="setting"><a href="css_intro.asp"><img src="../img/username icon.png" alt="logout" width="80px" height="80px"; border="5px solid black";></a></li>
			  <li id="logout"><a href="../php/logout.php"><img src="../img/doraemon door.png" alt="logout" width="80px" height="80px" border="5px solid black" ;=""></a></li>
			</ul>
	</div>


<div style="padding:10px;"></div>

<div class="topnav">
  <a class="active" href="ToDoList.php">To-Do List</a>
  <a href="CustomerManagement.php">Customer</a>
  <a href="OrderTracker.php">Order Tracker</a>
  <a href="AgentReport.php">Report</a>	
</div>

<div class="topnav-2">
  <a href="ToDoList.php">Draft</a>
  <a href="ToDoList - pending approval.php">Pending Approval</a>
  <a href="ToDoList -  approved.php">Approved/Rejected</a>
  <a class="active" href="ToDoList -  return.php">Return</a>
</div>

</div>

<style>
/*-------------------content--------------------------- */
table{
  border: 1px solid  #d9d9d9;
  border-collapse: collapse;
  background color: #E0F7FA ;
  width:95%;
}

tr{
  background-color: white;
  text-align:center;
  font-size: 18px;
  color: blank;
  vertical-align: top;
  border: 1px solid grey;
}
  
    
td{
  border: 1px solid  #d9d9d9;
  border-collapse: collapse;
}


table.center {
  margin-left: auto; 
  margin-right: auto;
  box-shadow: 5px 5px 5px white;
}


th {
  background-color: #283593;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
  padding-right: 5px;
  font-size: 18px;
  color: white;
  vertical-align: top;
  border: 1px solid grey;
}

 
td.sn
{
background-color: #E8EAF6;
}


/*-------------------input--------------------------- */

input[type=text] {
margin: 8px 5px;
box-sizing: border-box;
font-size: 18px;
height: 30px;
margin-left: auto;
margin-right: auto;
}


select {
  width: 200px;
  height: 30px;
  font-size: 18px;
  margin-left:30px;
}


button {
margin: 8px 5px;
height: 30px;
box-sizing: border-box;
font-size: 18px;
}

.div-head1{
margin: 8px 30px;
font-size: 24px;

}


.norecord
{
text-align: center;
font-size: 18px;
color:red;
}


.p1
{
margin-left:30px;
font-size: 18px;
color:red;
}


/*-------------------pagination--------------------------- */
.center {
  text-align: center;
}

.pagination {
  display: inline-block;
  font-size: 18px;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #E0F7FA;
  color: black;
  border: 1px solid #ddd;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


/*-------------------Footer--------------------------- */
/* Style the footer */
.footer {
  padding: 0px;
  font-size: 12px;
  text-align: center;
}
</style>

<div style="padding:20px;"></div>

<div class="div-head1"><b>To-Do List - Return</b></div>
<hr class="div-head1">


	

<!-- search -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doraemon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM dora_temp_user where RequestStatus='Returned'";
?>

<?php
    if(isset($_POST['submit'])){
    if(!empty($_REQUEST['selection1'])) {
		
		    if(!empty($_REQUEST['selection2'])) {
				$selected = $_REQUEST['selection1'];
				$firstname = $_REQUEST['selection2'];
				$sql = "SELECT * FROM dora_temp_user where $selected LIKE '%" . $firstname ."%' AND RequestStatus='Returned'";
			} else {
				echo '<p class="p1">Please enter the value.</p>';
				}

    } else {
        echo '<p class="p1">Please select the search criteria.</p>';
    }
    }
?>



<div style="float:left";>





<form action="ToDoList -  return.php" method="post">

<select name="selection1">
    <option value="">Please Select</option>
    <option value="MakerID">Customer Name</option>
	<option value="MakerID">Order Number</option>
</select>


<input type="text" name="selection2"/>

<button class="" name="submit">Search</button>



</form>

	
</div>

<div style="padding:30px;"></div>


<!-- listing -->

<?php
// Attempt select query execution

$sn=1;

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
			echo '<table class="center"">';			
            echo '<tr>';
            echo '<th style="width:5%;">No</th>';
            echo '<th style="width:20%;">Customer Name</th>';
            echo '<th style="width:15%;">Order Number</th>';
			echo '<th style="width:15%;">Order Status</th>';
			echo '<th style="width:15%;">Order By</th>';
			echo '<th style="width:15%;">Last Update By</th>';
			echo '<th style="width:20%;">Last Update Date/Time</th>';
            echo '</tr>';			
					
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';	
            echo '<td>' . $sn . '</td>';			
            echo '<td>' . $row['LastUpdateBy'] . '</td>';					
            echo '<td> <a href="UserDraft.php?id='      . $row['Username'] .   '">'       . $row['RequestModule'] .           '</a></td>';		
			echo '<td>' . $row['Request'] . ' User - '.$row['Username'] .'</td>'; 
			echo '<td>' . $row['RequestStatus'] . '</td>';
			echo '<td>' . $row['MakerID'] . '</td>';	
			echo '<td>' . $row['CreationDate'] . '</td>';
            echo '</tr>';
			$sn++;
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo '<div class="norecord"> No records were found.</div>';
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
// Close connection
mysqli_close($link);
?>

</div>

<!-- pagination 

<div style="padding:50px;"></div>


<div class="center">
  <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class="active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
  </div>
</div>
-->

<style>
/*-------------------Footer--------------------------- */


</style>
<div style="padding:5px;"></div>
<div class="footer">
  <p style="padding:10px;"><i>Copyright © 2010-2023 Apple by Friday Technologies. All rights reserved.</i></p>
</div>
  
</body>
</html>


