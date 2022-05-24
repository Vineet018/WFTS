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
  <title>Create File</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'include/navbar.php'
    ?>
 <div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit)</b></p>
</div>
<div style="padding: 20px">
  <h5>Create File</h5>
  <div style="border-style: ridge;"><b>File Detail</b>
  <div class="container">
  <div class="row">
    <div class="col-sm-2"><label>Enter File No.</label></div>
    <div class="col-sm-4"><input class="form-control form-control-sm col-sm-5" style="width: 100%" type="text"></div>
  </div>
  <div class="row">
        <div class="col-sm-2"><label>Office Name</label></div>
        <div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example" disabled="">
          <option selected>Finance (Audit)</option>
           <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
    </select>
        </div>
  <div class="row">
    <div class="col-sm-2"><label>Sub Office Name</label></div>
       <div class="col-sm-4">
          <select class="form-select form-select-sm col-sm-6" aria-label="Default select example">
          <option selected>--Select--</option>
           <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
    </select>
        </div>
  </div>
  <div class="row">
  <div class="col-sm-2"><label>Enter Subject</label></div>

  <div class="form-group col-sm-6">
    <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  </div>
  </div>
<div class="row">
    <div class="col-sm-2"><label>Remarks if any</label></div>

  <div class="col-sm-6">
    <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  </div>
<div class="row">
     <div class="col-sm-2"><label>Incoming Serial No.</label></div>
    <div class="col-sm-4"><input class="form-control form-control-sm" type="text"></div>
 
</div>
<div class="row">
  <div class="col-sm-2"><label>File Type</label></div>
  <div class="col-sm-4" style="">
  <label class="radio-inline">
      <input type="radio" name="optradio" checked>Services Matters
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Non Plan Fund
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Plan Fund
    </label>
</div>
  
</div>
<div class="row">
  <div class="col-sm-2"><label>Incoming Earmarks</label></div>
  <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" name="optradio2" checked>Normal
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio2">Urgent
    </label>
</div>
</div>
<div class="row">
  <div class="col-sm-2"><label>Linked File</label></div>
  <div class="col-sm-4">
  <label class="radio-inline">
      <input type="radio" name="optradio1" checked>Non Linked
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio1">Linked File
    </label>
</div>
<div style="margin-left:20%;">
  <button type="button" class="btn btn-outline-success">Save</button>
<button type="button" class="btn btn-outline-secondary">Refresh</button>
<button type="button" class="btn btn-outline-danger">Cancel</button>
  
</div>





</div>






<?php include 'include/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
</body>
</html>