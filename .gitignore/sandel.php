<?php

include 'c.php';

$id = $_GET['id'];

$q = "DELETE FROM `sanctuary` WHERE sanctuary_id=$id";
mysqli_query($con,$q);


header('location:sandis.php');

?>