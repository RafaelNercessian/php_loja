<?php require_once 'conecta.php'; ?>
<?php require_once 'banco-usuario.php';?>


<?php
    session_start();
    $usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);
    if($usuario==null){
      header("Location:index.php");
    }else{
      $_SESSION["usuario_logado"]=$usuario["login"];
      header("Location:index.php");
    }
    die();
?>
