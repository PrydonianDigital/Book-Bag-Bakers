<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Email Signature Generator</title>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
</head>
<body>
<div class="wrap">
	
	<h2>Email Signature Generator</h2>
	<table class="form-table">
		<tr>
			<th scope="row" height="30">Your name:</th>
			<td scope="row" rowspan="4">Result:
				<table border="0" width="660" cellspacing="0" cellpadding="0" style="font-family:Helvetica, Arial, sans-serif; font-size: 14px; color: #111; background-color: #fff;" bgcolor="white">
					<tr>
						<td style="font-family:Helvetica, Arial, sans-serif; font-size: 16px; color: #111; padding: 5px 0; margin: 0;" valign="middle">&nbsp;</td>
					</tr>
					<tr>
						<td id="yourname" style="font-family:Helvetica, Arial, sans-serif; font-size: 16px; color: #111; padding: 5px 0; margin: 0;" valign="middle">Your Name</td>
					</tr>
					<tr>
						<td id="youremail" style="font-family:Helvetica, Arial, sans-serif; font-size: 14px; color: #111; padding: 5px 0; margin: 0; font-weight: normal;" valign="middle"><a href="mailto:" style="color: #111;">Your Email</a></td>
					</tr>
					<tr>
						<td id="logo" style="font-family:Helvetica, Arial, sans-serif; font-size: 14px; color: #111; padding: 5px 0; margin: 0;" valign="middle"><a href="<?php echo bloginfo('url'); ?>"><img width="300" height="57" title="" alt="Book Bag Bakers" src="<?php echo bloginfo('url'); ?>/wp-content/themes/bookbagbakers/img/sig.png" /></a></td>
					</tr>
					<tr>
						<td id="url" style="font-family:Helvetica, Arial, sans-serif; font-size: 14px; color: #111; padding: 5px 0; margin: 0; font-weight: normal;" valign="middle"><a href="<?php echo bloginfo('url'); ?>" style="color: #111;"><?php echo bloginfo('url'); ?></a></td>
					</tr>
					<tr>
						<td id="tagline" style="font-family:Helvetica, Arial, sans-serif; font-size: 14px; color: #111; padding: 5px 0; margin: 0; font-style: italic;" valign="middle">Hand made organic bread delivered to your door</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="30"><input type="text" id="name" class="regular-text" placeholder="Your name" /></td>
		</tr>
		<tr>
			<th scope="row" height="30">Your email:</th>
		</tr>
		<tr>
			<td height="30"><input type="email" id="email" class="regular-text" placeholder="Your email" /></td>
		</tr>
	</table>
</div>
<script>
$(function() {
	$('#name').keyup(function(e){
		if ( e.which == 13 ) {
			e.preventDefault();
		}
		var name = $(this).val();
		$('#yourname').html( name )
	});
	$('#email').keyup(function(e){
		if ( e.which == 13 ) {
			e.preventDefault();
		}
		var email = $(this).val();
		$('#youremail').html( '<a href="mailto:' + email + '" style="color: #111;">' + email + '</a>' );
	});
});
</script>
</body>
</html>
