<?php require_once 'cabecalho.php' ?>
<?php require_once 'conecta.php' ?>
<?php require_once 'banco-produto.php' ?>

<?php
  $id=$_POST['id'];
  removeProduto($conexao,$id);
  header("Location: produto-lista.php?removido=true");
  die();
?>

<?php require_once 'rodape.php' ?>
