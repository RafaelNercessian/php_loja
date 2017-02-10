<?php
function buscaUsuario($conexao,$login,$senha){
  $senhaMd5=md5($senha);
  $query="select * from usuarios where login='{$login}' and senha='{$senhaMd5}'";
  $resultado=mysqli_query($conexao,$query);
  $usuario=mysqli_fetch_assoc($resultado);
  return $usuario;
}
 ?>
