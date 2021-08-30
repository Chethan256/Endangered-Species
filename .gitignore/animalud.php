<?php
include 'c.php';
if(isset($_POST['done'])){
    $animal_name = $_GET['id'];
    $genus_name = $_POST['genus_name'];
    $species_name = $_POST['species_name'];
    $life_span = $_POST['life_span'];
    $population = $_POST['population'];
    $avg_weight = $_POST['avg_weight'];
    $status = $_POST['status'];
    $sanctuary = $_POST['sanctuary'];

    //$q = " UPDATE sanctuary SET sanctuary_id=$sanctuary_id, sanctuary_name='$sanctuary_name',location='$location' WHERE sanctuary_id=$sanctuary_id";
    $q = "UPDATE animals SET ANIMAL_NAME='$animal_name',GENUS_NAME=' $genus_name ',SPECIES_NAME=' $species_name',LIFE_SPAN=$life_span,POPULATION=$population,AVG_WEIGHT=$avg_weight,STATUS=$status,SANCTUARY= $sanctuary WHERE animal_name='$animal_name'";
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
    <title>update animal</title>
</head>
<body>


<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card">
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> UPDATE ANIMAL DETAILS</h1> 

        
            </div></br>
        
        
        <label >Genus Name</label>
        <input type="text" name ="genus_name" class="form-control"></br>

        <label >Species Name</label>
        <input type="text" name ="species_name" class="form-control"></br>

        <label> Life Span></label>
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

