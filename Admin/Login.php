
<?php
include('../config/constant.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 <div class="container">
 	<div class="header">
 		<h1>login</h1>
 	</div>
	
	
 	<div class="main">
 		<form action="" method="POST" autocompletetextoff >
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Username" name="username">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="password" name="password">
 			</span><br>
 				<input type="submit" name="submit" value="Login">

 		</form>
		
 	</div>
 </div>
</body>
</html>
<?php 
     if(isset($_POST['submit']))
	 { 
		 $username=$_POST['username'];

		 $password=$_POST['password'];
		 $sql="SELECT * FROM  admin_table WHERE username='$username' AND password='$password'";
		 
		 $res= mysqli_query($conn,$sql);
		
		 $count= mysqli_num_rows($res);
		 
		 if($count==1)
		 {
			 echo "login successful";
		 $_SESSION['NAME']=$username;
		 
				         header('location:http://localhost:8081/abhi/Admin/index.php');
			 
		 }
		 else
		 {
			 echo "login unsuccessful";
			 
				         
			
		
		 }
	 }
	?>