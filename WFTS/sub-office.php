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
	<title>Sub-office</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	.heading{
    background-color:#006699 ;
}
      
                .alert-success{
height: 55px;
width: fit-content;
}
    </style>
</head>
<body>
	<?php include 'include/navbar.php'?>
<div class="alert alert-success" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<div style="margin:20px">
<h5>Sub-Office Master</h5><br>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Office/Department</b></label>
					</div>
					<div class="col-sm-4">
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
	<div class="col-sm-3">
	<label><b>Select Sub-Office Type</b></label>
	</div>
<div class="col-sm-2">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>--Select--</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		</select>
				</div>
</div>
</div>	
</div><br>
<div class="container">
<div class="row">
	<div class="col-sm-3">
	<label><b>Select New / Serial No.</b></label>
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

</div><br>
<div class="container">
<div class="row">
	<div class="col-sm-3">
	<label><b>Enter Sub-Office Name</b></label>
	</div>

<div class="col-lg-9">
  <textarea class="form-control" rows="5" id="comment" style="width: 40%"></textarea>

</div>
</div><br>
<div style="margin-left:25%">
<button type="button" class="btn btn-outline-success">Submit</button>
<button type="button" class="btn btn-outline-danger">Cancel</button>
</div>
<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;"></i>Print as</a>

<b>Show</b>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Departmental Sub_Office</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">All Sub-Office<label>
</div>











<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Sub-Office Type</th>
        <th>Sub-Office Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>Finance (Audit)</td>
        <td>Branch</td>
        <td>Pension Branch</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" value="Delete" class="btn btn-outline-danger" onclick="deleteRow(this)">Delete</a></td>
      </tr>
      <tr>
        <td></td>
        <td>Branch</td>
        <td>APS Branch</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" value="Delete" class="btn btn-outline-danger" onclick="deleteRow(this)">Delete</a></td>
      </tr>
      <tr>
        <td></td>
        <td>Branch</td>
       	<td>Internal Audit</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" value="Delete" class="btn btn-outline-danger" onclick="deleteRow(this)">Delete</a></td>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
<?php include 'include/footer.php'?>
</body>
</html>