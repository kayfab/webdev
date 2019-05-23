<?php
include('connection.php');


$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$comment=$_POST['comment'];

$result="INSERT  INTO comment(id,name,email,comment)VALUES(NULL,'$cname','$cemail','$comment')";

$query=mysqli_query($conn,$result);
if($query){
    echo '<script>window.alert("Thank you for your comment")</script>';
    refresh('Location:singlepage.html');
}else{
    echo '<script>window.alert("Failed")</script>';
    refresh('Location:singlepage.html');
}

?>