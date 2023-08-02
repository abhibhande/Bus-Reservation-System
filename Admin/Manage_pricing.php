<?php  include('partial/menu.php');  ?>
<div class="menu text-center">
	   <div class="wrapper">
	      <h1> Manage Pricing</h1>
      </div>


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

<?php  include('partial/Footer.php');  ?>