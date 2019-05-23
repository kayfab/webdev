<?php
include('connection.php');
if(isset($_POST['upload'])){
$target = "uploads/";
$target_file = $target. basename( $_FILES['video']['name']);

$name=$_POST['name'];
$des=$_POST['description'];
$vid =$_FILES['video']['name'];


$tmpName=$_FILES['video']['tmp_name'];
$fileSize=$_FILES['video']['size'];
$fileError=$_FILES['video']['error'];
$fileType=$_FILES['video']['type'];

$fileExt=explode('.','$name');
$fileActualExt= strtolower(end($fileExt));
$fileallowed=array('mp4','mpeg','webm');

$query=mysqli_query( $conn,"INSERT INTO video (id,name,description,video) VALUES (NULL,'$name','$des','$vid')")or die(mysqli_error($conn));

if(move_uploaded_file($_FILES['video']['tmp_name'], $target_file)){
    ?>
    <script>
    alert( "<php echo $vid ?> has been uploaded");
    header('Location: album_info.php');
    <?php
    
   if(in_array($fileActualExt,$fileallowed)){
        if($fileError ===0 ){
            if($fileSize < 1000000){
                $nameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$nameNew;

            }else{
                ?>
                <script>
                alert("error");
                window.location.href='upload.html';
                </script>
                <?php
            }
        }
   }else{
    ?>
    <script>
    alert("File Cant be uploaded");
    window.location.href='upload.html';
    </script>
    <?php;
   }
    
}else{
       echo'<script>window.alert("Upload failed")</script>';
       header('Location: upload.html');
   }

}
?>