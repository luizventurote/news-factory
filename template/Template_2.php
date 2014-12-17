<?php

include_once 'template/Template.php';

Class Template_2 extends Template {

	public function getForm() {

		// Topo
		$str = '<form action="'.$this->process_page.'" method="POST" enctype="multipart/form-data">';

		// Banner Principal
		$str .= '<h3>Banner Principal</h3>

				<div class="form-group">
					<label for="bannerprincipalurl">Imagem</label>
					<input type="file" id="bannerprincipalurl" name="banner-principal-url" accept="image/*">
				</div>
	
				<div class="form-group">
					<label for="bannerprincipalnome">Nome</label>
					<input type="text" class="form-control" id="bannerprincipalnome" name="banner-principal-nome">
				</div>

				<div class="form-group">
					<label for="bannerprincipallink">Link</label>
					<input type="text" class="form-control" id="bannerprincipallink" name="banner-principal-link">
				</div><hr>';

		// Produto
			$str .= '

				<div id="produto_wrapper">

					<div id="produto_1">

						<h3>Produto 1</h3>

						<div class="form-group">
							<label for="produto1url">Imagem</label>
							<input type="file" id="produto1url" name="produto-1-url" accept="image/*">
						</div>

						<div class="form-group">
							<label for="produto1nome">Nome</label>
							<input type="text" class="form-control" id="produto1nome" name="produto-1-nome">
						</div>

						<div class="form-group">
							<label for="produto1link">Link</label>
							<input type="text" class="form-control" id="produto1link" name="produto-1-link">
						</div>

					</div>

				</div>

				<div id="btn_produto_wrapper">

					<button id="add_produto" class="btn btn-primary" type="button">Adicionar produto +</button>

					<button id="remove_produto" class="btn btn-danger" style="display: none;" type="button">Remover produto</button>

				</div>

				<hr>';

		// Banner do footer parte 1
		$str .= '<h3>Banner do rodapé (Parte 1)</h3>

				<div class="form-group">
					<label for="bannerrodapeurl">Imagem</label>
					<input type="file" id="bannerrodapeurl" name="banner-rodape-url" accept="image/*">
				</div>

				<div class="form-group">
					<label for="bannerrodapenome">Nome</label>
					<input type="text" class="form-control" id="bannerrodapenome" name="banner-rodape-nome">
				</div>

				<div class="form-group">
					<label for="bannerrodapelink">Link</label>
					<input type="text" class="form-control" id="bannerrodapelink" name="banner-rodape-link">
				</div><hr>';

		// Banner do footer part 2
		$str .= '<h3>Banner do rodapé (Parte 2)</h3>

				<div class="form-group">
					<label for="bannerrodape2url">Imagem</label>
					<input type="file" id="bannerrodape2url" name="banner-rodape-2-url" accept="image/*">
				</div>

				<div class="form-group">
					<label for="bannerrodape2nome">Nome</label>
					<input type="text" class="form-control" id="bannerrodape2nome" name="banner-rodape-2-nome">
				</div>

				<div class="form-group">
					<label for="bannerrodape2link">Link</label>
					<input type="text" class="form-control" id="bannerrodape2link" name="banner-rodape-2-link">
				</div><hr>';

		// Footer
		$str .= '<input type="hidden" name="template" value="2">
				
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="Gerar news" name="submit"> 

			</form>';

		return $str;
	}

	public function getContent() {

		// Pega as imagens
		$banner_principal 	= $this->getImage('banner-principal');
		$banner_rodape 		= $this->getImage('banner-rodape');
		$banner_rodape_2 	= $this->getImage('banner-rodape-2');

		$banner_produto_1 	= $this->getImage('produto-1');
		$banner_produto_2 	= $this->getImage('produto-2');
		$banner_produto_3 	= $this->getImage('produto-3');
		$banner_produto_4 	= $this->getImage('produto-4');
		$banner_produto_5 	= $this->getImage('produto-5');
		$banner_produto_6 	= $this->getImage('produto-6');

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
						
						if($banner_produto_1 != null) {
							$str .= '
								<td>
									<a href="'.$banner_produto_1['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_1['url'].'" alt="'.$banner_produto_1['nome'].'" /></a>
								</td>
							';
						}

						if($banner_produto_2 != null) {
							$str .= '
								<td>
									<a href="'.$banner_produto_2['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_2['url'].'" alt="'.$banner_produto_2['nome'].'" /></a>
								</td>
							';
						}

						if($banner_produto_3 != null) {
							$str .= '
								<td>
									<a href="'.$banner_produto_3['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_3['url'].'" alt="'.$banner_produto_3['nome'].'" /></a>
								</td>
							';
						}

			$str .= '	</tr>
					</table>

				</td>
			</tr>';

			$str .= '
			<tr>
				<td>
					
					<table class="table-inside">
						<tr>';

						if($banner_produto_4 != null) {							
							$str .= '
								<td>
									<a href="'.$banner_produto_4['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_4['url'].'" alt="'.$banner_produto_4['nome'].'" /></a>
								</td>
							';
						}

						if($banner_produto_5 != null) {
							$str .= '
								<td>
									<a href="'.$banner_produto_5['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_5['url'].'" alt="'.$banner_produto_5['nome'].'" /></a>
								</td>
							';
						}

						if($banner_produto_6 != null) {
							$str .= '
								<td>
									<a href="'.$banner_produto_6['link'].'"><img src="'.URL_IMG.'/'.$banner_produto_6['url'].'" alt="'.$banner_produto_6['nome'].'" /></a>
								</td>
							';
						}

			$str .= '	</tr>
					</table>

				</td>
			</tr>';

			// Banner rodapé
			if(!empty($banner_rodape['nome'])) {
				$str .= '
				<tr><td>
						<a href="'.$banner_rodape['link'].'" style="float: left">
							<img style="display:block;" src="'.URL_IMG.'/'.$banner_rodape['url'].'" alt="'.$banner_rodape['nome'].'">
						</a>
					';

					if(!empty($banner_rodape_2['nome'])) {
						$str .= '
							<a href="'.$banner_rodape_2['link'].'" style="float: left">
								<img style="display:block;" src="'.URL_IMG.'/'.$banner_rodape_2['url'].'" alt="'.$banner_rodape_2['nome'].'">
							</a>
						';
					}

				$str .= '</td></tr>';
			}

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
					<p class="text-min">POLÍTICA DE TROCA EM: <a href="http://goo.gl/YluLKI">http://goo.gl/YluLKI</a></p>
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