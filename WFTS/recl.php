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
	<title>Receive Letter (Sent thru’ wfts)</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <link rel="javascript" href="js/js.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'include/navbar.php'
    ?>
 <div class="alert alert-success" role="alert" style="height: 55px;">
    <p><b>Welcome, <?php echo $user_data["user_name"]?>, Group Office, Group D, Finance (Audit) Department</b></p>
</div>

<div style="padding: 20px">
	<h5>Receive Letter (Sent thru’ wfts-On Transit)</h5>
</div>
<div class="container">
	<div class="row">
			<div class="col-sm-2"><label>Order By</label></div>
	<div class="col-sm-4" style="">
	<label class="radio-inline ">
      <input type="radio" name="optradio" checked>Despatched Date
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Letter Office
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Sender Office
    </label>
	</div>
</div>


   
    
	
</div>	

</div>
<a href="WFTS.pdf"><i class="fa fa-file-pdf-o" style="font-size:30px;color:red; margin-left: 1200px;"></i>Print as</a>

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Letter Details</th>
        <th>Sender Details</th>
        <th>Sent On</th>
        <th>Attached Docs</th>
        <th>Click Here To</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td>Letters Id. : DF/o/14
      	Letter No.: not available
      	Docket No.: 2012/0457/2014/112998
      Docket date :05/06/2014</td>
      	<td>M A L D A District magistrate</td>
        <td>Jun 6 2014</td>
        <td><a href="">View</td>
        <td><a href="">Receive</td>
      </tr>
      <tr>
        <td>File No. : DF/o/14
      	File type: not available
      	Docket No.: 2012/0457/2014/112998
      Docket date :05/06/2014</td>
        <td>A/Cs Branch</td>
        <td>Deputy Secretary</td>
        <td>Somnath Dutta</td>
        <td>DS/(SD)</td>
        
        
      </tr>
      <tr>
        <td></td>
        <td>Branch</td>
       	<td>Internal Audit</td>
       
      </tr>
    </tbody>
  </table>
</div>


<a href=""><i class="fa fa-plus" style="font-size:30px;color:red; margin-left: 1200px;"></i>Receive Letter(Direct)</a>






<?php include 'include/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>