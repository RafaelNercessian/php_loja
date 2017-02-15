<?php
class CategoriaDAO{

  private $conexao;

  function __construct($conexao){
    $this->conexao=$conexao;
  }

  function listaCategorias(){
    $categorias=array();
    $query="select * from categorias";
    $resultado=mysqli_query($this->conexao,$query);
    while($array=mysqli_fetch_assoc($resultado)){
      $categoria=new Categoria();
      $categoria->setId($array["id"]);
      $categoria->setNome($array["nome"]);
      array_push($categorias,$categoria);
    }
    return $categorias;
  }
}




?>
