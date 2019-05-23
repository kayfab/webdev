<?php
include('connection.php');
session_start();

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$data=mysqli_query($conn,"select * from data where username='$username'and password='$password'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($data);
	
    if($row2 < 1){
		header("Location:login.html");
		exit();
	}else{
		$row=mysqli_fetch_assoc($data);
		if ($password == $row['password']){
			$_SESSION['username']=$rows2['username'];
			$_SESSION['password']=$rows2['password'];
      $_SESSION['id']=$row2['id'];                                      
    	 echo'<script>window.alert("Success")</script>';
            header("Location:upload.html");
           
            
		}else{
			echo'<script>window.alert("Failed")</script>';
			header("Location:login.html");
		}
	}
}

?>