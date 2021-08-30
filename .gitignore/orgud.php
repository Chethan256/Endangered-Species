<?php
include 'c.php';
if(isset($_POST['done'])){
    $org_id = $_GET['id'];
    $org_name = $_POST['org_name'];
    $location = $_POST['location'];
    $sanctuary_id = $_POST['sanctuary_id'];
    
    //$q = " UPDATE sanctuary SET sanctuary_id=$sanctuary_id, sanctuary_name='$sanctuary_name',location='$location' WHERE sanctuary_id=$sanctuary_id";
    $q = "UPDATE organization SET ORG_ID=$org_id,ORG_NAME='$org_name',LOCATION='$location',SANCTUARY_ID=$sanctuary_id  WHERE org_id=$org_id";

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
    <title>update organization</title>
</head>
<body>

	

<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card">
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> UPDATE ORGANIZATION DETAILS</h1> 

        
            </div></br>
        
        <label >Organization Name</label>
        <input type="text" name ="org_name" class="form-control"></br>

        <label >Location</label>
        <input type="text" name ="location" class="form-control"></br>

        <label >Sanctuary ID</label>
        <input type="number" name ="sanctuary_id" class="form-control"></br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>


    </form>

</div>



</body>
</html>