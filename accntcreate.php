<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'hakika') or die('Error selecting database : ' . mysqli_error());
$name =$_POST['name'];    
$email = $_POST['email'];
$password = $_POST['password'];
$Repassword = $_POST['Repassword'];
//$category = $_POST['category'];


if ($name == "" || $email == "" || $password == "" || $Repassword == "" )
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'signup.php';</script>");
}


elseif($password != $Repassword)
{
    echo("<script>alert('Your passwords do not match.')</script>");  
    echo("<script>window.location = 'signup.php';</script>");
}
else
{

  $result = mysqli_query($db,"INSERT INTO users(username,email,password) VALUES('$name','$email','$password')");
    
    

    if ($result)
{
    echo("<script>alert('Account successfully created')</script>");
     echo("<script>window.location = 'login.php';</script>");

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'signup.php';</script>");
}
}




?>