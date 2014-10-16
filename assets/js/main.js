$(document).ready(function(){
  
	var produto_qtd  	= 1;
	var fields_qtd_max  = 6;
	var btn_add 		= $('#add_produto');
	var btn_remove 		= $('#remove_produto');
	var produto_wrapper = $('#produto_wrapper');
	var buttons_wrapper	= $('#btn_produto_wrapper');

	// Adiciona um novo campo
	btn_add.click(function(event) {

		event.preventDefault();

		produto_qtd++;

		// Adiciona botão de remover produto
		if(produto_qtd == 2) {
			btn_remove.show();
		}

		// Verifica a quantidade de campos
		if(produto_qtd <= fields_qtd_max) {
			produto_wrapper.append('<div id="produto_'+produto_qtd+'"><hr><h3>Produto '+produto_qtd+'</h3><div class="form-group"><label for="produto'+produto_qtd+'url">Imagem</label><input type="file" id="produto'+produto_qtd+'url" name="produto-'+produto_qtd+'-url" accept="image/*" required></div><div class="form-group"><label for="produto'+produto_qtd+'nome">Nome</label><input type="text" class="form-control" id="produto'+produto_qtd+'nome" name="produto-'+produto_qtd+'-nome"></div><div class="form-group"><label for="produto'+produto_qtd+'link">Nome</label><input type="text" class="form-control" id="produto'+produto_qtd+'link" name="produto-'+produto_qtd+'-link"></div></div>');
		
			// Remove o botão de add
			if(produto_qtd == fields_qtd_max) {
				btn_add.hide();
			}

		}
		
	});

	// Remove um campo
	btn_remove.click(function(event) {
		
		event.preventDefault();

		if(produto_qtd > 1) {

			$('#produto_'+produto_qtd).remove();

			produto_qtd--;

			if(produto_qtd == 1) {
				btn_remove.hide();
			}
		}

		if(produto_qtd < fields_qtd_max) {
			btn_add.show();
		}

	});

});