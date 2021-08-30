<?php 
include 'c.php';

if(isset($_POST['done'])){

    $donor_name = $_POST['donor_name'];
    $dob = $_POST['dob'];
    $country = $_POST['country'];
    $fund_amount=$_POST['fund_amount'];
    $org_id = $_POST['org_id'];
    //$q = "INSERT INTO `adoption`( `ADOPTER_NAME`, `DOB`, `COUNTRY`, `ANIMAL`) VALUES ('$adopter_name','$dob','$country','$animal')";
    $q = "INSERT INTO `donation`(`DONOR_NAME`, `DOB`, `COUNTRY`, `FUND_AMOUNT`, `ORG_ID`) VALUES ('$donor_name','$dob',' $country',$fund_amount,$org_id)";
    //$query = mysqli_query($con,$q);
    if (mysqli_query($con, $q)==false) {
      ?><h1 class="text-danger text-center"> ENTER PROPER DETAILS </h1>
      <?php
    }
    else{
      header('location:funddis.php');

    }
    
    /*if (mysqli_query($con, $q)) {
        echo " successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
*/
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
        <input type="text" name ="donor_name" class="form-control"></br>

        <label >Date of borth</label>
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
