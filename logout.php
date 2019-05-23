<?php
include("connection.php");

session_destroy();
echo'<script>window.alert("Logged Out")</script>';
header('Location: login.html');



?>