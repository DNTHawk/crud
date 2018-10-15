<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Fornecedor</h2>

<form action="edit.php?id=<?php echo $fornecedor['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="fornecedor['nome']" value="<?php echo $fornecedor['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" id="telefone" name="fornecedor['fone']" value="<?php echo $fornecedor['fone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">E-mail</label>
      <input type="text" class="form-control" name="fornecedor['email']" value="<?php echo $fornecedor['email']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Cidade</label>
      <input type="text" class="form-control" name="fornecedor['cidade']" value="<?php echo $fornecedor['cidade']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Estado</label>
      <input type="text" class="form-control" name="fornecedor['estado']" value="<?php echo $fornecedor['estado']; ?>">
    </div>

    
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>