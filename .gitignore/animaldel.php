<?php

include 'c.php';

$id = $_GET['id'];

$q = "DELETE FROM `animals` WHERE animal_name='$id'";
mysqli_query($con,$q);


header('location:animaldis.php');

?>
