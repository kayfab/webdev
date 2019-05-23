<?php
include('process_login.php');
if(isset($_POST['upload'])){
    $target = "uploads/";
    $target_file = $target. basename( $_FILES['video']['name']);
     
    $name=$_POST['name'];
    $des=$_POST['description'];   
    $vid =$_FILES['video']['name'];

    $query=mysqli_query( $conn,"INSERT INTO video (id,name,description,video) VALUES (NULL,'$name','$des','$vid');")or die(mysqli_error($conn));
       
    
    if(move_uploaded_file($_FILES['video']['tmp_name'], $target_file)){
       
        echo '<script>window.alert("Uploaded successfull")</script>';
        header('Location: album_info.php');
    }else{
           echo'<script>window.alert("Upload failed")</script>';
           header('Location: upload.html');
       }
    
}


?>