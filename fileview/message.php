<?php
include('connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['phonenumber'];
$mess=$_POST['message'];



$query="INSERT INTO messages (id,name,email,phonenumber,message)VALUES(NULL,'$name','$email','$mobile','$mess')";
$insert=mysqli_query($conn,$query);
if($insert){
	echo'<script>window.alert("THANK YOU FOR CONTACTING US, WE WILL GET BACK TO YOU")</script>';
	header('Location: index.html');
}else{
	echo'<script>window.alert("FAILED")</script>';
	header('Location: contact.html');
}  



?>