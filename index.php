<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ToDoList.php");
    exit;
}
 
// Include config file
require_once "Latestbuild/php/Config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM dora_users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: latestbuild/page/ToDoList.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<html>
<head>



</head>


<body>






<style>

table.maintable{
  border: 1px solid  black;
  border-collapse: collapse;
  background-color:lightblue;
  width:940px;
  margin-top: 100px;
  margin-left: auto; 
  margin-right: auto;
}
</style>


<style>
table.login{
  border: 0px solid  #d9d9d9;
  border-collapse: collapse;
  width:50%;
  margin-right:100px;
}

.login{
float:right;
padding:0px 10px;
width:150px;
height:30px;
cursor: pointer;
}

input[type=username] {
width : 220px;
height : 30px;
cursor: pointer;
float:right;
margin-top:20px;
margin-bottom:20px;
margin-right:10px;
text-align:right;
font-size:25px;
background-color:#E0F7FA;
}

input[type=password] {
width : 220px;
height : 30px;
cursor: pointer;
float:right;
margin-bottom:20px;
margin-right:10px;
text-align:right;
font-size:25px;
background-color:#E0F7FA;
}


.invalid-feedback
{
font-size:16px;
background-color:pink;
color:blue;
font-style: italic;
font-weight: bold;
}

</style>


<audio autoplay loop>
  <source src="Latestbuild/multimedia/theme-song.mp3" type="audio/mpeg">
</audio>

<table class="maintable">



<tr>
	<td style="width:50%;">
		<img src="Latestbuild/img/login left.jpg" alt="login left picture" width="471px" height="280px">
	</td>
	
	
	<td style="width:50%;">

		
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				
			<table class="login">
					<tr>
					<td colspan="2";>
						<div style="float:left; font-size:28px; color:blue;"><b>Welcome to Doraemon <br/>Dorayaki System</b>
						</div>
					</td>
					</tr>
			
					<tr>
					<td>	
						<div>
							 <input type="username" placeholder="username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
							<span class="invalid-feedback"><?php echo $username_err; ?></span>   								
						</div>
					</td>
					
					<td>
						<div>
						<img src="Latestbuild/img/username icon.png" alt="Username picture" width="30px" height="30px" style="float:right;">
						</div>
					</td>					
					
					
					</tr>
					<tr>
					<td>
						<div>					
							<input type="password" placeholder="Password"name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">	
							 <span class="invalid-feedback"><?php echo $password_err; ?></span>
						</div>						
					</td>

					<td>
						<img src="Latestbuild/img/password icon.png" alt="Password picture" width="30px" height="30px" style="float:right; margin-bottom:20px;">
					</td>
					
					
					</tr>
					<tr>
					<td>
						<?php 
							if(!empty($login_err)){
								echo '<div class="invalid-feedback">' . $login_err . '</div><br/>';
							}        
						?>
						<button class="login" value="Login">Login</button>
					</td>
					</tr>
			</table>
		 </form>
	</td>
</tr>

<tr>
	<td colspan=2><img src="Latestbuild/img/login bottom.jpg" alt="login bottom" width="940px" height="200px"></td>
</tr>

</table>



</body>
</html>