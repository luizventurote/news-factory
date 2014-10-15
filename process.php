<?php include_once 'inc/header.php'; ?>

	<?php 

		// Array de dados
		$dados = array();

		// Array de dados
		$imagens = array();

		// Salva as dados
		if(isset($_POST["template"])) {

			// Informações da news
			$dados[] = getDataURL('news-titulo', 'POST');

			// Banner principal
			$imagens[] = setImageProperties('banner-principal');

			// Banner rodapé
			$imagens[] = setImageProperties('banner-rodape');

			// Produtos
			$imagens[] = setImageProperties('produto-1');
			$imagens[] = setImageProperties('produto-2');
			$imagens[] = setImageProperties('produto-3');

			// Seleciona o template
			switch ($_POST['template']) {
				case 1:
					include_once 'template/Template_1.php';
					$template = new Template_1($dados, $imagens);
					break;

				case 2:
					include_once 'template/Template_2.php';
					$template = new Template_2($dados, $imagens);
					break;

				case 3:
					include_once 'template/Template_3.php';
					$template = new Template_3($dados, $imagens);
					break;
				
				default:
					include_once 'template/Template.php';
					$template = new Template($dados, $imagens);
					break;
			}

		}

		// Renderiza HTML
		$template->saveHTML();

	?>

	<?php echo $template->html_template; ?>

	<br><br>

	<textarea><?php echo $template->html_template; ?></textarea>

	<br>

	<a href="index.php">Gerar nova news</a>

	<br>
	<br>
	<br>

<?php include_once 'inc/footer.php'; ?>