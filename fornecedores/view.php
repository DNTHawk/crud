<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Fornecedor de Id: <?php echo $fornecedor['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $fornecedor['nome']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $fornecedor['fone']; ?></dd>
	 
	<dt>E-mail:</dt>
	<dd><?php echo $fornecedor['email']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $fornecedor['cidade']; ?></dd>
	
	<dt>Estado</dt>
	<dd><?php echo $fornecedor['estado']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $fornecedor['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>