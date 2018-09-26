<?php	
session_start();
$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
    
$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
$result= mysqli_query($db,$query);
$row = mysqli_fetch_assoc($result);

if($email == "" || $password == "" )
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'login.php';</script>");
}
else
{    
if($row>0)
{


$_SESSION['email']= $email;

 
    echo $_SESSION['email'];
    echo("<script>window.location = 'index.php';</script>");  
}
else
{
header("Location: login.php");

}

}
?>
