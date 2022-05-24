<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

  $con=mysqli_connect("localhost","root","","wfts1");
  if($con===false)
  {
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
  }

//taking the value of the form data(input)
  $id=$_REQUEST['id'];
  $department_code=$_REQUEST['department_code'];
  $department_no=$_REQUEST['department_no'];


 $sql="INSERT INTO dm VALUES ('$id','$department_code','$department_no')";
  if(mysqli_query($con, $sql)){
    echo '<script>alert("DATA STORED IN A DATABASE SUCCESSFULLY")</script>';
  }else{
    echo 'ERROR : HUSH!!!! SORRY $SQL..'.mysqli_error($con);
  }

  // $result = mysqli_query("SELECT * FROM DM");
  
$sql = "SELECT * FROM dm";
$result = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
   
        .alert-success{
height: 55px;
width: fit-content;
}
.box{
    box-shadow:2px 3px grey;
}
.heading{
    background-color:#006699 ;
}

    </style>
</head>
<body>
   <? php include 'include/navbar.php'
    ?>
 <div class="alert alert-success" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>
<div style="margin:20px">
<form action="department.php" method="post" enctype="multipart/form-data">
<h5>Department Master</h5>
<label for="validationCustom01">Department Code</label><input required=""  class="form-control form-control-sm" name="department_code" type="text" style="width: 5%">
<label for="comment">Department Name</label>
  <textarea class="form-control" rows="5" id="comment" style="width: 30%" name="department_no" required=""></textarea><br>
<button type="submit" class="btn btn-outline-success" value="submit">Submit</button>
<button type="reset" class="btn btn-outline-danger">Cancel</button>
</div>
</form>
<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;"></i>Print as</a>



<div class="container">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Code</th>
        <th>Department Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
            <?php while($record=mysqli_fetch_assoc($result))
      { ?>

      <td>
        <?php echo $record['department_code']; ?></td>
       <td> <?php echo $record['department_no']; ?></td>
      
        <td><a href="">Edit</a></td>
        <td><a type="button" class="btn btn-outline-danger" value="Delete" onclick="deleteRow(this)">Delete</a></td>
      </tr>

            <?php
             } 
             ?>
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