<?php
	include "database.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>E - Library</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	      <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
  	   .input-icon i{
  	   	position: absolute;
  	   }
  	   .input-icon{
  	   	width: 100%;
  	   	padding-bottom: 10px;

  	   }
  	   .icon{
  	   	 padding: 10px;
  	   	 min-width: 5px;
  	   	 text-align: center;
  	   	
  	   }
       .input-field{
       	width: 100%;
       	padding: 10px;
       	text-align: center;
       }
  </style>

</head>
<body>
<div id="container" >
<div id="header"><h1><a href="index.php">E-library</a></h1></div>
  <div id="wrapper">
    <div id="content">
    	<div class="col-md-12 bg-light mt-8 offset-1" style="height: 400px;border-radius: 10px;">
      <h4 id="heading" class="text-secondary pt-2" style=" margin-top: 60px; "><i><i class="bi bi-person" style="margin-right: 8px;">Register Here</i></i></h4><hr/>
	    <?php
	if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$pass=$_POST["pass"];
			$mail=$_POST["mail"];
			$dep=$_POST["dep"];
		
		 $sql="INSERT INTO student(NAME,PASS,MAIL,DEP)
		 VALUES ('{$name}','{$pass}','{$mail}','{$dep}')";
					
			 if($db->query($sql))
			{
				echo "<p class='success'>User Registration Success.</p>";
			}
			else
			{
				echo "<p class='success'>Registration Failed.</p>";
			}

		}
?>
	<div id="center">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      	<div class="form">
		<div class="row">
			   <div class=" form-group col-md-12 input-icon">
			   	<i class="bi bi-person-check-fill icon"></i>
		<input class="input-field" type="text" name="name" placeholder="Name" required>
	  </div>
	   <div class=" form-group col-md-12 input-icon">
					<i class="fa fa-key icon"></i>
		<input class="input-field" type="password" name="pass" placeholder="Password" required>
	</div>
				   <div class=" form-group col-md-12 input-icon">
				   						<i class="fa fa-envelope icon"></i>
			<input class="input-field" type="email" name="mail" placeholder="E-mail" required>
		</div>
	</div>
</div>
			<label>Department</label>
		<select name="dep" required>
			<option value="">Select</option>
			<option value="BCA">Computer Science</option>
			<option value="B.SC CS">Masscom</option>
			<option value="B.SC MATHS">Math and Stat</option>
		</select>
		<button type="submit" name="submit">Save Details</button>
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
