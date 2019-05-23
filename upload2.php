<?php
include('connection.php');
if(isset($_POST['upload'])){
    $target = "uploads/";
    $target_file = $target. basename( $_FILES['video']['name']);
    
    $name=$_POST['name'];
    $des=$_POST['description'];
    $user_id=$_SESSION['id'];
    $vid =$_FILES['video']['name'];
    
    
    if(move_uploaded_file($_FILES['video']['tmp_name'], $target_file)){
        $query=mysqli_query( $conn,"INSERT INTO video (id,name,description,video) VALUES (NULL,'$name','$des','$vid')")or die(mysqli_error($conn));
       
        echo "The file ". basename($_FILES['uploadedfile']['name'])."has been uploaded successfully";
        header('Location: album_info.html');
    }else{
           echo'<script>window.alert("Upload failed")</script>';
           header('Location: upload.html');
       }
    
}


?>