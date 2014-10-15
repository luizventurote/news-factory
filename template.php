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

	$template_id = $template;

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

	echo '<div class="panel panel-default">
			<div class="panel-heading">
				<a href="index.php" class="btn btn-default panel-heading-right">&larr; Voltar</a>
				<h3>Template '.$template_id.'</h3>
			</div>
				<div class="panel-body">';

	// Print form
	echo $template->getForm();

	echo '</div></div>';

include_once 'inc/footer.php'; ?>