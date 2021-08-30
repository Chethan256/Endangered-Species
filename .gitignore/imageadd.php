<?php 
include 'c.php';

if(isset($_POST['done'])){

    $name = $_POST['name'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3=$_POST['image3'];
    //$q = "INSERT INTO `adoption`( `ADOPTER_NAME`, `DOB`, `COUNTRY`, `ANIMAL`) VALUES ('$adopter_name','$dob','$country','$animal')";
    $q = "INSERT INTO `images`(`NAME`, `IMAGE1`, `IMAGE2`, `IMAGE3`) VALUES ('$name','$image1',' $image2','$image3')";
    //$query = mysqli_query($con,$q);
    if (mysqli_query($con, $q)==false) {
      ?><h1 class="text-danger text-center"> ENTER PROPER DETAILS </h1>
      <?php
    }
    else{
      header('location:imagedis.php');

    }
    
    /*if (mysqli_query($con, $q)) {
        echo " successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }*/

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
    <title>insert images</title>
</head>
<body>
<div class="col-lg-6 m-auto">

    <form method="post">

      </br></br>  <div class="card"> 
        
            <div class="card-header bg-dark">
                <h1 class="text-white text-center"> INSERT images</h1> 

        
            </div></br>
        
        <label >name</label>
        <input type="text" name ="name" class="form-control"></br>

        <label >image 1</label>
        <input type="file" name ="image1" class="form-control"></br>
        
        <label >image 2</label>
        <input type="file" name ="image2" class="form-control"></br>

        <label >image3</label>
        <input type="file" name ="image3" class="form-control"></br>

        

        <button class="btn btn-success" type="submit" name="done"> Submit </button>
        </div></br>


    </form>

</div>



</body>
</html>
