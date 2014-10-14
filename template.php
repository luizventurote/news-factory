<?php include_once 'inc/header.php'; ?>
<?php include_once 'template/Template.php'; ?>
<?php include_once 'template/Template_1.php'; ?>
<?php include_once 'template/Template_2.php'; ?>

<?php

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
		
		default:
			$template = new Template();
			break;
	}

	// Print form
	echo $template->getForm();

?>

<?php include_once 'inc/footer.php'; ?>