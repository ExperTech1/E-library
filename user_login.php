<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E - Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<div id="container" class="">
<div id="header"><h1><a href="index.php">E-library</a></h1></div>
  <div id="wrapper">
    <div id="content">
    	<div class="col-md-12 bg-light bg-light" style="height: 300px; width: 400px; margin-left: 30px; margin-top: 60px; border-radius: 10px;">

      <h4 id="heading" class="text-info text-center pt-2" ><i>Student Login Here. </i></h4>

      <hr/>
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM student WHERE NAME='{$_POST["name"]}' AND PASS='{$_POST["pass"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc(); 
				$_SESSION["ID"]=$row["ID"];
				$_SESSION["NAME"]=$row["NAME"];
				echo "<script>window.open('student_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
		}
?>
		<div id=""  class="col-md-12">
			  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
			
				<div class=" col-md-12 form-group" style="height: 50px;margin-top: 30px;margin-bottom: 10px;margin-left: 20px;">
				<input type="text" name="name" placeholder="Name" class="form-control" required>
			</div>
						<div class=" col-md-12 form-group"style="height: 50px;margin-bottom: 10px;margin-left: 20px;" >
				<input type="password" name="pass" placeholder="Password" class="form-control" required>
					</div>
					<div class="form-group col-md-12 " style="height: 10px; width: 120px; margin-bottom: 10px; margin-left: 20px;">
                <button type="submit" class="btn btn-success form-control" style="border-radius: 10%;offset-3">login Now</button>
              </div>
			  </form>
		</div>
    </div>
  </div>
  </div>
  <div id="navigation">
   <?php include "side_nav.php"; ?>
  </div>

  <div id="footer">
    <p>Copy Rights &copy; Tutor Joes</p>
  </div>
</div>
</body>
</html>
