<html lang="en"><head>
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
  background-color: darkblue;
  color: white;
}

.topnav-2 a.active:hover {
  background-color: pink;
  color: white;
  cursor:pointer;
}

/*-------------------Footer--------------------------- */
/* Style the footer */
.footer {
  padding: 0px;
  font-size: 12px;
  text-align: center;
}
</style>



</head>
<body style="background color: #E0F7FA" ;="">

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
  <a href="ToDoList.php" >To-Do List</a>
  <a class="active" href="UserManagement.php">User Management</a>
  <a href="#">System Parameter</a>
</div>

<div class="topnav-2">
  <a class="active" href="UserManagement.php">User Profile</a>
  <a href="#">Team</a>
  <a href="#">Access Right</a>
</div>

</div>







<style>
/*-------------------content--------------------------- */
table, tr, td {
  border: 1px solid  #d9d9d9;
  border-collapse: collapse;
  width:100%;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
  box-shadow: 5px 5px 5px white;
}


td.field1{
width:15%;
font-size: 14px;
font-weight: bold;
background-color: #E0F7FA;
}

td.field2{
width:30%;
font-size: 14px;
}


fieldset {
  width:90%;
  margin-left: auto; 
  margin-right: auto;
  border: 1px solid gray;
  box-shadow: 5px 5px 5px gray;
}

legend {
  background-color: buttonface;
  width:250px;
  padding: 5px 20px;
  border: 1px solid gray;
  box-shadow: 5px 5px 5px gray;
  font-size: 16px;
  cursor: pointer;
}



/*-------------------input--------------------------- */

input[type=text] {
margin: 6px 20px;
box-sizing: border-box;
font-size: 14px;
height: 30px;
width:200px;
float:left;
}

select {
margin: 6px 20px;
box-sizing: border-box;
font-size: 14px;
height: 30px;
width:200px;
float:left;
}


textarea{ 
margin: 6px 20px;
box-sizing: border-box;
font-size: 14px;
float:left;
background-color: #f8f8f8;
}


div.div-cont1{
margin: 6px 20px;
float:left;
font-size: 18px;
font-weight:bolder;
}

div.div-cont2{
margin: 6px 20px;
float:right;
font-size: 14px;
}

button {
margin: 8px 5px;
box-sizing: border-box;
font-size: 12px;
}

.mandatory
{
font-size: 12px;
color: red;
}


.action2
{
  display: flex;
  justify-content: center;
  align-items: center;
}


button {
margin: 8px 15px;
box-sizing: border-box;
font-size: 20px;
width:100px;
hight:50px;
}

.div-head1{
margin: 8px 30px;
font-size: 24px;
}

</style>





<!-- search -->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "doraemon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username1=$_GET['id'];
$sql = "SELECT * from dora_temp_user where username='$username1'";
?>


			

 <form action="../php/user-form-draft.php" id="user_details" method="post">

		<div style="padding:20px;"></div>
		
<!--------- Table Content ------------->
		<div class="div-head1"><b>User Management</b></div>
		<hr class="div-head1">

		<div style="padding:20px;"></div>

	
<fieldset class="fieldset-auto-width">
 <legend><b>User Details</b></legend>
 
 
<?php
// Attempt select query execution

$sn=1;

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
	$data = mysqli_fetch_array($result)
?>		
			
 
		  <table class="center">
			<tbody><tr>
				<td class="field1"><div class="div-cont2">User ID<div></div></div></td>
				<td class="field2"><input  readonly type="text" maxlength="19" name="UserID" value="<?php echo $data['Username'] ?>" ></td>
				<td class="field1"><div class="div-cont2">Full Name</div></td>
				<td class="field2"><input  type="text" maxlength="19" name="FullName" value="<?php echo $data['FullName'] ?>" ></td>
			</tr>
		  
			<tr>
				<td class="field1"><div class="div-cont2">Contact Number</div></td>
				<td class="field2"><input  type="text" maxlength="19" name="ContactNumb" value="<?php echo $data['Contact'] ?>" ></td>
				<td class="field1"><div class="div-cont2">Email Address<div></div></div></td>
				<td class="field2"><input  type="text" maxlength="19" name="EmailAdds" value="<?php echo $data['Email'] ?>" ></td>
			</tr>
		  
			<tr>
				<td class="field1"><div class="div-cont2">Access Right</div></td>
		<td class="field2">
		
			<div>
				<select name="AccessRight" class="">
				<option value="">Please Select</option>
				<option value="Admin" <?php if($data['Access']=="Admin") echo 'selected="selected"'; ?> >Admin</option>	
				<option value="Agent" <?php if($data['Access']=="Agent") echo 'selected="selected"'; ?>>Agent</option>
				</select>
			</div>	
		
		</td>

				
			
				
			</tr>
			
			
			<tr>
				<td class="field1"><div class="div-cont2">Remarks</div></td>
				<td class="field2" colspan="3">
					<div class=""><textarea cols="120" rows="5" name="Remarks"><?php echo $data['Remarks'] ?></textarea></div>
				</td>
			</tr>
		  
		  </tbody></table>  
			
<?php			
	
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

  
  </fieldset>

<div style="padding:30px;"></div>


 <div class="action2">	 
	 <button name="submit" value="save">Save</button>	 
	 <button name="submit" value="submit">Submit</button>
	 <button name="submit" value="delete">Delete</button>
	 <button name="submit" value="cancel">Cancel</button>
 </div>

</form>


<style>
/*-------------------Footer--------------------------- */


</style>
<div style="padding:5px;"></div>
<div class="footer">
  <p style="padding:10px;"><i>Copyright © 2010-2023 Apple by Friday Technologies. All rights reserved.</i></p>
</div>
  




</body></html>