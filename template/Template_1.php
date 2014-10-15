<?php

include_once 'template/Template.php';

Class Template_1 extends Template {

	public function getForm() {

		$str = '<form action="'.$this->process_page.'" method="POST" enctype="multipart/form-data">

				<h3>Informações da news</h3>

				<div class="form-group">
					<label for="newstitulo">Título da News</label>
					<input type="text" class="form-control" id="newstitulo" placeholder="Digite o título da news" name="news-titulo" required>
				</div><hr>

				<h3>Banner Principal</h3>

				<div class="form-group">
					<label for="bannerprincipalurl">Imagem</label>
					<input type="file" id="bannerprincipalurl" name="banner-principal-url" accept="image/*" required>
				</div>

				<div class="form-group">
					<label for="bannerprincipalnome">Nome</label>
					<input type="text" class="form-control" id="bannerprincipalnome" name="banner-principal-nome">
				</div>

				<div class="form-group">
					<label for="bannerprincipallink">Link</label>
					<input type="text" class="form-control" id="bannerprincipallink" name="banner-principal-link">
				</div><hr>

				<input type="hidden" name="template" value="1">
				
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Gerar news" name="submit"> 

			</form>';

		return $str;
	}

	public function getContent() {

		// Pega o banner principal
		$banner_principal = $this->getImage('banner-principal');

		// Header news
		$str = "<html>
				  <head>
				    <title></title>
				    <meta https-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
				  </head>
				  <body leftmargin='0' topmargin='0' marginwidth='0'  bgcolor='#FFFFFF' marginheight='0'>
				    <table border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>";

		// Banner principal
		$str .= '<tr><td>';

			if( !empty($banner_principal['link']) ) {
				$str .= '<a href="'.$banner_principal['link'].'">
			    			<img style="display:block;" src="'.URL_IMG.'/'.$banner_principal['url'].'" alt="'.$banner_principal['nome'].'">
			    		</a>';
			} else {
				$str .= '<img style="display:block;" src="'.URL_IMG.'/'.$banner_principal['url'].'" alt="'.$banner_principal['nome'].'">';
			}

		$str .= '</td></tr>';

		// Footer news
		$str .= "</table></body></html>";

		return $str;

	}

}