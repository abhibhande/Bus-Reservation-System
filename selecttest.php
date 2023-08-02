<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> Login Page </title> 

	
</head>
<body>
<form  method="POST">
<select name='name'  size=2>
<option value="pavan" >pavan</option>
<option value="abhi" selected>abhi</option>
<option value="ligade">ligade</option>
</select>
<input type="submit" name="submit">
<form>
<?php
	if (isset($_POST['submit'])) 
	{
//	if(!empty($_post['name'])){
echo "hiii";

$s=$_POST['name'];
echo "you have selected".$s;
}

?>
</body>
</html>