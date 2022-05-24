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
	<title>Designation</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
        .alert-success{
height: 55px;
width: fit-content;
}

.heading{
    background-color:#006699 ;
}
    </style>
</head>
<body>
 <?php
    include 'include/navbar.php';
    ?>
    <div class="alert alert-success" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<div style="padding-left:10px">
<h5>Designation Master</h5>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
    <label for="exampleFormControlTextarea1"><b>Designation Details<b></label>
		</div>
		<div class="col-sm-4">
			<textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
		</div>
		
		<label>Department Abbr</label><input class="form-control form-control-sm" type="text" style="width: 5%">
		<label>Rank</label><input class="form-control form-control-sm" type="text" style="width: 5%"><br>
		<button type="button" class="btn btn-success">Submit</button>
<button type="button" class="btn btn-danger">Cancel</button>
	</div>
</div>
</div><br>
<div style="padding: 10px">
<b>List by order</b><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Conventional</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Alphabetical</label>
</div><br>

<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;"></i>Print as</a>
</div>
<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th style="width: 60%;">Description</th>
        <th>Abbreviation</th>
        <th>Rank</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Governer</td>
        <td>Gov</td>
        <td>0</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
      </tr>
      <tr>
        <td>Speaker</td>
        <td>Spkr</td>
        <td>1</td>
        <td><a href="">Edit</a></td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
      </tr>
      <tr>
        <td>Deputy Speaker</td>
        <td>Dyspkr</td>
        <td>2</td>
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








<?php include 'include/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>  
</body>
</html>