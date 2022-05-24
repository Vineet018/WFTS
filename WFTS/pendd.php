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
		php include 'include/navbar.php'?>

  
<div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>
<div style="padding: 20px">
	  <h5>Pending File: Detail Report</h5>
<form method="post" name="Form" onsubmit="return done()">
  

<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Select Office/Department</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Finance</option>
		    </select>
				</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<label> <b>Select Sub Office</b></label>
		</div>
			<div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
        <option selected>Budget</option>
		    </select>
				</div>
	</div>
  <div class="row">
    <div class="col-sm-4">
      <label><b>Select Official</b></label>
    </div>
    <div class="col-sm-4">
        <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
        <option selected>All</option>
        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <label><b>Enter No. Days Onwards</b></label>
    </div>
    <div class="col-6 col-sm-1">
      <input type="text"  name="answer_a" id="a" class="form-control form-control-sm">
      <button class="btn btn-primary" onclick="done()">Submit</button>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="form-check-inline">
    <label><b>Order by</b></label>
  </div> 
  <div class="col-md-6">
    <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="optradio" value="Summary">Receipt Date
  </label>
   <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="optradio" value="Summary">File Office
  </label>
   <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="optradio" value="Summary">Sender Office
  </label>
   <div class="form-check-inline">
    <input type="radio" class="form-check-input" name="optradio" value="Summary">Pending Days
  </label>

</div>
  </div>
  </div>

</div>
</div>
</div>
</form>
<div style="border-style: ridge;">
  <div class="container">
  <table class="table table-hover">
    <thead style="background-color: blue; color:white;">
      <tr>
        <th>Sl.No.</th>
        <th>Official Name</th>
        <th>File Details</th>
        <th>Received From</th>
        <th>Receipt Date</th>
        <th>No. of Days Pending</th>
        <th>Attached Docs</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Apurba Ratan Chakraborty, Secretary , Budget Finace</td>
        <td>File no. : 3P-22/12
        Docket no. : 2012/0458/2012/00108
      Docket Date. : 23/08/2012</td>
        <td>Hk Dwivedi, principal Secreatary,Finance</td>
        <td>Sabyasachi Dutta</td>
        <td>Joint Secretary</td>
        <td>16</td>
      </tr>
     
    </tbody>
  </table>
</div>
</div>
</div>

<script type="text/javascript">
  function done() {
    var a = document.forms["Form"]["answer_a"].value;
    if (a == null || a == "") {
      alert("Please Fill All Required Field!!!!!");
    }else{
       alert("Submit Data Successfully.....");
    }
   
  }
</script>



<?php include 'include/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
