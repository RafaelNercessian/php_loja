<?php require_once 'conecta.php'; ?>
<?php require_once 'banco-usuario.php';?>


<?php
    $usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);
    if($usuario==null){
      header("Location:index.php?login=0");
    }else{
      setcookie("usuario_logado",$usuario["login"]);
      header("Location:index.php?login=1");
    }
    die();
?>
