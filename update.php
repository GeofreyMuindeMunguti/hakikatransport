<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
  

$bookingid=$_POST['bookingid'];
$email =$_POST['email'];
$service=$_POST['service_name'];
$pickup=$_POST['pickup'];
$destination=$_POST['destination'];
$pickupdate =$_POST['pickupdate'];
$expecteddate =$_POST['expecteddate'];
$message =$_POST['message'];


  $result = mysqli_query($db,"UPDATE `bookings` SET `email`='$email',`service`='$service',`pickup`='$pickup',`destination`='$destination',`pickupate`='$pickupdate',`expecteddate`='$expecteddate',`message`='$message' WHERE `booking id` = '$bookingid' ");


  if ($result)
{
    echo("<script>alert('Booking successfully updated')</script>");
    echo ("<script>window.location='services.php#booking';</script>");
    
}
else
{
    echo("<script>alert('Error in data entry')</script>");
   
}


?>