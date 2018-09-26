<?php

    $title = "Contact";
    include_once 'header.php';

?>
 
<div class="container">


<!-- contact -->	
<div class="w3ls_address_mail_footer_grids">
	<div class="container">
	<!-- <h2 class="heading-agileinfo">Contact Us</h2> -->
        <div class="map">
            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-1.2920659,36.82194619999996&amp;q=Nairobi+(Hakika)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
		<div class="col-md-6 contact-form">
				<h4 class="white-w3ls">Contact Form</h4>
				<form action="contactuspost.php" method="post">
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
						<input type="text" name="subject" required="">
						<label>Subject</label>
						<span></span>
					</div>
					<div class="styled-input">
						<textarea name="message" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" value="SEND">
				</form>
			</div>
			<div class="col-md-6 contactright">
				<h3>Contact Address</h3>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>Watamu <span>Mombasa</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(254) 720 9234 03 <span>+(254) 712 4565 35</span></p>
				</div>
				<div class="w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@hts.com">info@hts.com</a> 
						<span><a href="mailto:info@hts.com">info2@hts.com</a></span></p>
				</div>
            </div>
           
			<div class="clearfix"> </div>
	</div>
</div>
<!-- //contact -->	


</div>
  


<?php

include_once 'footer.php';

?>