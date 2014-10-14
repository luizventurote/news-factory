<?php

// Seta os valores da imagem para fazer o upload
function setImageProperties($imagem_id) {

	$imagens = array();
	
	if(!empty($_FILES[$imagem_id.'-url'])) {
		$foto = $_FILES[$imagem_id.'-url'];
		$upload = new Upload($foto, 1000, 800, "img/"); 
		$upload->salvar();

		// Salva no array
		$imagens = array($imagem_id => array(	'url'	=> $upload->getNovoNome(),
												'nome' 	=> $_POST[$imagem_id.'-nome'],
												'link' 	=> $_POST[$imagem_id.'-link'],
										));
	}

	return $imagens;

}


function getDataURL($referencia, $metodo) {
	
	$dados = null;

	if($metodo == 'POST') {

		if( !empty($_POST[$referencia]) ) {
			$dados = array($referencia => $_POST[$referencia]);
		}

	} elseif($metodo == 'GET') {

		if( !empty($_GET[$referencia]) ) {
			$dados = array($referencia => $_POST[$referencia]);
		}

	}

	return $dados;
}