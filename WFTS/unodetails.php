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
	<?php include 'include/navbar.php'?>
  
<div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>
<div style="padding: 20px">
	  <h5>U.O. No Generation and Print</h5>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Department</b></label>
			</div>
				<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Finance(Audit)</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Sub-Office</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Group D</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Official Name</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>(Nav) Group Office</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">First 50 Record
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">All
  </label>
</div>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Files Details</th>
        <th>U No. & Date</th>
        <th>Approved By</th>
        <th>Click To</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>FIle No. : PA/4C-08/20C8
        Subject</td>
        <td>Uno :
        UNO Date:</td>
        <td><a href="">Generate <br>
        Delete</a></td>
        
        
      </tr>
      <tr>
        <td>AG</td>
        <td>Agriculture</td>
        <td><a href="">Select</a></td>
      </tr>
      <tr>
        <td>AD</td>
        <td>Animal Resources & Department</td>
        <td><a href="">Select</a></td>
      </tr>
    </tbody>
  </table>
</div>




</div>







<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
