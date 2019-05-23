<?php
include('connection.php');
if(isset($_POST['upload'])){

$file = $_FILES['file'];

$name=$_POST['name'];
$des=$_POST['discription'];
$uploadDir='uploads/';

$vid=($_FILES['video']['name']);
$tmpName=$_FILES['video']['tmp_name'];
$fileSize=$_FILES['video']['size'];
$fileError=$_FILES['video']['error'];
$fileType=$_FILES['video']['type'];


$fileExt= explode('.', $name);
$fileActualExt= strtolower(end($fileExt));
$allowed = array('mp4', 'mpeg', 'webm');


if(in_array($fileActualExt,$allowed)){ 
	$query="INSERT INTO video(id,name,description,video) VALUES(NULL,$name,$de,$target)";
	if($fileError === 0){
		if($fileSize < 1000000){
			$nameNew = uniqid('', true) .".".$fileActualExt;
			$fileDestination = 'uploads/'.$nameNew;
			move_uploaded_file($tmpName, $fileDestination);

			echo"Successfully uploaded";
			header("Location: index.html");
			
		}else{
			echo"File too large!";
		}

	}else{
		echo"There was an error uploading the file!";
	}

}else{
	echo"File type cant be uploaded";
}
}


?>