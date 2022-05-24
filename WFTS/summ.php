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
	<title>Summary Report</title>
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
<h5>Summary Details</h5>



</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2"><label>Department</label></div>
    <div class="col-sm-4"><select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
          <option selected>Finance (Audit)</option>
           <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
    </select></div>
  </div>
  <div class="row">
        <div class="col-sm-2"><label>Sub-Office</label></div>
        <div class="col-sm-4">
         <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
          <option selected>Group D</option>
           <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
    </select>
        </div>
  <div class="row">
    <div class="col-sm-2"><label>Official Name</label></div>
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
        <div class="col-sm-2">
          <label>Receipt Date</label>
        </div>
        <div class="col-md-6">
          From<input type="date" name=""> To <input type="date" name="">
        </div>
      </div>
    </div>
</div>
<br>
  <div style="margin-left: 40%;">
    <button class="btn btn-outline-success">Submit</button>
  </div>

<label>Total No.of Records = 10</label>

<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 80%;" ></i>PDF</a>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Office Name</th>
        <th>Sub-Office Name</th>
        <th>Official Name</th>
        <th>Total Received</th>
        <th>Total Despatched</th>
        <th>Total Pending</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Finance (Audit)</td>

        <td></td>
        <!-- <td>Finance (Audit)</td>
        <td>Group D<td>
        <td>D Hazra Asistant Secartary</td> -->
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
     
    </tbody>
  </table>
</div>











<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>