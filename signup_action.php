<?php session_start();
 $conn=mysqli_connect("localhost","root","");
 mysqli_select_db($conn,"canteen");


	 $Name=$_POST['Name'];
	 if($Name==""){
		 $_SESSION['error'][0]="Please enter name";
		
	 }
	 $Username=$_POST['Username'];
	  if($Username==""){
		 $_SESSION['error'][1]="Please enter username";
		
	 }
     $Phone_no=$_POST['Phone_no'];
	 if(!preg_match("/^(?=.*[0-9]{10})/",$Phone_no)){
		 $_SESSION['error'][2]="Please enter valid phone no";
		
	 }
     $Email=$_POST['Email'];
	 if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$Email)){
		 $_SESSION['error'][3]="Please enter valid email id";
		 
	 }
     $Password=$_POST['Password'];
	 if(strlen($Password)<8){
		  $_SESSION['error'][4]="Atleast 8 characters required";
		  
	 }
	 /*if($Password!=!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]/",$Password)){	  
		 $_SESSION['error'][5]="invalid password";
		 @header("location:signup2.php");
	 }*/
	 $Confirm_password=$_POST['Confirm_password'];
	 if($Confirm_password!=$Password){
	     $_SESSION['error'][6]="Password didn't match";
		
	 }
	 $Category=$_POST['Category'];
	 if(count($Category)!=1){
		 $_SESSION['error'][7]="Category not selected";
		
	 }
	 count($_SESSION['error']); 	 
	 if(count($_SESSION['error'])<1)
	 {
		 
	 
 $query="insert into signup(`Name`,`Username`,`Phone_no`,`Email`,`Password`,`Confirm_password`,`Category`) values('".$Name."','".$Username."','".$Phone_no."','".$Email."','".$Password."','".$Confirm_password."','".$Category."')";
 if(mysqli_query($conn,$query)){
	 
	 /*@header("location:login.php");
	 @header( "refresh:5; url=login.php" ); 
	  echo "REGISTERED SUCCESSFULLY Please wait while you are redirecting to LOGIN page";*/
	echo '<script>alert("Registered Successfully. now LOGIN to continue")</script>';
	echo '<script>window.location="login.php"</script>'; 
  }
  else{
	  echo "fail";
	  echo mysqli_error($conn);
      echo mysqli_connect_error();
	 
  }
	 }
	 else
	 {
		@header("location:signup2.php"); 
	 }

?>