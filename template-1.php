<?php include_once 'inc/header.php'; ?>

<form action="process.php" method="POST" enctype="multipart/form-data">
	
	<p>
		<label>Banner principal</label>
		<input type="file" name="banner-principal" accept="image/*">
	</p>

	<?php for ($i=1; $i <= 6; $i++): ?>

	<p>
		<label>Foto <?= $i ?></label>
		<input type="file" name="foto-<?= $i ?>" accept="image/*">
	</p>

	<?php endfor; ?>

	<p>
		<label>Produtos do lado esquerdo</label>
		<input type="file" name="produtos-esquerdo" accept="image/*">
	</p>

	<p>
		<label>Produto do lado direito</label>
		<input type="file" name="produto-direito" accept="image/*">
	</p>

	<p>
		<label>Imagem do rodapé</label>
		<input type="file" name="img-rodape" accept="image/*">
	</p>

	<input type="hidden" name="template" value="1">
	
	<input type='submit' name='submit'> 

</form>

<?php include_once 'inc/footer.php'; ?>