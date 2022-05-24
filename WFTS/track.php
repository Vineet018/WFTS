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
	  <h5>Track File</h5>
<div class="form-check-inline">
  <label class="form-check-label">Select option
    <input type="radio" class="form-check-input" name="optradio">Received or Despatched by Me
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">All
  </label>
</div>
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

<div class="container">
	<div class="row">
		<div class="col-sm-2">
		<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  		<label class="form-check-label" for="flexCheckDefault">
    	File No.
  		</label>
		</div>
		</div>
		
		<div class="col-sm-3">
		<input class="form-control form-control-sm col-sm-5"type="text">
		</div>
		<div class="col-sm-4">
			<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  		<label class="form-check-label" for="flexCheckDefault">
    	File Receipt Date
  		</label>
  		<div class="col-sm-8">
  			From<input type="date" name="date">
  			To<input type="date" name="date">
  		</div>	
		</div>
		</div>

<div class="row">
			<div class="col-sm-2">
		<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  		<label class="form-check-label" for="flexCheckDefault">
    	Subject
  		</label>
		</div>
		</div>
		<div class="col-sm-3">
		<input class="form-control form-control-sm col-sm-5"type="text">
		</div>
		</div>
		<div class="row">
				<div class="col-sm-2">
		<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  		<label class="form-check-label" for="flexCheckDefault">
    	File Department
  		</label>
		</div>
		
		</div>
		<div class="col-sm-3">
		<select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>--Select--</option>
		    </select>

		</div>
		</div>

	</div>
</div>

<br>
<div class="container" style="border-style: solid;">
	<div class="form-check">
  		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  		<label class="form-check-label" for="flexCheckDefault">
    	Show Files with Attached Docs.
  		</label>
		</div>

<div class="form-check-inline">
  <label class="form-check-label">File related with
    <input type="radio" class="form-check-input" name="optradio4">All Types
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio4">Vigilance case
  </label>
</div>

<div class="col-sm-4">
	<div class="form-check-inline">
  <label class="form-check-label">File Status
    <input type="radio" class="form-check-input" name="optradio3">All
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3">Normal
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio3">Urgent
  </label>
</div>
</div>

<div class="col-md-6-4">
	<div class="form-check-inline">
  <label class="form-check-label">File Type
    <input type="radio" class="form-check-input" name="optradio2">Received by Me
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2">Pending in My Table
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio2">Despatched by Me
  </label>
</div>
</div>
<div class="form-check-inline">
  <label class="form-check-label">Order by
    <input type="radio" class="form-check-input" name="optradio1">Receiving Date
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio1">File Department
  </label>
</div>
</div>

<button type="button" class="btn btn-outline-success">Submit</button>


</div>




<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
