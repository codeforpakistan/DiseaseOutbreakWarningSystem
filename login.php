<?php 


include("admin/includes/database.php");
echo $user_name=$_POST['USERNAME'];
echo $user_pass=$_POST['Password'];
if($user_name==null OR $user_pass==null){
echo "<script>alert('Please Enter your username and password')</script>";	
	
	}



?>