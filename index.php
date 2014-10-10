<?php include_once 'inc/header.php'; ?>

	<h1>Rapid News</h1>

	<p>Selecione um template</p>

	<ul>

		<?php for ($i=1; $i <= QTD_TEMPLATES; $i++): ?>

		<li>
			<a href="template-<?= $i ?>.php">Template <?= $i ?></a>
		</li>
		
		<?php endfor; ?>

	</ul>

<?php include_once 'inc/footer.php'; ?>