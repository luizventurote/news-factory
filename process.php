<?php include_once 'inc/header.php';

		// Array de dados
		$dados = array();

		// Array de dados
		$imagens = array();

		// Salva as dados
		if(isset($_POST["template"])) {

			// Banner principal
			$imagens[] = setImageProperties('banner-principal');

			// Banner rodapé
			if(isset($_POST["banner-rodape"])) {
				$imagens[] = setImageProperties('banner-rodape');
			} 			

			// Produtos
			if(isset($_POST["produto-1"])) {
				$imagens[] = setImageProperties('produto-1');
			}
			if(isset($_POST["produto-2"])) {
				$imagens[] = setImageProperties('produto-2');
			}
			if(isset($_POST["produto-3"])) {
				$imagens[] = setImageProperties('produto-3');
			}
			if(isset($_POST["produto-4"])) {
				$imagens[] = setImageProperties('produto-4');
			}
			if(isset($_POST["produto-5"])) {
				$imagens[] = setImageProperties('produto-5');
			}
			if(isset($_POST["produto-6"])) {
				$imagens[] = setImageProperties('produto-6');
			}

			// Seleciona o template
			switch ($_POST['template']) {
				case 1:
					include_once 'template/Template_1.php';
					$template = new Template_1($imagens);
					break;

				case 2:
					include_once 'template/Template_2.php';
					$template = new Template_2($imagens);
					break;

				case 3:
					include_once 'template/Template_3.php';
					$template = new Template_3($imagens);
					break;

				default:
					include_once 'template/Template.php';
					$template = new Template($imagens);
					break;
			}

		}

		// Renderiza HTML
		// $template->saveHTML();

	?>

	<div class="news-preview">
		<?php echo $template->html_template; ?>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">Código da News</div>
		<div class="panel-body">
			<textarea class="form-control" rows="10"><?php echo $template->html_template; ?></textarea>
		</div>
	</div>

	<a href="index.php" class="btn btn-primary btn-lg btn-block">Gerar nova news</a>

<?php include_once 'inc/footer.php'; ?>