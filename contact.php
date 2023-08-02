<?php include('config/constant.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <?php
$nameerr =$phoneerr= "";
$f1=$f2=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{$f1=$f2=0;
if (empty($_POST["name"])) 
{ $f1=1;
 $nameerr = "Name is required"; 
 } 
else 
{ 
 $name = $_POST["name"]; 
$pattern="/^[a-zA-Z]*$/";
 // check if name only contains letters and whitespace 
 if (!preg_match($pattern,$name)) 
{ $f1=1;
 $nameerr = "Only alphabets and white space are allowed"; 
 } 
 } 
 
 if (empty($_POST["phone"])) 
{ $f2=1;
 $phoneerr = "phone number is required"; 
 } 
else 
{ 
 $phone = $_POST["phone"]; 
$pattern="/^\d{10}$/";
 // check if name only contains letters and whitespace 
 if (!preg_match($pattern,$phone)) 
{ $f2=1;
 $phoneerr = "10 digits are required"; 
 } 
 } 
 
}



?>
  
  <marquee behaviour="scroll"bgcolor="yellow"><a href="index.php"> PURANMAL LAHOTI  TRAVEL</a></marquee>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>20,Abhishek complex,Ausa Road,Latur 413512</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>abhibh12345@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>9301236548</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" required/>
              <label for="">Username</label>
              <span>Username</span>
            </div>
			<span class="error">* <?php echo $nameerr; ?> </span><br>
            <div class="input-container">
              <input type="email" name="email" class="input" required/>
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="phone" name="phone" class="input" required/>
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
			<span class="error">* <?php echo $phoneerr; ?> </span><br>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" name="submit"class="btn" />
          </form>
        </div>
      </div>
    </div>
f1==0&&f2==0
<?php 

 
if(isset($_POST['submit']))
{
	if(($f1==0) && ($f2==0))
{
	echo "<br> $f1  $f2";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	 
	
	
	$sql="insert into contact_table set Username='$name', Email='$email', Phone='$phone',Message='$message'";
	   $res=mysqli_query($conn,$sql);
}
}	

?>


    <script src=" contact app.js"></script>
  </body>
</html>