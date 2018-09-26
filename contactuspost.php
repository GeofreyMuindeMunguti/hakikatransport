<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
$name =$_POST['name'];    
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//$category = $_POST['category'];


if ($name == "" || $email == "" || $subject == "" || $message == "" )
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'signup.php';</script>");
}


else
{

  $result = mysqli_query($db,"INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
    
    

    if ($result)
{
    echo("<script>alert('Your message was received, we will get back to you')</script>");
     echo("<script>window.location = 'index.php';</script>");

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'contact.php';</script>");
}
}




?>