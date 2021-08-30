<?php
include 'c.php';

if(isset($_POST['done'])){

    $org_name = $_POST['org_name'];
    $location = $_POST['location'];
    $sanctuary_id = $_POST['sanctuary_id'];
    //$q = "INSERT INTO `sanctuary`( `SANCTUARY_NAME`, `LOCATION`) VALUES ('$sanctuary_name','$location')";
    $q = "INSERT INTO `organization`(`ORG_NAME`, `LOCATION`, `SANCTUARY_ID`) VALUES ('$org_name','$location',$sanctuary_id)";
    //$query = mysqli_query($con,$q);
    if (mysqli_query($con, $q)==false) {
        ?><h1 class="text-danger text-center"> ENTER PROPER DETAILS </h1>
        <?php
      }
      else{
        header('location:orgdis.php');

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
    <title>insert organization</title>
</head>
<body>

	

<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card">
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> INSERT ORGANIZATION DETAILS</h1> 

        
            </div></br>
        
        <label >Organization Name</label>
        <input type="text" name ="org_name" class="form-control"></br>

        <label >Location</label>
        <input type="text" name ="location" class="form-control"></br>

        <label >Sanctuary ID</label>
        <input type="number" name ="sanctuary_id" class="form-control"></br>
        <label >pin code</label>
        <input type="number" name ="sanctuary_id" class="form-control"></br>
        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>


    </form>

</div>



</body>
</html>