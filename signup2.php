<?php session_start();

?>

<!DOCTYPE html>
<html>
<head><title>signup page</title>
 <link rel="stylesheet" href="css/style3a.css" type="text/css"/>
 
</head>
<body>
<center><h1 style="color:#3CF">SIGN UP!</h1></center>
<div class="form">
<form method="POST" action="signup_action.php">

<div class="container" >
   <img src="pictures/login2.jpg"/>
      <center><table></center>
       <tr>
        <center><td><b>Name:</b></td><td><input type="text" name="Name" />
		<?php if(isset($_SESSION['error'][0])&& ($_SESSION['error'][0]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][0]."</span>";
	     unset($_SESSION['error'][0]);
       }
	   ?>
        <br/></td></center>
       </tr>
        <tr>
        <center><td><b>Username:</b></td><td><input type="text" name="Username" />
        <?php if(isset($_SESSION['error'][1])&& ($_SESSION['error'][1]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][1]."</span>";
	     unset($_SESSION['error'][1]);
       }
	   ?></td></center>
       </tr> 
       <tr>
        <center><td><b>Phone_no:</b></td><td><input type="text" name="Phone_no" />
        <?php if(isset($_SESSION['error'][2])&&($_SESSION['error'][2]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][2]."</span>";
	     unset($_SESSION['error'][2]);
       }
	   ?>
        </td></center>
       </tr>
        <tr>
        <center><td><b>Email:</b></td><td><input type="text" name="Email" />
         <?php if(isset($_SESSION['error'][3])&& ($_SESSION['error'][3]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][3]."</span>";
	     unset($_SESSION['error'][3]);
       }
	   ?></td></center>
       </tr> 
        <tr>
        <center><td><b>Password:</b></td><td><input type="password" name="Password" />
         <?php if(isset($_SESSION['error'][4])&& ($_SESSION['error'][4]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][4]."</span>";
	     unset($_SESSION['error'][4]);
       }
	   ?>
        <?php if(isset($_SESSION['error'][5])&& ($_SESSION['error'][5]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][5]."</span>";
	     unset($_SESSION['error'][5]);
       }
	   ?></td></center>
       </tr> 
        <tr>
        <center><td><b>Confirm_password:</b></td><td><input type="password" name="Confirm_password" /></br>
         <?php if(isset($_SESSION['error'][6])&& ($_SESSION['error'][6]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][6]."</span>";
	     unset($_SESSION['error'][6]);
       }
	   ?></td></center>
       </tr>
       <tr>
       <center><td><b>Category:</b><td>Student<input type="radio" name="Category" value="Student" checked /></td>
                                   <td>Teacher<input type="radio" name="Category" value="Teacher" /></td></br> 
       <?php if(isset($_SESSION['error'][7])&& ($_SESSION['error'][7]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][7]."</span>";
	     unset($_SESSION['error'][7]);
       }
	   ?>
       </td></center> 
       </tr>
       </table>
        <tr><td><center><input type="submit" name="SIGNUP" value="Submit" class="btn-login" style="background-color:#99F; font-family:'Arial Black', Gadget, sans-serif; box-shadow:inset; font-size:24px; cursor:pointer"/></center></td></tr>
        </form>
        
        <?php 
		  if(isset($SESSION)){
		      echo '<script type="text/javascript">';
              echo ' alert("Registered Successfully")';  //not showing an alert box.
			  echo '</script>';
		  }
		?>
        <table>
        <tr><td><p style="text-decoration:underline; text-shadow:#000; color:#C00">Already registered?</p>
    <center><input type="submit" name="Submit" value="Login" border="solid" formaction="login.php" style=" font-family:'Arial Black'; font-size:20px; color:#603; cursor:pointer"/></center></td></tr>
     </table>
        </div>  
   
    

</body>
</html>
