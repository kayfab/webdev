<?php
include('connection.php');


$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$user=$_POST['username'];
$pass=$_POST['password']; 
$image=$_FILES['image'];


$query1="INSERT INTO data (id,firstname,lastname,email,username,password,image)VALUES(NULL,'$fname','$lname','$email','$user','$pass','$image')";
$insert=mysqli_query($conn,$query1);
if($insert){
	echo'<script>window.alert("Sign up successfull")</script>';
	header('refresh:0;url="fileview/album_info.php"');
}else{
	echo'<script>window.alert("fail")</script>';
	header('refresh:0; url="signup.html"');
}  



?>