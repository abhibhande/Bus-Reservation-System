<?php  include('partial/menu.php');  ?>
<div class="menu text-center">
	   <div class="wrapper">
	      <h1> Manage Contact</h1>
      </div>


	  <table class="tbl">
	      <tr> 
		     <th>S.N.</th>
			 <th>Username</th>
			 <th>Email</th>
			 <th>Phone</th>
			 <th>Message</th>
		  </tr>
		  
		  <?php  
		  
		    $sql="SELECT * FROM contact_table";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			$sn=1;
			if($count>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					
					$username=$row['Username'];
					$email=$row['Email'];
					$phone=$row['Phone'];
					$message=$row['Message'];
					?><tr>
		     <td><?php echo $sn++;?></td>
			   <td><?php echo $username;?></td>
			    <td><?php echo $email;?></td>
				<td><?php echo $phone;?></td>
				<td><?php echo $message;?></td>
		  
		  
		  
		  </tr><?php
				}
			}
			?>
		 
	  </table>

<?php  include('partial/Footer.php');  ?>