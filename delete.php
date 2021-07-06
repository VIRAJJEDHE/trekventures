<?php

include 'config.php';

$id=$_GET['id'];

$result=mysqli_query($mysqli,"DELETE FROM users WHERE id=$id");

//redirecting to display page 
header("Location: index.php");

?>