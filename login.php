<?php @session_start(); ?>

<!DOCTYPE html>
<html>
<head><title>login page</title>
 <link rel="stylesheet" a href="css\style1.css"/>
 
</head>
<body>
<center><h1 style="font-size:36px; animation:ease-in-out; animation-duration:5s; color:#0FC" >LOGIN!</h1></center>
  <div class="container">
   <img src="pictures/login2.jpg"/>
  
    <form method="POST" action="login_action.php">
        <div class="form_inputs">
             <input type="text" name="Username" placeholder="Enter your username"/></br>
          </div>
        <div class="form_inputs">
           <input type="password" name="Password" placeholder="Enter your password" />
        </div>
        <?php if(isset($_SESSION['error'][1])&& ($_SESSION['error'][1]!=""))
             {
	           echo "<span style='color:red'>".$_SESSION['error'][1]."</span>";
	           unset($_SESSION['error'][1]);
		     }
		?>
       <?php if(isset($_SESSION['message'])&& ($_SESSION['message']!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['message']."</span>";
	     unset($_SESSION['message']);
       }
		
       ?></br>
      <input type="submit" name="LOGIN" value="LOGIN" class="btn-login" style="background-color:#99F; font-family:'Arial Black', Gadget, sans-serif; box-shadow:inset; font-size:24px; cursor:pointer"/>
    </form>
    <div class="lower">
    <h1 contenteditable="false" style="color:#F30;font-style:italic">Didn't have an account?</h1>
    </div>
    <form method="POST" action="signup2.php">
   <input type="submit" name="Submit" value="Signup" border="solid" style=" font-family:'Arial Black'; font-size:20px; color:#603; cursor:pointer"/>
     </form>
     
  </div>
</body>
</html>
