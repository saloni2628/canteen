<?php session_start();
 $conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"canteen");
 
  $Name=$_POST['Name'];
	 if($Name==""){
		 $_SESSION['error'][0]="Please enter name";
		 header("location:update_profile.php");
	 }
	 $Username=$_POST['Username'];
	  if($Username==""){
		 $_SESSION['error'][1]="Please enter username";
		 header("location:update_profile.php");
	 }
     $Phone_no=$_POST['Phone_no'];
	 if(!preg_match("/^(?=.*[0-9]{10})/",$Phone_no)){
		 $_SESSION['error'][2]="Please enter valid phone no";
		 @header("location:update_profile.php");
	 }
     $Email=$_POST['Email'];
	 if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$Email)){
		 $_SESSION['error'][3]="Please enter valid email id";
		 @header("location:update_profile.php");
	 }
     
	 $Category=$_POST['Category'];
	 if(count($Category)!=1){
		 $_SESSION['error'][7]="Category not selected";
		@header("location:update_profile.php");
	 }
		 
if(count($_SESSION['error'])<1){
	

$sql="update signup set Name='".$_POST['Name']."',Username='".$_POST['Username']."',Phone_no='".$_POST['Phone_no']."',Email='".$_POST['Email']."',Category='".$_POST['Category']."' where id='".$_SESSION['id']."' ";

if(mysqli_query($conn,$sql)){
	@header("location:view_profile.php");
	echo"updated succesfully";
}
else{
	echo mysql_error();
}
}
 else
	 {
		@header("location:update_profile.php"); 
	 }

?>