
 <?php include("nav_bar.php"); @session_start();
   $conn=mysqli_connect("localhost","root","");
   mysqli_select_db($conn,"canteen");
   
   $sql="select * from signup where id='".$_SESSION['id']."'";
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
    <div class="main-container"><table>
    <tr><td><i class="fa fa-id-badge info"></i>Name:</td><td><?php echo $data['Name'];?></td></tr>
    <tr><td><i class="fa fa-user-circle info"></i>Username:</td><td><?php echo $data['Username'];?></td></tr>
    <tr><td><i class="fa fa-phone info"></i>Phone_no:</td><td><?php echo $data['Phone_no'];?></td></tr>
    <tr><td><i class="fa fa-envelope info"></i>Email:</td><td><?php echo $data['Email'];?></td></tr>
    <tr><td><i class="fa fa-eercast info"></i>Category:</td><td><?php echo $data['Category'];?></td></tr>
   <form action="update_profile.php" method="post">
   <tr><td><input type="submit" name="UPDATE" value="Edit Profile" class="buttons" style="background-color:#99F; font-family:'Arial Black', Gadget, sans-serif; box-shadow:inset; font-size:20px; cursor:pointer"/></td>
    <td><input type="submit" name="BACK" value="Back" class="buttons" style="background-color:#99F; font-family:'Arial Black', Gadget, sans-serif; box-shadow:inset; font-size:20px; cursor:pointer" formaction="samplehome.php"/>
     </td></tr></form>
    
 </table></div>
 </div>
 </body>
 </html>

