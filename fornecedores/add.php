<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Fornecedor</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-5">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="fornecedor['nome']" require>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" id="telefone" name="fornecedor['fone']" require>
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">E-mail</label>
      <input type="email" class="form-control" name="fornecedor['email']" require>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Cidade</label>
      <input type="text" class="form-control" name="fornecedor['cidade']" require>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Estado</label>
      <input type="text" class="form-control" name="fornecedor['estado']" require>
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