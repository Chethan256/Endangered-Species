<?php
include 'c.php';

if(isset($_POST['done'])){

  $animal_name = $_POST['animal_name'];
  $genus_name = $_POST['genus_name'];
  $species_name = $_POST['species_name'];
  $life_span = $_POST['life_span'];
  $population = $_POST['population'];
  $avg_weight = $_POST['avg_weight'];
  $status = $_POST['status'];
  $sanctuary = $_POST['sanctuary'];

    //$q = "INSERT INTO `sanctuary`( `SANCTUARY_NAME`, `LOCATION`) VALUES ('$sanctuary_name','$location')";
    $q = "INSERT INTO `animals`(`ANIMAL_NAME`, `GENUS_NAME`, `SPECIES_NAME`, `LIFE_SPAN`, `POPULATION`, `AVG_WEIGHT`, `STATUS`, `SANCTUARY`) VALUES ('$animal_name','$genus_name','$species_name',$life_span,$population, $avg_weight, $status , $sanctuary)";
    //$query = mysqli_query($con,$q);
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
        header('location:animaldis.php');

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
    <title>insert animal</title>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card">
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> INSERT ANIMAL DETAILS</h1> 

        
            </div></br>
        
        <label >Animal Name</label>
        <input type="text" name ="animal_name" class="form-control"></br>

        <label >Genus Name</label>
        <input type="text" name ="genus_name" class="form-control"></br>

        <label >Species Name</label>
        <input type="text" name ="species_name" class="form-control"></br>

        <label >Life Span></label>
        <input type="number" name ="life_span" class="form-control"></br>

        <label >Population</label>
        <input type="number" name ="population" class="form-control"></br>

        <label >Average Weight</label>
        <input type="number" name ="avg_weight" class="form-control"></br>

        <label >Status</label>
        <input type="number" name ="status" class="form-control"></br>

        <label >Sanctuary</label>
        <input type="number" name ="sanctuary" class="form-control"></br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>

    </form>
</div>
</body>
</html>

