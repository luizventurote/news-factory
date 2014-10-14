<?php

include_once 'template/Template.php';

Class Template_1 extends Template {

	public function getForm() {

		$str = '<form action="'.$this->process_page.'" method="POST" enctype="multipart/form-data">

				<h3>Informações da news</h3>

				<p>
					<label>Título</label>
					<input type="text" name="news-titulo">
				</p>

				<h3>Banner Principal</h3>
	
				<p>
					<label>Imagem</label>
					<input type="file" name="banner-principal-url" accept="image/*">
				</p>

				<p>
					<label>Nome</label>
					<input type="text" name="banner-principal-nome" accept="image/*">
				</p>

				<p>
					<label>Link</label>
					<input type="text" name="banner-principal-link" accept="image/*">
				</p>

				<input type="hidden" name="template" value="1">
				
				<input type="submit" name="submit"> 

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
		$str .= '<tr>
			    	<td>
			    		<a href="'.$banner_principal['link'].'">
			    			<img style="display:block;" src="'.URL_IMG.'/'.$banner_principal['url'].'" alt="'.$banner_principal['nome'].'">
			    		</a>
			    	</td>
			    </tr>';

		// Footer news
		$str .= "</table></body></html>";

		return $str;

	}

}