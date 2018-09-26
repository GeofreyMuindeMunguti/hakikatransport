<?php

    $title = "signup";
    include_once 'header.php';

?>
<div class="container">
  <div class="container" align="center">
<div class=" contact-form">
				<h4 class="white-w3ls">Sign Up Form</h4>
				<form action="accntcreate.php" method="post">
					<div class="styled-input agile-styled-input-top">
						<input type="text" name="name" required="">
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" name="email" required=""> 
						<label>Email</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="password" name="password" required=""> 
						<label>Password</label>
						<span></span>
					</div> 
					<div class="styled-input">
						<input type="password" name="Repassword" required=""> 
						<label>Confirm Password</label>
						<span></span>
					</div> 
					 
					 
					<input type="submit" value="SIGN UP">
				</form>
			</div>
		</div>
	</div>
	 <div class="hometext" align="center" style="height: 100%;">
            <h2></h2>
            <div id="container">

    

    </div>
    </div>
            <div class="container-fluid">
  ...
</div>
<?php

include_once 'footer.php';

?>


 