<?php
	include 'connection.php';
	if(isset($_POST['upload'])){

	$name=$_POST['name'];
    $des=$_POST['description'];   
    $vid =$_FILES['video']['name'];

	

	
	$uploadDir = 'uploads/';
	$file_name = $_FILES['video']['name'];
	$file_size =$_FILES['video']['size'];
	$file_tmp =$_FILES['video']['tmp_name'];
	$file_type=$_FILES['video']['type'];

	$file_ext= explode('.', $file_name);
	$file_Actext=strtolower(end($file_ext));

	$fileNewname= $name.$des.".".$file_Actext;

	$filePath= $uploadDir.$fileNewname;
	$results = move_uploaded_file($file_tmp,$filePath);
	if (!$results) {
		$filePath= "uploads/no_video.mp4";
	}

	$query="INSERT INTO video(id,name,description,video)VALUE(NULL,'$name','$des','$vid',);";
	$insert=mysqli_query($conn,$query);
	if($insert){
		echo"<script>window.alert('Your video is uploaded Successfully')</script>";
		header('refresh:0;url=album_info.php');
	}else{
		echo"<script>window.alert('Failed to upload')</script>";
		header('refresh:0;url=upload.html');
	}

	}
?>