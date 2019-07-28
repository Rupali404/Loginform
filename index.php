<?php  session_start(); ?>  // session starts with the help of this function 

<?php

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:login.php"); 
 }

if(isset($_POST['submit']))   // it checks whether the user clicked login button or not 
{
     $username = $_POST['username'];
     $password = $_POST['password'];

      if($username == "rupali" && $password == "rupa")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$username;


         echo '<script type="text/javascript"> window.open("login.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
?>
<!DOCTYPE html>
<html>
<head>			
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	    <form method="post" action="">
			<h1>Login Form</h1>
			<input type="username" class="" name="username" placeholder="username" id="user">
			<br>
			<input type="password" name="password" placeholder="password" id="pass">
			<br>
			<input type="submit"  name="submit" value="login">		
		</form>
	</div>
</body>
</html>