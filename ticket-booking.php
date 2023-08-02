<?php include('config/constant.php');?>

<html>
   <head>
      <title> Ticket Booking </title>
	  <link rel="stylesheet" href="booking style.css" />
	   
   </head>
   
   <?php
   $fnameerr=$lnameerr =$phoneerr= "";
   $f1=$f2=$f3=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{$f1=$f2=$f3=0;
if (empty($_POST["fname"])) 
{ $f1=1;
 $fnameerr = "First Name is required"; 
 } 
else 
{ 
 $fname = $_POST["fname"]; 
$pattern="/^[a-z _A-Z]*$/";
 // check if name only contains letters and whitespace 
 if (!preg_match($pattern,$fname)) 
{ $f1=1;
 $fnameerr = "Only alphabets and white space are allowed"; 
 } 
 }

 if (empty($_POST["lname"])) 
{ $f2=1;
 $lnameerr = "Last Name is required"; 
 } 
else 
{ 
 $lname = $_POST["lname"]; 
$pattern="/^[a-z _A-Z]*$/";
 // check if name only contains letters and whitespace 
 if (!preg_match($pattern,$lname)) 
{ $f2=1;
 $lnameerr = "Only alphabets and white space are allowed"; 
 } 
 } 
 
 if (empty($_POST["phone"])) 
{ $f3=1;
 $phoneerr = "phone number is required"; 
 } 
else 
{ 
 $phone = $_POST["phone"]; 
$pattern="/^\d{10}$/";
 // check if name only contains letters and whitespace 
 if (!preg_match($pattern,$phone)) 
{ $f3=1;
 $phoneerr = "10 digits are required"; 
 } 
 } 
 
}
?>
   <body>
   <div class="container"> 
   <div class="form">
       
	  <div class="pickup-or-drop-info">
	    <form name="booking" method="POST">
		<div  class="p1"><p > Ticket related information</p></div>
		<div  class="p2"><p > Select Pick up point</p></div>
	   
	    <select name="op1" size="5" >
		<option Value="Chatrapati Shivaji Maharaj chowk" selected>Chatrapati Shivaji Maharaj chowk
		<option Value="Ashamegh hotel" >Ashamegh hotel
		<option Value="Gandhi chowk">Gandhi chowk
		<option Value="1 no">1 no
		<option Value="5 no">5 no
		<option Value="12 no">12 no
		</select>
		<br>
		<div class="p3"><input type="radio" name="pick up point" checked="true" value=1 onclick="pick_up_point(this.value)">Latur
		<input type="radio" name="pick up point" value=2 onclick="pick_up_point(this.value)">Pune<br></div>
		<br>
		<div class="p4"><p>Select Drop point</p></div>
	    <select name="op3" size="5">
		<option Value="Chatrapati Shivaji Maharaj chowk" >Chatrapati Shivaji Maharaj chowk
		<option Value="Ashamegh hotel" selected>Ashamegh hotel
		<option Value="Gandhi chowk">Gandhi chowk
		<option Value="1 no">1 no
		<option Value="5 no">5 no
		<option Value="12 no">12 no
		</select>
		<br>
		<div class="p5"><input  id="first_name"type="radio" name="drop point" checked="true" value=1 onclick="drop_point(this.value)">Latur
		<input type="radio" name="drop point" value=2 onclick="drop_point(this.value)">Pune<br></div>
		<br>
		
	  <input type="submit" value="Send" name="submit" />
		<input type="reset" value="clear"  />
	  
		
	  </div>
	  <div class="contact-form">
	   <span class="circle one"></span>
	   <span class="circle two"></span>
	   
	   <h3 class="title"> Personal Information</h3>
	   <div class="input-container ">
	   <input type="text"   name="fname" class="input" required/>
	   <label for="" >First Name</label>
	   <span> First Name</span>
	   </div>
	   <span class="error">* <?php echo $fnameerr; ?>
	   <div class="input-container ">
	   <input type="text" name="lname" class="input" required/>
	   <label for="" >Last Name</label>
	   <span> Last Name</span>
	   </div>
	   <span class="error">* <?php echo $lnameerr; ?>
	   <div class="input-container">
	   <input type="email" name="email" class="input" required/>
	   <label for="" >Email</label>
	   <span> Email</span>
	   </div>
	   <div class="input-container">
	   <input type="tel" name="phone" class="input" required/>
	   <label for="">Phone</label>
	   <span> Phone</span>
	   </div>
	   <span class="error">* <?php echo $phoneerr; ?>
	  <div class="p7"> Gender  <input type="radio" name="gender" value="male" checked> Male 
	   <input type="radio" name="gender" value="female"> Female <br><br>
	   <div class="input-container textarea"></div>
	   <textarea name="message" class="input"/></textarea>
	   <label for="" >Message</label>
	   <span> Message</span>
	   </div>
	  
	   
	   </form>
	  </div>
	  <?php
echo "hello outside";	  
if(isset($_POST['submit']))
{	echo "$f1=$f2=$f3"; 
	if($f1==0 && $f2==0 && $f3==0)
	{
	$pickup=$_POST['op1'];
	$drop=$_POST['op3'];
	$gender=$_POST['gender'];;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	echo "$gender";
	 
	
	
	$sql="insert into booked set pickuppoint='$pickup',droppoint='$drop',gender='$gender',fname='$fname', lname='$lname', email='$email', phone='$phone',message='$message'";
	   $res=mysqli_query($conn,$sql);
}
}	

?>
	  <script src="booking.js"></script>
   </body>
</html>