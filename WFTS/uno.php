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
	<title>U.O. No. Permission</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
	
</style>
</head>
<body>
<?php include 'include/navbar.php'?>
 <div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<h5 style="padding: 10px;">U.O. No. Permission</h5>

<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Office</b></label>
					</div>
					<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Finance (Audit)--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
						</div>
				</div>
</div>
</div><br>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Sub-Office Type</b></label>
					</div>
					<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Group--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
						</div>
				</div>
</div>
</div><br>


<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Sub-Office Name</th>
        <th>Designation</th>
        <th>Official Name</th>
        <th>Abbreviation</th>
        <th>User ID</th>
        <th>Permission</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>Finance (Audit)</td>
        <td>Group H</td>
        <td>Joint Secretary</td>
        <td>Not Available</td>
        <td>NA(NA)_FA</td>
        <td>FA0172</td>
        <td>Permission</td>
      </tr>
      <tr>
        <td></td>
        <td>A/Cs Branch</td>
        <td>Deputy Secretary</td>
        <td>Somnath Dutta</td>
        <td>DS/(SD)</td>
        <td>FA0090</td>
        
      </tr>
      <tr>
        <td></td>
        <td>Branch</td>
       	<td>Internal Audit</td>
       
      </tr>
    </tbody>
  </table>
</div>















<?php include 'include/footer.php'
  ?>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>