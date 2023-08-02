<?php  include('partial/menu.php'); 


 ?>
<div class="menu text-center">
	   <div class="wrapper">
	      <h1> Admin Details</h1>
      </div>


	  <table class="tbl">
	      <tr> 
		     <th>S.N.</th>
			 <th>Username</th>
			 <th></th>
		  </tr>
		  
		  <?php  
		  
		    $sql="SELECT * FROM admin_table";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			$sn=1;
			
			if(isset($_SESSION['NAME']))
			{
			echo "welcome ".$_SESSION['NAME']."<br>";
			}	
			if($count>0)
			{    
				while($row=mysqli_fetch_assoc($res))
				{
					
					$username=$row['username'];
					
					?><tr>
		     <td><?php echo $sn++;?></td>
			   <td><?php echo $username;?></td>
			   
				
		  
		  
		  
		  </tr><?php
				}
			}
			?>
		 
	  </table>

<?php  include('partial/Footer.php');  ?>