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
			<h3 class="heading-agileinfo white-w3ls">Our Services<span class="black-w3ls">Ours are top of the range services</span></h3>
			<div class="offers-grids">
				<div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>About the services in general</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>Service 1 with loots of deets</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>Service 2 with loots of deets</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>Service 3 with loots of deets</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<h5>Other deets</h5>
					<p>Other deets continued</p>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Service 1 Link</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>  Service 2 Link </a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>  Service 3 Link</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Service 4 Link</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>  Service 5 Link</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>  Service 6 Link</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>  Service 7 Link</a></li>
					</ul>
				</div>
			</div>
		</div>
          <div style="background: transparent;" id="booking">
			<h3 class="heading-agileinfo">Fill in the booking Form<span>Booking form</span></h3> 
		  </div>
              <div class="container" align="center">
			    <div class="contact-form">
				<h4 class="white-w3ls">Booking Form</h4>
				<form action="bookingspost.php" method="post">
					<div class="styled-input agile-styled-input-top">
						<p class ="white-w3ls">Hello <?php echo $_SESSION['email'] ?> Fill in to Book</p>
						 
					<div class="styled-input">
						 <select id="service_name" name="service_name">
							<?php 
                                   $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
                                  mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
                   
                               $sql = "SELECT service_name FROM services";
                                 $result = mysqli_query($db,$sql);

                                            
                                                      while ($row = mysqli_fetch_array($result)) {
                                                   echo "<option value='" . $row['service_name'] ."'>" . $row['service_name'] ."</option>";
                                                 }
                                     

                                         ?>
                                     </select>
                          </select>
					</div>
					<div class="styled-input">
						<input type="hidden" name="email" value="<?php echo $_SESSION['email']?>">
					</div> 
					<div class="styled-input">
						<input type="text" name="pickup" required=""> 
						<label>Pick up address</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="text" name="destination" required=""> 
						<label>Destination</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="Date" name="pickupdate" required=""> 
						<label>Date to pick</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="Date" name="expecteddate" required=""> 
						<label>Pick up place</label>
						<span></span>
					</div> 

					<div class="styled-input">
						<textarea name="message" required=""></textarea>
						<label>More info</label>
						<span></span>
					 
					</div>	 
					<input type="submit" value="BOOK">
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