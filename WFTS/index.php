<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <link rel="javascript" href="js/js.js">
    <style>
       
        .alert-success{
height: 55px;
width: fit-content;
}
.box{
    box-shadow:3px 0px grey;
}
.heading{
    background-color:#006699 ;
    color: white;

}
    </style>
</head>
<body>

    <?php
    include 'include/navbar.php';
    ?>

    <div class="date">
        <script>
            var dt = Date();
    document.write(dt);
    </script>
 </div>
       
       
 <div class="alert alert-success" role="alert">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Joint Secretary, budget, Finance Department</b></p>
</div>

<div class="container">
<div class="row">
<div class="col-sm-3 box">                                   
  <table class="table table-hover">
    <thead>
      <tr class="heading">
        <th>Visits To WFTS</th>
        <th>Person</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Today</td>
        <td>2</td>
      </tr>
      <tr>
        <td>This week</td>
        <td>6</td>
      </tr>
      <tr>
        <td>Last Week</td>
        <td>15</td>
      </tr>
      <tr>
        <td>This Month</td>
        <td>27</td>
      </tr>
      <tr>
        <td>Last Month</td>
        <td>54</td>
      </tr>
      <tr>
        <td>Till Date</td>
        <td>144</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-3 box">                                   
  <table class="table table-hover">
    <thead>
      <tr class="heading">
        <th >Despatched Files</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Today</td>
        <td>0</td>
      </tr>
      <tr>
        <td>This week</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Last Week</td>
        <td>43</td>
      </tr>
      <tr>
        <td>This Month</td>
        <td>55</td>
      </tr>
      <tr>
        <td>Last Month</td>
        <td>163</td>
      </tr>
      <tr>
        <td>Till Date</td>
        <td>1092</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-3 box">                                   
  <table class="table table-hover">
    <thead>
      <tr class="heading">
        <th>Despatched Letters</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Today</td>
        <td>0</td>
      </tr>
      <tr>
        <td>This week</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Last Week</td>
        <td>8</td>
      </tr>
      <tr>
        <td>This Month</td>
        <td>19</td>
      </tr>
      <tr>
        <td>Last Month</td>
        <td>2</td>
      </tr>
      <tr>
        <td>Till Date</td>
        <td>34</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-3 box">                                   
  <table class="table table-hover">
    <thead>
      <tr class="heading">
        <th>Key Information</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Files on Transit</td>
        <td>214</td>
      </tr>
      <tr>
        <td>Pending Files</td>
        <td>22</td>
      </tr>
      <tr>
        <td>Letters on Transit</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Pending Letters</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Files sent Logically, But not Received by Receipient</td>
        <td>74</td>
      </tr>
      <tr>
        <td>Letters sent Logically, But not Received by Receipient</td>
        <td>32</td>
      </tr>
    </tbody>
  </table>
</div>

</div>
</div>












   
  <?php include 'include/footer.php'
  ?>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>      
</body>
</html

    






