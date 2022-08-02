<?php include("nav_bar.php"); @session_start();
 $conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"canteen");

$sql="select * from signup where id='".$_SESSION['id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);
?>
 
 <html><head><title>view profile</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  />
 <link rel="stylesheet" href="css/style7aa.css" />
 </head>
 <body>
 <div class="profile-card">
 <table cellspacing="5px" cellpadding="4px">
    <center><tr><td><th><?php echo $data['Name'];?>'s Profile</th></td></tr></center></table>
    <div class="main-container">
    <form method="post" action="updateprofile_action.php" enctype="multipart/form-data"><table width="90%">
    <tr><td><i class="fa fa-id-badge info"></i>Name:</td><td><input type="text" name="Name" value="<?php echo $data['Name'];?>"/>
     <?php if(isset($_SESSION['error'][0])&& ($_SESSION['error'][0]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][0]."</span>";
	     unset($_SESSION['error'][0]);
       }
	   ?></td></tr>
    <tr><td><i class="fa fa-user-circle info"></i>Username:</td><td><input type="text" name="Username" value="<?php echo $data['Username'];?>"/>
    <?php if(isset($_SESSION['error'][1])&& ($_SESSION['error'][1]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][1]."</span>";
	     unset($_SESSION['error'][1]);
       }
	   ?></td></tr>
    <tr><td><i class="fa fa-phone info"></i>Phone_no:</td><td><input type="text" name="Phone_no" value="<?php echo $data['Phone_no'];?>"/>
      <?php if(isset($_SESSION['error'][2])&&($_SESSION['error'][2]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][2]."</span>";
	     unset($_SESSION['error'][2]);
       }
	   ?></td></tr>
    <tr><td><i class="fa fa-envelope info"></i>Email:</td><td><input type="text" name="Email" value="<?php echo $data['Email'];?>"/>
     <?php if(isset($_SESSION['error'][3])&& ($_SESSION['error'][3]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][3]."</span>";
	     unset($_SESSION['error'][3]);
       }
	   ?></td></tr>
    <tr><td><i class="fa fa-eercast info"></i>Category:</td><td>Student<input type="radio" name="Category" value="Student" checked  />
                                                           Teacher<input type="radio" name="Category" value="Teacher" />
                                                                                       
       <?php if(isset($_SESSION['error'][7])&& ($_SESSION['error'][7]!=""))
       {
	     echo "<span style='color:red'>".$_SESSION['error'][7]."</span>";
	     unset($_SESSION['error'][7]);
       }
	   ?></td></tr>
    <tr><td> <input type="submit" name="Submit" value="Update" class="btn-login" style="background-color:#99F; font-family:'Arial Black', Gadget, sans-serif; box-shadow:inset; font-size:24px; cursor:pointer"/></td></tr>                                                      
 </table></form></div>
 </div>
 </body>
 </html>

