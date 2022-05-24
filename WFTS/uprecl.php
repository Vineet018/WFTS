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
	<title>Update Recv. Info</title>
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
<h5>Letters Received Directly(But Not Despatched)</h5>


<div class="form-check-inline">
  <label class="form-check-label">Order by
    <input type="radio" class="form-check-input" name="optradio">Receipt Date
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Letter Department
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Received From
  </label>
</div>
</div>

<!-- <label>No of Days Pending>=</label> -->
<label>Total No.of Letters Received = 1</label>

	


<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>Receipt Date</th>
        <th>Letters Id No.</th>
        <th>Letter Details</th>
        <th>Received From</th>
        <th>Attach Docs</th>
        <th>Edit</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Feb 4 2013
        5:40PM</td>
        <td>PA/4C-08/20C8
        Subject</td>
        <td>Department: finance
        Subject: Yearly Budget</td>
        <td>Apurba Ratan Chakraborty</td>
        <td><a href="">View</a></td>
        <td><a href="nrecel.php">Edit</td>
        
      </tr>
      <tr>
        <td>AG</td>
        <td>Agriculture</td>
        <td><a href="">Select</a></td>
      </tr>
      <tr>
        <td>AD</td>
        <td>Animal Resources & Department</td>
        <td><a href="">Select</a></td>
      </tr>
    </tbody>
  </table>
</div>



<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>