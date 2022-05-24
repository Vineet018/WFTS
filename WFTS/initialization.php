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
	<title>Uno. Initialization</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
</head>
<body>
<?php include 'include/navbar.php'?>
 <div class="alert alert-success" style="height: 55px" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<h5 style="padding: 10px;">U.O. No.: Intialization</h5>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Financial Year</b></label>
					</div>
					<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>2012-2013</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
						</div>
				</div>
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-sm-3">
	<label><b>Office Name</b></label>
	</div>
<div class="col-sm-2">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>Finance (Audit)</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
</div>
</div>	
</div>
<div class="container">
<div class="row">
	<div class="col-sm-3">
	<label><b>Sub-Office Name</b></label>
	</div>
<div class="col-sm-2">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
<div>

</div>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
									<label><b>U.O. No.</b></label>
		</div>	
		<div class="col-sm-4">
			<input class="form-control form-control-sm col-sm-5" style="width: 40%" type="text">
		</div>
		
	</div><br>
	<div style="margin-left:25%">
<button type="button" class="btn btn-outline-success">Submit</button>
<button type="button" class="btn btn-outline-danger">Cancel</button>
</div>
</div>
<br>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Financial Year</th>
        <th>Department Description</th>
        <th>Sub-Office Description</th>
        <th>U.O. No.</th>
        <th>Edit</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>2012-2013</td>
      	<td>Finance (Audit)</td>
        <td>Group A-I</td>
        <td>1</td>
        <td><a href="">Edit</td>
        
      </tr>
      <tr>
        <td></td>
        <td>A/Cs Branch</td>
        <td>Deputy Secretary</td>
        <td>Somnath Dutta</td>
        <td>DS/(SD)</td>
        
        
      </tr>
      <tr>
        <td></td>
        <td>Branch</td>
       	<td>Internal Audit</td>
       
      </tr>
    </tbody>
  </table>
</div>










<?php include 'include/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>      
</body>
</html>