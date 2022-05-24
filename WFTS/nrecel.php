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
	<title>Receive Letter (Not Send Thru’ WFTS)</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include 'include/navbar.php'
    ?>
 <div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>
<div style="padding: 20px">
	<h5>Receive Letter (Not Send Thru’ WFTS)</h5>

	
	<div class="col-sm-2"><label></label></div>
	<div class="col-sm-4" style="">
	<label class="radio-inline ">
      <input type="radio" name="optradio" checked>New Letter
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Letter With WFTS ID No.
    </label>
	</div>
	<label><b>Letter Details</b></label>
</div>








	
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
			<label>Letter No. ,If Any</label>
			</div>
			<div class="col-md-6">
			<input class="form-control form-control-sm col-sm-5" style="width: 40%" type="text">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>Letter Date, If Any</label>
			</div>
			<div class="col-md-6">
				<input type="Date" name="date">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>Letter Type Desc</label>
			</div>
			<div class="col-md-3">
			<select class="form-select-md" aria-label="Default select example">
  			<option selected>Budget</option>
  			<option value="1">One</option>
  			<option value="2">Two</option>
  			<option value="3">Three</option>
			</select>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label>Letter Subject</label>
			</div>
			<div class="col-md-6">
				<textarea class="col-md-6"></textarea>
			</div>
		</div>


	</div>


<label><b>Sender Details</b></label>


	<div class="container">
		<div class="row">
			<div class="col"><label></label></div>
	<div class="" style="">
	<label class="radio-inline ">
      <input type="radio" name="optradio" checked>Department
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Others
    </label>
			
		</div>
		
	</div>


</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Office Name</b></label>
			</div>
				<div class="col-md">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>Finance</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Sub Office Name</b></label>
		</div>
			<div class="col-md">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>Budget</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label>Official Name</label>
		</div>
			<div class="col-md">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>(Secy) Apurba Ratan Chakraborty</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label>Remarks if Any</label>
		</div>
		<div class="col-sm-6">
			<textarea></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label>Incoming Earmarks</label>
		</div>
		<div class="col-md-4">
			<div class="col-sm-2"><label></label></div>
	<div class="col-sm-4" style="">
	<label class="radio-inline ">
      <input type="radio" name="optradio" checked>Normal
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Urgent
    </label>
	</div>
	<button type="button" class="btn btn-primary">Save</button>
	<button type="button" class="btn btn-danger">Refresh</button>










</div>



<?php include 'include/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

