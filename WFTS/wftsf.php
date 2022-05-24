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
	  <h5>WFTS Usage Report: File Tracking</h5>

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Select Office/Department</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>All</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Select Sub Office</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>All</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
		    </select>
				</div>
	</div>
</div>
<div class="form-check-inline">
  <label class="form-check-label">View
    <input type="radio" class="form-check-input" name="optradio" value="Summary">Summary Report
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" value="Detail">Detail Report
  </label>
</div>

<div id="textboxes" style="display: none">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-4">
    			<label>Agricultural Marketing</label>
    		</div>
    		<div class="col-sm-2">
    			<label>34</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-sm-4">
    			<label>Agriculture</label>
    		</div>
    		<div class="col-sm-2">
    			<label>184</label>
    		</div>
    	</div>
    </div>   
</div>
<div id="textboxes1" style="display:none;">
	<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sub Office</th>
        <th>Opening Balance</th>
        <th>File Received</th>
        <th>File for Disposal</th>
        <th>File Disposed</th>
        <th>Closing Balance</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Finance (Audit)</td>
        <td>0</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>2</td>
      </tr>
     
    </tbody>
  </table>
</div>


</div>

<div id="show">
	
</div>

<script type="text/javascript">
$(function() {
    $('#textboxes').click(function() {
    		var value=this.value;
        $('#show').html(value);
    });           
    $('#textboxes1').click(function() {
    		var value=this.value;
        $('#show').html(value);
    });
});
</script>





<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
