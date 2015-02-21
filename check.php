<?php
if(isset($_POST['login'])){
include("database.php");
$user_name=$_POST['USERNAME'];
$user_pass=$_POST['Password'];

$select_user="select user.user_id , user.user_pass , role.user_role as role from user INNER join role on user.user_id=role.user_id and user.user_id='$user_name' and user.user_pass='$user_pass' ";
$run_user=mysql_query($select_user);
$row=mysql_fetch_assoc($run_user);

if($user_name=="USERNAME" OR $user_pass=="Password"){

echo "<center><font color='#CC0000'>"."*Fill the required fields"."</font></center>";	
	
	}
else{

 $role=$row['role'];
	
	
if($role!='admin' AND $role!='reporter'){
	
	echo "<center><font color='#CC0000'>"."*Invalid Username or Password"."</font></center>";
}
}}