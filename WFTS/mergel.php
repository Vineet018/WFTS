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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      .button{
        float:right; 
      }
    </style>
</head>
<body>
<?php include 'include/navbar.php'?>
  
<div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>
<div style="padding: 20px">
<h5>Merge with File</h5>
<div class="form-check-inline">
  <label class="form-check-label">Order by
    <input type="radio" class="form-check-input" name="optradio">Receipt Date
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Pending Days
  </label>
</div>

</div>

<label>No of Days Pending>= 0</label><br>
<label>Total No.of Files Physically Received but not Despatched = 23</label>



<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Letters Details</th>
        
        <th>No of Dates</th>
        <th>No of days Pending</th>
        <th>Attached Docs</th>
        <th>Click Here To</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Letters Id : PA/4C-08/20C8
        Subject
        Letters No. : PA/4C-08/20C8
        Subject</td>
        <td>Feb 8 2013</td>
        <td>0</td>
        <td><a href= "">View</td>
       <div class="container">
        <td><a href="" type="button" class="" data-toggle="modal" data-target="#myModal"><b>Merge with File</b></a></td>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-">
      <div class="modal-content">
        <div class="modal-header">
<!--           <button type="button" class="close" data-dismiss="modal"></button> -->
          <h4 class="modal-title">Merge with File</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                 <label>File No.</label>
              </div>
              <div class="col-lg">
                   <select class="form-select form-select-sm" aria-label=".form-select-sm example" disabled="" >
          <option selected>--Select--</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          </select>
              </div>
            </div>
          </div>
         
       
       
<br>
<div class="button">

  <button type="button" class="btn btn-primary">Submit</button>

<button type="button" class="btn btn-danger">Cancel</button>


</div>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>





































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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>