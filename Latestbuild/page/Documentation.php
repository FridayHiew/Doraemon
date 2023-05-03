<html>
<head>
<title>CSS Website Layout</title>

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


.topnav a.active:hover {
  background-color: pink;
  color: white;
  cursor:pointer;
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

.topnav-2 a.active:hover {
  background-color: pink;
  color: white;
  cursor:pointer;
}
</style>


<?php
// Initialize the session
session_start();

$maker=$_SESSION["username"];
?>


</head>
<body style="background color: #E0F7FA";>

<div class="banner">
<div class="row">
	<div class="login-info">

		<?php echo $maker; ?> | &nbsp;	
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
  <a href="ToDoList.php">To-Do List</a>
  <a class="active" href="CustomerManagement.php">Customer</a>
  <a href="OrderTracker.php">Order Tracker</a>
  <a href="AgentReport.php">Report</a>	
</div>

<div class="topnav-2">
  <a href="CustomerManagement.php">Customer List</a>
  <a class="active" href="Documentation.php">Documentation</a>
</div>
</div>

</div>

<style>


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


</style>



<!--------- search row 1--------->

<style>


/*-------------------input--------------------------- */



.div-search1{
font-size: 18px;
float:left;
font-weight: bold;
}


input[type=text] {
font-size: 18px;
float:left;
box-sizing: border-box;
height: 30px;
width: 200px;
}

button {
font-size: 18px;
box-sizing: border-box;
height: 30px;
float:left;
margin-left:15px;
}


select {
font-size: 18px;
float:left;
box-sizing: border-box;
height: 30px;
width: 200px;
}


</style>

		<div style="padding:20px;"></div>
		
<!--------- Table Content ------------->
		<div class="div-head1"><b>Documentation</b></div>
		<hr class="div-head1">

		<div style="padding:10px;"></div>

<table class="center">


		<tr>
			<th colspan="7">Search Criteria.</th>
		</tr>

		<tr>
				
				<td style="width:15%"><div class="div-search1">Customer Name</div></td>
				<td style="width:30%"><input type="text"></input><button>Search</button></td>
				<td style="width:10%"></td>
				<td style="width:15%"><div class="div-search1">Status Name</div></td>
				<td style="width:30%">
						<select>
						<option>Active</option>
						<option>Suspend</option>
						<option>Inactive</option>
						<option>All</option>
						</select>
						<button>Search</button>
				</td>

		</tr>

</table>
<div style="padding:20px;"></div>






<style>

/*-------------------content--------------------------- */
table{
  border: 1px solid  #d9d9d9;
  border-collapse: collapse;
  background color: #E0F7FA ;
  width:90%;
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

 
td.sn{
background-color: #E8EAF6;
}


.div-head1{
margin: 8px 30px;
font-size: 24px;
}

button.button1 {
font-size: 18px;
box-sizing: border-box;
height: 30px;
width:100px;
float:right;
margin-right:75px;
margin-bottom: 20px;
}


button.button3 {
font-size: 18px;
box-sizing: border-box;
height: 30px;
width:100px;
float:right;
margin-right:15px;
margin-bottom: 20px;
}


input[type=checkbox] {
width : 18px;
height : 18px;
cursor: pointer;
}

.norecord
{
margin: 8px 30px;
font-size: 24px;
}
</style>






<!-- listing -->


		<div>
			<button class="button1" onclick="window.location.href='AddCustomer.php';">Add</button>
		</div>
		
<!-- listing -->
<div>



<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doraemon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM dora_users";
$sn=1;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
			echo '<table class="center"">';			
            echo '<tr>';
                echo '<th style="width:5%;">No</th>';
                echo '<th style="width:30%;">Customer Name</th>';
                echo '<th style="width:20%;">Customer ID</th>';
				echo '<th style="width:10%">Status</th>';
				echo '<th style="width:35%;">Action</th>';
            echo '</tr>';			
																	
        while($row = mysqli_fetch_array($result)){
            echo '<tr>';
			
                echo '<td>' . $sn . '</td>';
                echo '<td> <a href="Update User.php?id='      . $row['username'] .   '">'       . $row['username'] .           '</a></td>';
										
                echo '<td>' . $row['FullName'] . '</td>';
                echo '<td>' . $row['LastUpdateDate'] . '</td>';				
                echo '<td> 
						<a href="Update User.php">Active</a> &nbsp;&nbsp;
						<a href="Update User.php">Suspend</a> &nbsp;&nbsp;
						<a href="Update User.php">Inactive</a>
				</td>';



            echo '</tr>';
			$sn++;
        }
        echo '</table>';
        // Free result set
        mysqli_free_result($result);
    } else{
        echo '<div class="norecord"> No records found.</div>';
    }
} else{
    echo 'ERROR: Could not able to execute $sql. ' . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


</div>

<!-- pagination

<div style="padding:100px;"></div>


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
/* Style the footer */
.footer {
  padding: 0px;
  font-size: 12px;
  text-align: center;
}


</style>
<div style="padding:5px;"></div>
<div class="footer">
  <p style="padding:10px;"><i>Copyright © 2010-2023 Apple by Friday Technologies. All rights reserved.</i></p>
</div>
  
</body>
</html>


