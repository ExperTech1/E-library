<?php
	session_start();
	include "database.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E - Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet"  href="css/bootstrap.css">
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
<div id="container">
<div id="header"><h1><a href="index.php">E-library</a></h1></div>
  <div id="wrapper">
    <div id="content">
     <div class="col-md-12 bg-light bg-light" style="height: 300px; width: 400px; margin-left: 30px; margin-top: 60px; border-radius: 10px;">
       <h4 id="heading" class="text-dark pt-2 text-center"style=" margin-top: 60px; "><i><i class="bi bi-person" style="margin-right: 8px;">Admin Login Here. </i></i></h4><hr class="bg-light" />
      
	    <?php
	if(isset($_POST["submit"]))
		{
			$sql="SELECT * FROM admin WHERE ANAME='{$_POST["aname"]}' AND APASS='{$_POST["apass"]}'";
			$res=$db->query($sql);
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc(); 
				$_SESSION["AID"]=$row["AID"];
				$_SESSION["ANAME"]=$row["ANAME"];
				echo "<script>window.open('admin_home.php','_self')</script>";
			}
			else
			{
				echo"<p class='error'>Invalid User name or Password</p>";
			}
		}
?>
        <div id=""  class=" col-md-12">		  
	         <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

				<div class=" col-md-12 form-group" style="height: 50px;margin-top: 30px;margin-bottom: 10px;">
				<input type="text" name="name" placeholder="Name" class="form-control" required>
			</div>

				<div class=" col-md-12 form-group"style="height: 50px;margin-bottom: 10px;" >
				<input type="password" name="pass" placeholder="Password" class="form-control" required>
					</div>
			<button type="submit" name="submit" style="margin-left: 20px;">Login Now</button>
		  </form>
		</div>
	</div>
    </div>
  </div>
  <div id="navigation">
   <?php include "side_nav.php"; ?>
  </div>

  <div id="footer">
    <p>Copy Rights &copy; SaintLaw</p>
  </div>
</div>
</body>
</html>
