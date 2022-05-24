<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
		php include 'include/navbar.php'?>

  
<div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>
<div style="padding: 20px">
	  <h5>WFTS : Pending letters</h5>
<form method="post" name="Form" onsubmit="return done()">
  

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Department/Offices</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Finance</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Sub-Office</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Budget</option>
		    </select>
				</div>
	</div>
</form>
<h6 style="background-color: blue; width: fit-content; color: white;">Pending Letters</h6>

<div style="border-style: ridge;">
  <div class="container">
  <table class="table table-hover">
    <thead style="background-color: blue; color:white;">
      <tr>
        <th>Officer</th>
        <th>Designation</th>
        <th>Pending Letters</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sabyasachi Dutta</td>
        <td>Apurba Ratan Chakraborty, Secretary , Budget Finace</td>
        <td>File no. : 3P-22/12
        Docket no. : 2012/0458/2012/00108
      Docket Date. : 23/08/2012</td>
      </tr>
     
    </tbody>
  </table>
</div>
</div>
</div>








<?php include 'include/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
