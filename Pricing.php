<?php include('config/constant.php');?>
<html>
<head>
<title>Form in Table</title>
</head>
<body background="background.jpg">
<form>

<h1 align="center"> <font color="white">  Pricing Table </font> </h1>

<table border="1s" width="60%" height="600px" align="center" bgcolor="red">

	  <table class="tbl">
	      <tr> 
		     <th>S.N.</th>
			 <th>Location</th>
			 <th>Price</th>
		  </tr>
		  
		  <?php  
		  
		    $sql="SELECT * FROM pricing";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			$sn=1;
			if($count>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					
					$location=$row['location'];
					$price=$row['price'];
					?><tr>
		     <td><?php echo $sn++;?></td>
			   <td><?php echo $location;?></td>
			    <td><?php echo $price;?></td>
				
		  
		  
		  
		  </tr><?php
				}
			}
			?>
		 
	  </table>




<!---row3--->
<tr >
<th><font color="white">
<label id='l1'>latur to pune</label></th>
<th><font color="white"><label id="l2">900$</label></th>
</tr>

<!---row4--->
<tr >
<th><font color="white">
<label id='l1'>pune to latur</label></th>
<th><font color="white"><label id="l2">900$</label></th>
</tr>

</table>
</form>

</body>
</html>

<?php
if(isset($_GET['food_id']))
{
	$food_id=$_GET['food_id'];
	$sql="SELECT * FROM pop WHERE id=$food_id";
	$res=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
	if($count==1)
	{
		$row=mysqli_fetch_assoc($res);
		$title=$row['title'];
		$price=$row['price'];
		$image_name=$row['image_name'];
		
	}
	else
	{
		header('location'.SITEURAL);
	}
}
?>
</html>
