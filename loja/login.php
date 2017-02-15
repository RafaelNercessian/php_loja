<?php require_once 'conecta.php'; ?>
<?php require_once 'banco-usuario.php';?>
<?php require_once 'logica-usuario.php';?>
<?php session_start();?>

<?php
    $usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);
    if($usuario==null){
      header("Location:index.php?login=0");
    }else{
      logaUsuario($usuario["login"]);
      header("Location:index.php?login=1");
    }
    die();
?>
