<?php 
include 'c.php';

if(isset($_POST['done'])){

    $adopter_name = $_POST['adopter_name'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $animal=$_POST['animal'];
    //$q = "INSERT INTO `adoption`( `ADOPTER_NAME`, `DOB`,'') VALUES ('$adopter_name','$location')";
    $q = "INSERT INTO `adoption`( `ADOPTER_NAME`, `DOB`, `COUNTRY`, `ANIMAL`) VALUES ('$adopter_name','$dob','$country','$animal')";
    //$query = mysqli_query($con,$q);
    //header('location:adoptiondis.php');
    /*if (mysqli_query($con, $q)) {
        echo " successfully";
      } else {
        echo "ENTER PROPER DETAILS " . mysqli_error($con);
      }*/
        if (mysqli_query($con, $q)==false) {
          ?><h1 class="text-danger text-center"> ENTER PROPER DETAILS </h1>
          <?php
        }
        else{
          header('location:adoptiondis.php');

        }
        
        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert adoption</title>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card"> 
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> INSERT ADOPTION DETAILS</h1> 

        
            </div></br>
        
        <label >Adopter name</label>
        <input type="text" name ="adopter_name" class="form-control"></br>

        <label >Date of borth</label>
        <input type="date" name ="dob" class="form-control"></br>
        
        <label >Country</label>
        <input type="text" name ="country" class="form-control"></br>

        <label >Animal</label>
        <input type="text" name ="animal" class="form-control"></br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>
        <?php
        
        ?>

    </form>

</div>



</body>
</html>
