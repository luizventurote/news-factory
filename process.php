<?php include_once 'inc/header.php'; ?>

	<?php 

		// Seleciona o template
		switch ($_POST['template']) {
			case 1:
				include_once 'template/Template_1.php';
				$template = new Template_1();
				break;
			
			default:
				include_once 'template/Template.php';
				$template = new Template();
				break;
		}

		// Salva as imagens
		include_once "util/Upload.php"; 
		if(isset($_POST["submit"])) { 
			if(!empty($_FILES['banner-principal'])) {
				$foto = $_FILES['banner-principal'];
				$upload = new Upload($foto, 1000, 800, "public/"); 
				$upload->salvar();
			}
		} 

		// Renderiza HTML
		$template->saveHTML();

	?>

	<textarea><?php echo $template->getTemplate(); ?></textarea>

	<a href="index.php">Gerar nova news</a>

<?php include_once 'inc/footer.php'; ?>