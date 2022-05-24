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
	<title>Official Master</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    .head{
            text-align: center;
            background-color:#006699;
        }
        .alert-success{
height: 55px;

}
.heading{
    background-color:#006699 ;
}
</style>
</head>
<body>
	<?php include 'include/navbar.php'?>
 <div class="alert alert-success" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<div>
<h5 style="padding: 10px;">Official Master</h5>

<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Office</b></label>
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
</div><br>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Sub-Office</b></label>
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
</div><br>
<div class="container">
				<div class="row">

					<div class="col-sm-3">
<label> <b>Select Designation</b></label>
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
</div><br>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
									<label><b>Enter Official Name</b></label>
		</div>	
		<div class="col-sm-4">
			<input class="form-control form-control-sm col-sm-5" style="width: 100%" type="text">
		</div>
		
	</div>
</div><br>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
									<label><b>Official Abbr</b></label>
		</div>	
		<div class="col-sm-4">
			<input class="form-control form-control-sm col-sm-5" style="width: 40%" type="text">
		</div>
		
	</div>
</div><br>
<div style="margin-left:25%">
  <button type="button" class="btn btn-outline-success">Submit</button>
<button type="button" class="btn btn-outline-danger">Cancel</button>
</div>

</div>
<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;"></i>Print as</a>
<br>

<b style="padding: 10px">Show</b>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Departmental Official</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">All Officials<label>
</div>
<b>Order By</b>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3">
  <label class="form-check-label" for="inlineRadio3">Designation<label>
</div>	
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4">
  <label class="form-check-label" for="inlineRadio4">User Id<label>
</div>	
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option5">
  <label class="form-check-label" for="inlineRadio5">Designation,Office<label>
</div>	

<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Sub-Office Name</th>
        <th>Designation</th>
        <th>Official Name</th>
        <th>Abbreviation</th>
        <th>User ID</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>Finance (Audit)</td>
        <td>A/Cs Branch</td>
        <td>Not Available</td>
        <td>Not Available</td>
        <td>NA(NA)_FA</td>
        <td>FA0172</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" value="Delete" class="btn btn-outline-danger" onclick="deleteRow(this)">Delete</a></td>
      </tr>
      <tr>
        <td></td>
        <td>A/Cs Branch</td>
        <td>Deputy Secretary</td>
        <td>Somnath Dutta</td>
        <td>DS/(SD)</td>
        <td>FA0090</td>
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




















<?php include 'include/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>