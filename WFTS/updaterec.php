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
	<title>Update Recovery Infos</title>
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
	<h5>Files Received <span>(But Not Despatched)</span></h5>
</div>	
<div class="container">
	<div class="row">
			<div class="col-sm-2"><label>Order By</label></div>
	<div class="col-sm-4" style="">
	<label class="radio-inline ">
      <input type="radio" name="optradio" checked>Receipt Date
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">File Department
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Received From
    </label>
	</div>
	</div>
</div>


<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Receipt Data File No.</th>
        <th>File Department & Subject</th>
        <th>Received From</th>
        <th>Attached Docs</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>AM</td>
        <td>Agricultural Marketing</td>
        <td></td>
        <td><a href="">View</a></td>
        <td><a href="">Edit</a></td>
      </tr>
      <tr>
        <td>AG</td>
        <td>Agriculture</td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
      </tr>
      <tr>
        <td>AD</td>
        <td>Animal Resources & Department</td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
      </tr>
    </tbody>
  </table>
</div>









<?php include 'include/footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>