<?php 

session_start();

	include("connection.php");
	include("functions.php");

$result = false;
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			// echo 'Nothing';
            if($result)
            {
                // echo '<script type="text/javascript">
                // swal("Here's the title!", "...and here's the text!");
                // </script>';
            // echo "<script> 
            //   $('#click').on('click',functions(){
            //     swal('Here's the title!\', '...and here's the text!\');
            //     });
            //      </script>";
               //  function sweetalert() 
               //  {
               // swal('Here's the title!', '...and here's the text!');
               //  }
               
            // echo "<div class='alert alert-danger' role='alert'>
            // This is a danger alert—check it out!
            // </div>";
            
            }
		}else
		{
         

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government of West Bengal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    
    <div class="login-dark">
        <div class="header">
        <h1>Workflow Based File Tracking System</h1>
        <h4>with Letter Tracking & Public Grievance Monitoring</h4>
        <h3>Government of West Bengal</h3>
    </div>
        <form action="" Method="POST">
            
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user_name" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" id="click">Log In</button></div>            <i style="font-size:24px" class="fa">&#xf015;<a href="http://wbfin.nic.in/New_Fin/HomePage.aspx" class="btn-block">Home</a></i>
        </form>

         </div>

         <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
  <!--       <script>
           // function sweetalert() {
               swal("Here's the title!", "...and here's the text!");
           // }
            </script>  -->

            <?php
            if ($result) { ?>
                <script type="text/javascript">
                    swal("Wrong Username and Password!", "");
                </script>
                
           <?php } ?>

        

        

<?php include 'include/footer.php'?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>