<?php include_once 'inc/header.php'; ?>

	<div class="mim-page">

		<h1>Fábrica de News</h1>	

		<?php for ($i=1; $i<=QTD_TEMPLATES; $i++): ?>
			<a class="btn btn-default btn-lg btn-block" style="margin-bottom: 10px" href="template.php?template=<?= $i ?>">Template <?= $i ?></a>
		<?php endfor; ?>

	</div>

<?php include_once 'inc/footer.php'; ?>