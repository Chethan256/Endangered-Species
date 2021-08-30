<?php

include 'c.php';

$id = $_GET['id'];

//$q = "DELETE FROM `sanctuary` WHERE sanctuary_id=$id";
$q = "DELETE FROM `images` WHERE name='$id'";
mysqli_query($con,$q);

if (mysqli_query($con, $q)) {
    echo " successfully";
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }

//header('location:imagedis.php');

?>