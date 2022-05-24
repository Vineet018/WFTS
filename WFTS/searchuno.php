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
	<title>Search File by Uo No</title>
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
<h5>Search File by UO No.</h5>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <label>File Department</label>
    </div>
    <div class="col-sm-4">
    <select class="form-select form-select-sm" placeholder="All">All</select>
  </div>
  <div class="row">
    <div class="col-sm-2">
      <label>U.O Date</label>
    </div>
    <div class="col-sm-8">
      From <input type="date" name=""> To <input type="date" name="">
    </div>
  </div>
  </div><br>
  <div style="margin-left: 40%;">
    <button class="btn btn-outline-success">Submit</button>
  </div>
    
</div>

<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 80%;" ></i>PDF</a>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sl.No.</th>
        <th>File Details</th>
        <th>Receipt Details</th>
        <th>Despatch Details</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>File No. : DP/0/Budget/11B-<td>
        <td>Application</td>
        <td>fdg</td>
      </tr>
     
    </tbody>
  </table>
</div>












<label>Total no of records = 6</label>





<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>