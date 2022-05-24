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
	<title>Set Additional Chargers</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
</head>
<body>
<?php include 'include/navbar.php'?>
<div class="alert alert-success" style="height: 55px" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<h5 style="padding: 10px;">Set Additional Chargers</h5>
<!-- <div class="container">
				<div class="row">

					<div class="col-sm-2">
<label> <b>Select Department</b></label>
					</div>
					<div class="col-sm-3">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
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

					<div class="col-sm-2">
<label> <b>Select Sub-Office</b></label>
					</div>
					<div class="col-sm-3">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
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

					<div class="col-sm-2">
<label> <b>Select Official</b></label>
					</div>
					<div class="col-sm-3">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
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

					<div class="col-sm-2">
<label> <b>Select Official</b></label>
					</div>
					<div class="col-sm-3">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
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
  <div class="row justify-content-start">
    <div class="col-4">
      One of two columns
    </div>
    <div class="col-12 col-sm-6 col-md-8">


<label> <b>Select Official</b></label>


 <select class="form-select form-select-sm" aria-label="Default select example">
 <option selected>--Select--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>


</div>
     One of two columns -->
    <div class="container">
    	<div class="row">
    		<div class="col-sm-2">
    			<label>Select Department</label>
    		</div>
    		<div class="col-sm-3">
    			<select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
       			<option selected>--Select--</option>
        		<option value="1">One</option>
       			<option value="2">Two</option>
        		<option value="3">Three</option>
				</select>
    		</div>
    		<div class="row">
    			<div class="col-sm-2">
    				<label>Select Sub-Office</label>
    			</div>
    			<div class="col-sm-3">
    				<select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
       			<option selected>--Select--</option>
        		<option value="1">One</option>
       			<option value="2">Two</option>
        		<option value="3">Three</option>
				</select>
    			</div>
    		<div class="row">
    			<div class="col-sm-2">
    				<label>Select Official</label>
    			</div>
    			<div class="col-sm-3">
    					<select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
       			<option selected>--Select--</option>
        		<option value="1">One</option>
       			<option value="2">Two</option>
        		<option value="3">Three</option>
				</select>
    			</div>
    		</div>


    			
    		</div>
    		
    	</div>

    	<div class="col-">
    	<button type="button" class="btn btn-primary">Submit</button>
    		<button type="button" class="btn btn-Secondary">Cancel</button>
    	</div>
    </div>


<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Official Details</th>
        <th>Additional Official Detail</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Arun Kumar Das,Joint Scretary Group</td>
        <td>Arun Kumar Das,Joint Scretary Group (Audit)</td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
     
      </tr>
      <tr>
        <td>AG</td>
        <td>Agriculture</td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
      
      </tr>
      <tr>
        <td>AD</td>
        <td>Animal Resources & Department</td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
 
      </tr>
    </tbody>
  </table>
</div>
    </div>
  </div>
 


<script>
function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}
</script>




<?php include 'include/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>