<?php
$id=$_GET['id'];
 $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
  mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());

$sql = "DELETE FROM bookings  WHERE `booking id` = '$id'";
$result = mysqli_query($db,$sql);

 if ($result)
{
    echo("<script>alert('Booking successfully canceled')</script>");
    echo ("<script>window.location='services.php#booking';</script>");
    
}
else
{
    echo("<script>alert('Error')</script>");
   echo("<script>window.location = 'services.php#outbookings';</script>");

}




?>
