<?php
switch ($subsection)
{
		
	case "internal_medicine";
		$internal_medicine = "_f2";
		break;
	
	case "medical_weight";
		$medical_weight = "_f2";
		break;
		
	case "prevention";
		$prevention = "_f2";
		break;
		
	case "hematology";
		$hematology = "_f2";
		break;

	case "oncology";
		$oncology = "_f2";
		break;
		
	case "referral";
		$referral = "_f2";
		break;
		
}
?>
<body onLoad="MM_preloadImages('images/internal_medicine_f2.jpg','images/medical_weight_f2.jpg','images/prevention_measures_f2.jpg','images/hematology_f2.jpg','images/oncolgy_f2.jpg')">
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="internal_medicine.php" target="services" onMouseOver="MM_swapImage('Image8','','images/internal_medicine_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/internal_medicine<? echo $internal_medicine ?>.jpg" name="Image8" width="110" height="45" border="0" id="Image8"></a></td>
    <td><a href="medical_weight.php" target="services" onMouseOver="MM_swapImage('Image9','','images/medical_weight_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/medical_weight<? echo $medical_weight ?>.jpg" name="Image9" width="110" height="45" border="0" id="Image9"></a></td>
    <td><a href="prevention.php" target="services" onMouseOver="MM_swapImage('Image10','','images/prevention_measures_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/prevention_measures<? echo $prevention ?>.jpg" name="Image10" width="110" height="45" border="0" id="Image10"></a></td>
    <td><a href="hematology.php" target="services" onMouseOver="MM_swapImage('Image11','','images/hematology_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/hematology<? echo $hematology ?>.jpg" name="Image11" width="110" height="45" border="0" id="Image11"></a></td>
    <td><a href="oncology.php" target="services" onMouseOver="MM_swapImage('Image12','','images/oncolgy_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/oncolgy<? echo $oncology ?>.jpg" name="Image12" width="110" height="45" border="0" id="Image12"></a></td>
  </tr>
</table>
