<?php 

include_once 'inc/header.php'; 

// Templates
include_once 'template/Template.php'; 
for ($i=1; $i<=QTD_TEMPLATES; $i++) { 
	include_once 'template/Template_'.$i.'.php'; 
}


	if( !empty($_GET["template"]) ) { 
	
		$template = $_GET["template"];

	} else {
		$template = 0;	
	}

	switch ($template) {
		case 1:
			$template = new Template_1();
			break;

		case 2:
			$template = new Template_2();
			break;

		case 3:
			$template = new Template_3();
			break;
		
		default:
			$template = new Template();
			break;
	}

	// Print form
	echo $template->getForm();


include_once 'inc/footer.php'; ?>