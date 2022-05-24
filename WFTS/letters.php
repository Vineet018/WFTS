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
	<title>Letters Type</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'include/navbar.php'?>
<div class="alert alert-success" style="height: 55px" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<h5 style="padding: 10px;">Letter Type Master</h5>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Office</b></label>
					</div>
					<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>Finance</option>
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
<label> <b>Select Sub-Office</b></label>
					</div>
					<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>Budget</option>
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
<label> <b>Letter Type</b></label>
					</div>
					<div class="col-sm-4">
      <!--     <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select> -->
		<input type="text" name="" class="form-control col-sm-6" style="height: 32px">
				</div>
				</div>
				</div><br>
				<div style="margin-left:30%">
<button type="button" class="btn btn-outline-success">Submit</button>
<button type="button" class="btn btn-outline-danger">Cancel</button>
</div>
</div>
</div>
<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;" ></i>PDF</a>
<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Sub Office Name</th>
        <th>Letters Type</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Finance</td>
        <td>Budget</td>
        <td>Application</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
      </tr>
     
    </tbody>
  </table>
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