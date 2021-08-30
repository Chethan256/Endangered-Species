<!DOCTYPE html>
<html lang="en">
<head>


<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <title>SANCTUARY</title>
</head>

<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<div class="container-fluid">
			  
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>   
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">HOME</a>
				  </li>
				  <li class="nav-item dropdown">
					
				</li>
				</ul>
				<form class="d-flex">
					
					<a href="sanadd.php">
						<button type="button" class="btn btn-success">Add Record</button>
						</a>
						
				</form>
			  </div>
			</div>
		  </nav>



<div class="container">
<div class="clo-lg-12">
    <br><br>
    <h1 class="text-warning text-center"> Sanctuary List</h1>
    <br>
    <table class="table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">

            <td> Sanctuary ID</td>
            <td> Sanctuary Name</td>
            <td> Location</td>
            <td> Delete</td>
            <td> Update</td>


        </tr>
<?php
        include 'c.php';

    
            $q = "SELECT * FROM sanctuary ";
            $query = mysqli_query($con,$q);
            while($res =mysqli_fetch_array($query)){

?>
         <tr class="text-center">
            
            <td> <?php echo $res['SANCTUARY_ID'];?></td>
            <td> <?php echo $res['SANCTUARY_NAME'];?></td>
            <td> <?php echo $res['LOCATION'];?></td>
            <td> <button class="btn-danger btn"> <a href="sandel.php?id=<?php echo $res['SANCTUARY_ID']; ?>"class="text-white"> Delete </a></button></td>
            <td> <button class="btn-primary btn"> <a href="sanud.php?id=<?php echo $res['SANCTUARY_ID']; ?>"class="text-white"> Update </a></button></td>
            
        </tr>   
<?php
}
?>
</table>
</div>
</div>
</body>
</html>