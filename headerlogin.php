<!DOCTYPE html>
<html>
<head>
	<title>Hakika Transport Services</title>
   
  <link href="bootstrap.css" type="text/css" rel="stylesheet" media="all">
  <link href="font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->

  <link rel="stylesheet" type="text/css" href="layout.css">
	 
</head>
<body style="background-image: url('imgs/2.png'); ">

  <nav style="height: 49px; overflow: hidden; position: fixed; width: 100%; z-index: 1000; background: #000d;">
  
    <a style="float: left; margin-left: 12.5%;" href="index.php"><img src="imgs/logo.jpg" height="45"></a> 
    <ul style="float: right; margin-right: 12.5%;">   
       
      <li style="float:left"><a class="<?php echo (isset($title) && $title == 'Hakika Transport Limited') ? 'active' : ''; ?>" href="index.php">Home</a></li>
      <li style="float:left"><a class="<?php echo (isset($title) && $title == 'Services') ? 'active' : ''; ?>" href="services.php">Services</a></li>
      <li style="float:left"><a class="<?php echo (isset($title) && $title == 'Gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
      <li style="float:left"><a class="<?php echo (isset($title) && $title == 'About') ? 'active' : ''; ?>" href="about.php">About</a></li>
      <li style="float:left"><a class="<?php echo (isset($title) && $title == 'Contact') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>

      <li style="float:right"><a  class="<?php echo (isset($title) && $title=='logout') ? 'active' : ''; ?>" href="logout.php">Logout</a></li>
      <li style="float:right"><a  class="<?php echo (isset($title) && $title=='login') ? 'active' : ''; ?>" href="login.php">Login</a></li>
      <li style="float:right"><a  class="<?php echo (isset($title) && $title=='signup') ? 'active' : ''; ?>" href="signup.php">Sign Up</a></li>
       
    </ul>
  </nav>
  <nav>
    
  </nav>

  <script>


  </script>