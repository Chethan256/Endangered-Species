<?php
include 'c.php';
if(isset($_POST['done'])){
    $adopter_id = $_GET['id'];
    $adopter_name = $_POST['adopter_name'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $animal = $_POST['animal'];
    //$q = " UPDATE sanctuary SET sanctuary_id=$sanctuary_id, sanctuary_name='$sanctuary_name',location='$location' WHERE sanctuary_id=$sanctuary_id";
    $q = "UPDATE adoption SET ADOPTER_ID='$adopter_id',ADOPTER_NAME='$adopter_name',DOB='$dob',COUNTRY='$country',ANIMAL='$animal' WHERE adopter_id=$adopter_id";
    $query = mysqli_query($con,$q);

    /*if (mysqli_query($con, $q)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
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


    </form>

</div>



</body>
</html>
