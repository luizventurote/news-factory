<?php

include_once 'template/Template.php';

Class Template_3 extends Template {

	public function getForm() {

		// Topo
		$str = '<form action="'.$this->process_page.'" method="POST" enctype="multipart/form-data">';

		// Informações da news
		$str .= '<h3>Informações da news</h3>

				<p>
					<label>Título</label>
					<input type="text" name="news-titulo">
				</p>';

		// Banner Principal
		$str .= '<h3>Banner Principal</h3>
	
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
				</p>';

		for($i=1; $i<=2; $i++) { 
			
			// Produtos
			$str .= '<h3>Produto '.$i.'</h3>
	
				<p>
					<label>Imagem</label>
					<input type="file" name="produto-'.$i.'-url" accept="image/*">
				</p>

				<p>
					<label>Nome</label>
					<input type="text" name="produto-'.$i.'-nome" accept="image/*">
				</p>

				<p>
					<label>Link</label>
					<input type="text" name="produto-'.$i.'-link" accept="image/*">
				</p>';
		}

		// Banner do footer
		$str .= '<h3>Banner do rodapé</h3>
	
				<p>
					<label>Imagem</label>
					<input type="file" name="banner-rodape-url" accept="image/*">
				</p>

				<p>
					<label>Nome</label>
					<input type="text" name="banner-rodape-nome" accept="image/*">
				</p>

				<p>
					<label>Link</label>
					<input type="text" name="banner-rodape-link" accept="image/*">
				</p>';

		// Footer
		$str .= '<input type="hidden" name="template" value="3">
				
				<input type="submit" name="submit"> 

			</form>';

		return $str;
	}

	public function getContent() {

		// Pega as imagens
		$banner_principal 	= $this->getImage('banner-principal');
		$banner_rodape 		= $this->getImage('banner-rodape');
		$banner_produto_1 	= $this->getImage('produto-1');
		$banner_produto_2 	= $this->getImage('produto-2');

		// Header news
		$str = "<html>
				  <head>
				    <title></title>
				    <meta https-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
				  </head>
				  <body leftmargin='0' topmargin='0' marginwidth='0'  bgcolor='#FFFFFF' marginheight='0' style='color: #000; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3;'>
				    <table style='margin: auto; width: 570px;' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>";

		$str .= '

			<tr>
				<td>
					<a href="http://www.videbula.com.br/">
						<img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/header.jpg" alt="Vide Bula - Unconventional Denin Deluxe" />
					</a>
				</td>
			</tr>

			<tr>
				<td style="height: 31px; background: url(http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/menu-bg.jpg) repeat-x; text-align: center; padding-bottom: 20px">
					<a href="http://goo.gl/LT8btq"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/feminino-link.jpg" style="display: inline-block;" alt="Feminino" /></a>
					<a href="http://goo.gl/05mVaj"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/masculino-link.jpg" style="display: inline-block;" alt="Masculino" /></a>
				</td>
			</tr>';

			// Banner principal
			$str .= '
			<tr>
				<td style="padding-bottom: 16px">
					<a href="'.$banner_principal['link'].'">
						<img style="display:block;" src="'.URL_IMG.'/'.$banner_principal['url'].'" alt="'.$banner_principal['nome'].'">
					</a>
				</td>
			</tr>';

			$str .= '
			<tr>
				<td>
					
					<table class="table-inside">
						<tr>';
							
						$str .= '
							<td>
								<a href="'.$banner_produto_1['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_1['url'].'" alt="'.$banner_produto_1['nome'].'" /></a>
							</td>
						';

						$str .= '
							<td>
								<a href="'.$banner_produto_2['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_2['url'].'" alt="'.$banner_produto_2['nome'].'" /></a>
							</td>
						';
						
			$str .= '	</tr>
					</table>

				</td>
			</tr>';

			// Banner rodapé
			$str .= '
			<tr>
				<td>
					<a href="'.$banner_rodape['link'].'">
						<img style="display:block;" src="'.URL_IMG.'/'.$banner_rodape['url'].'" alt="'.$banner_rodape['nome'].'">
					</a>
				</td>
			</tr>';

			$str .= '
			<tr>
				<td style="padding: 10px 0;">
					<img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/parcelamento.jpg" alt="Parcelamento" />
				</td>
			</tr>

			<tr>
				<td style="height: 39px; background: url(http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/footer-bg.jpg) repeat-x; padding: 0 10px; text-align: center;">
					
					<a href="http://www.videbula.com.br/"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/videbula-logo.jpg" style="float: left" alt="Vide Bula" /></a>
					
					<a href="http://www.videbula.com.br/"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/videbula-url.jpg" style="display: inline-block;" alt="Vide Bula" /></a>

					<a href="http://instagram.com/videbulaoficial"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/instagram.jpg" style="float: right; margin: 6px 0 0 0;" alt="Instagram" /></a>

					<a href="https://www.facebook.com/videbulaoficial"><img src="http://blog.videbula.com.br/news/vide-bula/01-10-2014/img/facebook.jpg" style="float: right; margin: 6px 15px 0 0;" alt="Facebook" /></a>

				</td>
			</tr>
			
			<tr>
				<td style="text-align: center; padding: 5px 0">
					<p class="text-min">CONFIRA A POLÍTICA DE TROCA EM: <a href="http://goo.gl/YluLKI">http://goo.gl/YluLKI</a></p>
				</td>
			</tr>

		';

		// Style
		$str .= $this->getStyle();

		// Footer news
		$str .= "</table></body></html>";

		return $str;

	}

}