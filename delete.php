<?php
include('connection.php');

	
		$id=$_GET['id'];
		$query="delete from video where id='$id'";
		$delete_query=mysqli_query($conn,$query);
		if($delete_query){
			echo"<script>window.alert('Delete successful')</script>";
			header('refresh:0;url=album_info.php');
		}else{
			echo"<script>window.alert('delete failed')</script>";
			header('refresh:0;url=album_info.php');
		}
	
?>