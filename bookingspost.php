<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
  


$email =$_POST['email'];
$service=$_POST['service_name'];
$pickup=$_POST['pickup'];
$destination=$_POST['destination'];
$pickupdate =$_POST['pickupdate'];
$expecteddate =$_POST['expecteddate'];
$message =$_POST['message'];

  $result = mysqli_query($db,"INSERT INTO `bookings`(`email`, `service`, `pickup`, `destination`, `pickupate`, `expecteddate`, `message`) VALUES( '$email','$service','$pickup','$destination','$pickupdate','$expecteddate','$message')");
  
 



  if ($result)
{
    echo("<script>alert('Booking successfully created')</script>");
    echo ("<script>window.location='services.php#booking';</script>");
    
}
else
{
    echo("<script>alert('Error in data entry')</script>");
   echo("<script>window.location = 'services.php#outbookings';</script>");

}


?>