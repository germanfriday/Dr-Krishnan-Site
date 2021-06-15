<?php
switch ($section)
{
		
	case "home";
		$home = "_f2";
		$image = "home";
		break;
	
	case "services";
		$services = "_f2";
		$image = "services";
		break;
		
	case "credentials";
		$credentials = "_f2";
		$image = "credentials";
		break;
		
	case "faq";
		$faq = "_f2";
		$image = "faq";
		break;

	case "contact";
		$contact = "_f2";
		$image = "contact";
		break;
		
	case "referring";
		$referring = "_f2";
		$image = "referring";
		break;
	
	case "testimonials";
		$testimonials = "_f2";
		$image = "testimonials";
		break;
		
}
?>
<script language="JavaScript" type="text/JavaScript" src="includes/krish_scripts.js"></script>
<body onLoad="MM_preloadImages('images/services_f2.jpg','images/credentials_f2.jpg','images/faq_f2.jpg','images/contact_f2.jpg')">
<table width="778" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="index.php"><img src="images/logo.jpg" name="Image1" width="183" height="81" border="0" id="Image1" /></a></td>
    <td><a href="services.php" onmouseover="MM_swapImage('Image2','','images/services_f2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/services<? echo $services ?>.jpg" name="Image2" width="145" height="81" border="0" id="Image2" /></a></td>
    <td><a href="credentials.php" onmouseover="MM_swapImage('Image3','','images/credentials_f2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/credentials<? echo $credentials ?>.jpg" name="Image3" width="146" height="81" border="0" id="Image3" /></a></td>
    <td><a href="faq.php" onmouseover="MM_swapImage('Image4','','images/faq_f2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/faq<? echo $faq ?>.jpg" name="Image4" width="146" height="81" border="0" id="Image4" /></a></td>
    <td><a href="contact.php" onmouseover="MM_swapImage('Image5','','images/contact_f2.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="images/contact<? echo $contact ?>.jpg" name="Image5" width="158" height="81" border="0" id="Image5" /></a></td>
  </tr>
</table>
