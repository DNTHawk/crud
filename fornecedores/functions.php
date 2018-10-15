<?php
require_once('../config.php');
require_once(DBAPI);

$fornecedores = null;
$fornecedor = null;

function index() {
	global $fornecedores;
	$fornecedores = find_all('fornecedores');
}


?>

<?php
function add() {
  if (!empty($_POST['fornecedor'])) {
    
    $fornecedor = $_POST['fornecedor'];
    
    save('fornecedores', $fornecedor);
    header('location: index.php');
  }
}
?>

<?php

function edit() {
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['fornecedor'])) {
      $fornecedor = $_POST['fornecedor'];
      
      update('fornecedores', $id, $fornecedor);
      header('location: index.php');
    } else {
      global $fornecedor;
      $fornecedor = find('fornecedores', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>
<?php

function view($id = null) {
  global $fornecedor;
  $fornecedor = find('fornecedores', $id);
}
?>
<?php

function delete($id = null) {
  global $fornecedor;
  $fornecedor = remove('fornecedores', $id);
  header('location: index.php');
}
