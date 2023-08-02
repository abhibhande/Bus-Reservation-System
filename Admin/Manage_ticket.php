<?php  include('partial/menu.php');  ?>
<div class="menu text-center">
	   <div class="wrapper">
	      <h1> Manage Ticket</h1>
      </div>


	  <table class="tbl">
	      <tr> 
		     <th>S.N.</th>
			 <th>Pick up point</th>
			 <th>Drop point</th>
			 <th>First name</th>
			 <th>Last name</th>
			 <th>Gender</th>
			 <th>Email</th>
			 <th>Mobile no</th>
			 
			 <th>Message</th>
		  </tr>
		  
		  <?php  
		  
		    $sql="SELECT * FROM booked";
			$res=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($res);
			$sn=1;
			if($count>0)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					
					$pickup=$row['pickuppoint'];
					$drop=$row['droppoint'];
					$fname=$row['fname'];
					$lname=$row['lname'];
					$email=$row['email'];
					$phone=$row['phone'];
					$gender=$row['gender'];	
					$message=$row['message'];
					?><tr>
		     <td><?php echo $sn++;?></td>
			   <td><?php echo $pickup;?></td>
			    <td><?php echo $drop;?></td>
				<td><?php echo $fname;?></td>
				<td><?php echo $lname;?></td>
		  <td><?php echo $gender;?></td>
		  <td><?php echo $email;?></td>
		  <td><?php echo $phone;?></td>
		  
		  <td><?php echo $message;?></td>
		  
		  
		  
		  </tr><?php
				}
			}
			?>
		 
	  </table>

<?php  include('partial/Footer.php');  ?>