<?php

    $title = "Services";
    include_once 'header.php';

?>
<?php  
session_start();  

  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<div class="container">

<!-- offers -->
<div class="offers">
		 <div class="container"  style="background: black;">

		</div>

          <div style="background: transparent;" id="booking">
			<h3 class="heading-agileinfo">Edit your booking <span>Booking form</span></h3> 
		  </div>
              <div class="container" align="center">
			    <div class="contact-form">
				<h4 class="white-w3ls">Booking Form</h4>
				<form action="update.php" method="post">
					<div class="styled-input agile-styled-input-top">
						<p class ="white-w3ls">Hello <?php echo $_SESSION['email'] ?> Fill in to Book</p>
						 
					<div class="styled-input">
						<select id="bookingid" name="bookingid">
							<?php 

							$id =$_GET['id'];

                                  $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
                                  mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
                   
                                 $sql = "SELECT `booking id` FROM `bookings` WHERE `booking id` = '$id'";

                                 $result = mysqli_query($db,$sql);

                                            
                                                      while ($row = mysqli_fetch_array($result)) {
                                                   echo "<option value='" . $row['booking id'] ."'>" . $row['booking id'] ."</option>";

                                                       }
                                      
                                            
                                  
                                         ?>
                                     </select>

                                     
                                    
					</div> 
				   	<div class="styled-input">
						 <select id="service_name" name="service_name">
							<?php 
                                   $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
                                  mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
                   
                               $sql = "SELECT service_name FROM services ";
                                 $result = mysqli_query($db,$sql);

                                            
                                                   while ($row = mysqli_fetch_array($result)) {
                                                   echo "<option value='" . $row['service_name'] ."'>" . $row['service_name'] ."</option>";
                                                 }
                                     

                                         ?>
                                     </select>
                          </select>
                    <?php
                     
                    $id =$_GET['id'];

                      $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
                                  mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
                     $sql = "SELECT `booking id`, `email`, `service`, `pickup`, `destination`, `pickupate`, `expecteddate`, `message` FROM bookings  WHERE `booking id` = '$id'";
                     $result = mysqli_query($db,$sql);
                    while ($row = mysqli_fetch_array($result))
                     {

                             $service     = $row['service'];
                             $pickup = $row['pickup'];
                             $destination = $row['destination'];
                             $pickupdate = $row['pickupate'];
                             $expecteddate = $row['expecteddate'];
                             $message = $row['message'];
                            }
                      ?>


                   
					</div>
					<div class="styled-input">
						<input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
					</div> 
					<div class="styled-input">
						<input type="text" name="pickup" value = "<?php echo $pickup; ?> "required=""> 
						<label>Pick up address</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="destination" value="<?php echo $destination; ?>"  required=""> 
						<label>Destination</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="Date" name="pickupdate" value="<?php echo $pickupdate; ?> " required=""> 
						<label>Date to pick</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="Date" name="expecteddate" value="<?php echo $expecteddate; ?> " required=""> 
						<label>Pick up place</label>
						<span></span>
					</div> 

					<div class="styled-input">
						<textarea name="message" required=""> <?php echo $message; ?></textarea>
						<label>More info</label>
						<span></span>
					 
					</div>	 
					<input type="submit" value="EDIT">
				</form>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		         

		    <div id="outbookings">
				 <div class="container" align="center">
			     <div class="contact-form">
			     	<div class="styled-input">
				<h4 class="white-w3ls"> Your Bookings</h4>
	             <table class="tbout">
              <tr>
                  <th class="white-w3ls" width="20%"> Booking id</th>
                  <th class="white-w3ls" width="20%">Email</th>
                  <th class="white-w3ls" width="20%">Service</th>
                  <th class="white-w3ls" width="20%">Pick up date</th>
                   <th class="white-w3ls" width="20%">Expected date</th>

              </tr>

               <tbody>
      
        <?php
           $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
              mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
        
        
          $sql3 = "SELECT * FROM bookings WHERE  `email` = '".$_SESSION['email']."'";
            $res = mysqli_query($db,$sql3);
            
        while($row3 = mysqli_fetch_assoc($res))
        {

            echo '<tr>';
            echo '<td class="white-w3ls">'.$row3['booking id'].'</td>';
            echo '<td class="white-w3ls">'.$row3['email'].'</td>';
            echo '<td class="white-w3ls">'.$row3['service'].'</td>';
             echo '<td class="white-w3ls">'.$row3['pickupate'].'</td>';
             echo '<td class="white-w3ls">' . $row3['expecteddate'] . "</td>";

            echo '<td><a href="edit.php?id='.$row3['booking id'].'">EDIT </a></td>';
            echo '<td><a href="cancel.php?id='.$row3['booking id'].'">CANCEL</a></td>';
            echo '</tr>';
        }
        ?>
     </tbody>
 </table>
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
	<!-- offers -->


</div>

<?php

include_once 'footer.php';

?>