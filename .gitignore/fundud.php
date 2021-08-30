<?php
include 'c.php';
if(isset($_POST['done'])){
    $donor_id = $_GET['id'];
    
    /*$donor_name = $_GET['donor_name'];
    $dob = $_GET['dob'];
    $country = $_get['country'];
    $fund_amount=$_GET['fund_amount'];
    $org_id = $_GET['org_id'];*/
    
    $donor_name = $_POST['donor_name'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $fund_amount=$_POST['fund_amount'];
    $org_id = $_POST['org_id'];

    //$q = " UPDATE sanctuary SET sanctuary_id=$sanctuary_id, sanctuary_name='$sanctuary_name',location='$location' WHERE sanctuary_id=$sanctuary_id";
   $q = "UPDATE donation SET DONOR_ID='$donor_id',DONOR_NAME='$donor_name',DOB='$dob',COUNTRY=' $country',FUND_AMOUNT=' $fund_amount',ORG_ID='$org_id' WHERE donor_id = $donor_id";
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
        header('location:funddis.php');

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
    <title>insert donation</title>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card"> 
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> INSERT DONATION DETAILS</h1> 

        
            </div></br>
        
        <label >Donor name</label>
        <input type="text" name ="donor_id" class="form-control"></br>

        <label >Date of birth</label>
        <input type="date" name ="dob" class="form-control"></br>
        
        <label >Country</label>
        <input type="text" name ="country" class="form-control"></br>

        <label >Fund Amount</label>
        <input type="number" name ="fund_amount" class="form-control"></br>

        <label >Organization ID</label>
        <input type="number" name ="org_id" class="form-control"></br>


        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>


    </form>

</div>



</body>
</html>
