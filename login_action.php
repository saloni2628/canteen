<?php session_start();
$conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"canteen");

 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 if($Username=="" or $Password=="")
 {

 
 
		 $_SESSION['error'][1]="!Please enter username and password";
		 @header("location:login.php");
		
	 }
	
	else
	{
 $sql="select * from signup where Username='".$Username."'and Password='".$Password."'";
 $run=mysqli_query($conn,$sql);

 if($data=mysqli_fetch_array($run))
 {
	 $_SESSION['id']=$data['id'];
	 @header("location:samplehome.php");
 }
 else
 {
	 $_SESSION['message']="Enter valid username & password";
	 @header("location:login.php");
 }
	}
?>